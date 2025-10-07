<?php

class DatabaseService extends SQLite3
{
    private static $instance;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseService();
        }
        return self::$instance;
    }

    function __construct()
    {
        $this->open('services/database.db');
        $this->initializeTables();
    }

    private function initializeTables()
    {
        // Create users table if it doesn't exist
        $this->exec("CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            email TEXT UNIQUE NOT NULL,
            password TEXT NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )");

        // Create staff table for extended user management
        $this->exec("CREATE TABLE IF NOT EXISTS staff (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            first_name TEXT NOT NULL,
            last_name TEXT NOT NULL,
            phone TEXT,
            role TEXT NOT NULL DEFAULT 'Booking Manager',
            profile_picture TEXT,
            is_active INTEGER DEFAULT 1,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
        )");

        // Create permissions table for role-based access
        $this->exec("CREATE TABLE IF NOT EXISTS permissions (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            role TEXT NOT NULL,
            permission TEXT NOT NULL,
            UNIQUE(role, permission)
        )");

        // Insert default permissions if not exists
        $this->insertDefaultPermissions();
    }

    private function insertDefaultPermissions()
    {
        $permissions = [
            // Admin permissions
            ['Admin', 'billing'],
            ['Admin', 'edit_business_details'],
            ['Admin', 'create_staff_accounts'],
            ['Admin', 'pricing'],
            ['Admin', 'refunds'],
            ['Admin', 'update_bookings'],
            ['Admin', 'create_bookings'],
            ['Admin', 'delete_bookings'],
            ['Admin', 'edit_email_templates'],
            ['Admin', 'send_email_campaigns'],
            
            // Manager permissions
            ['Manager', 'pricing'],
            ['Manager', 'refunds'],
            ['Manager', 'update_bookings'],
            ['Manager', 'create_bookings'],
            ['Manager', 'delete_bookings'],
            ['Manager', 'edit_email_templates'],
            ['Manager', 'send_email_campaigns'],
            
            // Booking Manager permissions (no email permissions)
            ['Booking Manager', 'update_bookings'],
            ['Booking Manager', 'create_bookings'],
            ['Booking Manager', 'delete_bookings']
        ];

        foreach ($permissions as $perm) {
            $this->exec("INSERT OR IGNORE INTO permissions (role, permission) VALUES ('{$perm[0]}', '{$perm[1]}')");
        }
    }

    function checkUser($email)
    {
        $result = $this->query('SELECT * from "users" where email="' . $email . '"');
        while ($row = $result->fetchArray()) {
            return true;
        }
        return false;
    }

    function createUser($email, $password, $firstName, $lastName, $phone = '', $role = 'Booking Manager')
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert into users table
            $stmt = $this->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bindValue(1, $email, SQLITE3_TEXT);
            $stmt->bindValue(2, $hashedPassword, SQLITE3_TEXT);
            $result = $stmt->execute();
            
            if ($result) {
                $userId = $this->lastInsertRowID();
                
                // Insert into staff table
                $stmt = $this->prepare("INSERT INTO staff (user_id, first_name, last_name, phone, role) VALUES (?, ?, ?, ?, ?)");
                $stmt->bindValue(1, $userId, SQLITE3_INTEGER);
                $stmt->bindValue(2, $firstName, SQLITE3_TEXT);
                $stmt->bindValue(3, $lastName, SQLITE3_TEXT);
                $stmt->bindValue(4, $phone, SQLITE3_TEXT);
                $stmt->bindValue(5, $role, SQLITE3_TEXT);
                $staffResult = $stmt->execute();
                
                return $staffResult ? $userId : false;
            }
            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    function getAllStaff()
    {
        $query = "SELECT s.*, u.email, u.created_at as user_created_at 
                  FROM staff s 
                  JOIN users u ON s.user_id = u.id 
                  WHERE s.is_active = 1 
                  ORDER BY s.first_name, s.last_name";
        $result = $this->query($query);
        $staff = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $staff[] = $row;
        }
        return $staff;
    }

    function getStaffById($id)
    {
        $stmt = $this->prepare("SELECT s.*, u.email FROM staff s JOIN users u ON s.user_id = u.id WHERE s.id = ?");
        $stmt->bindValue(1, $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    function updateStaff($id, $firstName, $lastName, $email, $phone, $role)
    {
        try {
            // Get current staff data
            $staff = $this->getStaffById($id);
            if (!$staff) return false;

            // Update users table
            $stmt = $this->prepare("UPDATE users SET email = ? WHERE id = ?");
            $stmt->bindValue(1, $email, SQLITE3_TEXT);
            $stmt->bindValue(2, $staff['user_id'], SQLITE3_INTEGER);
            $result = $stmt->execute();

            if ($result) {
                // Update staff table
                $stmt = $this->prepare("UPDATE staff SET first_name = ?, last_name = ?, phone = ?, role = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
                $stmt->bindValue(1, $firstName, SQLITE3_TEXT);
                $stmt->bindValue(2, $lastName, SQLITE3_TEXT);
                $stmt->bindValue(3, $phone, SQLITE3_TEXT);
                $stmt->bindValue(4, $role, SQLITE3_TEXT);
                $stmt->bindValue(5, $id, SQLITE3_INTEGER);
                return $stmt->execute();
            }
            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    function deleteStaff($id)
    {
        try {
            $staff = $this->getStaffById($id);
            if (!$staff) return false;

            // Soft delete staff
            $stmt = $this->prepare("UPDATE staff SET is_active = 0 WHERE id = ?");
            $stmt->bindValue(1, $id, SQLITE3_INTEGER);
            return $stmt->execute();
        } catch (Exception $e) {
            return false;
        }
    }

    function resetPassword($userId, $newPassword)
    {
        try {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $stmt = $this->prepare("UPDATE users SET password = ? WHERE id = ?");
            $stmt->bindValue(1, $hashedPassword, SQLITE3_TEXT);
            $stmt->bindValue(2, $userId, SQLITE3_INTEGER);
            return $stmt->execute();
        } catch (Exception $e) {
            return false;
        }
    }

    function updateProfilePicture($staffId, $picturePath)
    {
        try {
            $stmt = $this->prepare("UPDATE staff SET profile_picture = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
            $stmt->bindValue(1, $picturePath, SQLITE3_TEXT);
            $stmt->bindValue(2, $staffId, SQLITE3_INTEGER);
            return $stmt->execute();
        } catch (Exception $e) {
            return false;
        }
    }

    function getRolePermissions($role)
    {
        $stmt = $this->prepare("SELECT permission FROM permissions WHERE role = ?");
        $stmt->bindValue(1, $role, SQLITE3_TEXT);
        $result = $stmt->execute();
        $permissions = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $permissions[] = $row['permission'];
        }
        return $permissions;
    }

    function authenticateUser($email, $password)
    {
        $stmt = $this->prepare("SELECT u.*, s.* FROM users u LEFT JOIN staff s ON u.id = s.user_id WHERE u.email = ? AND s.is_active = 1");
        $stmt->bindValue(1, $email, SQLITE3_TEXT);
        $result = $stmt->execute();
        $user = $result->fetchArray(SQLITE3_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}

?>