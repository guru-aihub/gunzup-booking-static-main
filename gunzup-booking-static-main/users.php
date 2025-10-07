<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Home";
include 'partials/title-meta.php'
?>

<!-- Fullcalendar css -->
<link href="assets/vendor/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />
<?php include 'partials/head-css.php' ?>
</head>

<body>
<!-- START Wrapper -->
<div class="wrapper">
  <?php include 'partials/menu.php' ?>
  
  <!-- ==================================================== --> 
  <!-- Start right Content here --> 
  <!-- ==================================================== -->
  <div class="page-content">     
    <!-- Start Container -->
    <div class="container-xxl">      
      <div class="row">
        <div class="col">
          <h4>Staff Users</h4>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 search-bar"> 
                  <span><i class="bx bx-search-alt"></i></span>
                  <input type="search" class="form-control" id="search" placeholder="Search Name or Email" />
                </div>
                <div class="col-md-4">
                  <select class="form-select" id="roleFilter">
                    <option value="">All Roles</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Booking Manager">Booking Manager</option>
                  </select>
                </div>
                <div class="col-md-4 text-end">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                    <i class="bx bx-plus"></i> Add Staff User
                  </button>
                </div>
              </div>
              <!-- end row --> 
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-card">
                <table class="table text-nowrap mb-0" id="staffTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>                      
                      <th class="border-0 py-2">Staff Member <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Email <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Phone <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Role <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Created <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-role="Admin">
                      <td>
                        <div class="d-flex align-items-center"> 
                          <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2" />
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"><a href="profile.php" class="text-decoration-none">John Smith</a></h5>
                          </div>
                        </div>
                      </td>
                      <td>john.smith@company.com</td>
                      <td>(555) 123-4567</td>
                      <td><span class="badge bg-danger">Admin</span></td>
                      <td>Jan 15, 2024</td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" 
                                  onclick="editUser(1)">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset Password">
                          <button type="button" class="btn btn-sm btn-soft-warning me-1"
                                  onclick="resetPassword(1, 'John Smith')">
                            <i class="bx bx-key fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger"
                                  onclick="deleteUser(1, 'John Smith')">
                            <i class="bx bx-trash fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr data-role="Manager">
                      <td>
                        <div class="d-flex align-items-center"> 
                          <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2" />
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"><a href="profile.php" class="text-decoration-none">Sarah Johnson</a></h5>
                          </div>
                        </div>
                      </td>
                      <td>sarah.johnson@company.com</td>
                      <td>(555) 234-5678</td>
                      <td><span class="badge bg-warning">Manager</span></td>
                      <td>Feb 03, 2024</td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" 
                                  onclick="editUser(2)">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset Password">
                          <button type="button" class="btn btn-sm btn-soft-warning me-1"
                                  onclick="resetPassword(2, 'Sarah Johnson')">
                            <i class="bx bx-key fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger"
                                  onclick="deleteUser(2, 'Sarah Johnson')">
                            <i class="bx bx-trash fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr data-role="Booking Manager">
                      <td>
                        <div class="d-flex align-items-center"> 
                          <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2" />
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"><a href="profile.php" class="text-decoration-none">Mike Davis</a></h5>
                          </div>
                        </div>
                      </td>
                      <td>mike.davis@company.com</td>
                      <td>N/A</td>
                      <td><span class="badge bg-info">Booking Manager</span></td>
                      <td>Feb 18, 2024</td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" 
                                  onclick="editUser(3)">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset Password">
                          <button type="button" class="btn btn-sm btn-soft-warning me-1"
                                  onclick="resetPassword(3, 'Mike Davis')">
                            <i class="bx bx-key fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger"
                                  onclick="deleteUser(3, 'Mike Davis')">
                            <i class="bx bx-trash fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr data-role="Booking Manager">
                      <td>
                        <div class="d-flex align-items-center"> 
                          <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2" />
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"><a href="profile.php" class="text-decoration-none">Emily Wilson</a></h5>
                          </div>
                        </div>
                      </td>
                      <td>emily.wilson@company.com</td>
                      <td>(555) 345-6789</td>
                      <td><span class="badge bg-info">Booking Manager</span></td>
                      <td>Mar 02, 2024</td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" 
                                  onclick="editUser(4)">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset Password">
                          <button type="button" class="btn btn-sm btn-soft-warning me-1"
                                  onclick="resetPassword(4, 'Emily Wilson')">
                            <i class="bx bx-key fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger"
                                  onclick="deleteUser(4, 'Emily Wilson')">
                            <i class="bx bx-trash fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <?php include 'partials/footer.php' ?>
  </div>
  <!-- ==================================================== -->
  <!-- End Page Content -->
  <!-- ==================================================== -->
</div>
<!-- END Wrapper -->

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Add Staff User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addUserForm">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="first_name" class="form-label">First Name *</label>
              <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="last_name" class="form-label">Last Name *</label>
              <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone">
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="password" class="form-label">Password *</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" required minlength="8">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                  <i class="bx bx-hide" id="passwordIcon"></i>
                </button>
              </div>
              <div class="form-text">Must be 8+ characters with letters, numbers & special characters</div>
              <div class="invalid-feedback">
                Password must be 8+ characters with letters, numbers & special characters.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="confirm_password" class="form-label">Confirm Password *</label>
              <div class="input-group">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required minlength="8">
                <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                  <i class="bx bx-hide" id="confirmPasswordIcon"></i>
                </button>
              </div>
              <div class="invalid-feedback">
                Passwords do not match.
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role *</label>
            <select class="form-select" id="role" name="role" required>
              <option value="Booking Manager">Booking Manager</option>
              <option value="Manager">Manager</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
          <div class="alert alert-info">
            <strong>Role Permissions:</strong>
            <ul class="mb-0 mt-2">
              <li><strong>Admin:</strong> Full access including billing, business settings, and staff management</li>
              <li><strong>Manager:</strong> Pricing, refunds, and booking management</li>
              <li><strong>Booking Manager:</strong> Basic booking operations only</li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Create User</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Edit Staff User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editUserForm">
        <input type="hidden" id="edit_id" name="id">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="edit_first_name" class="form-label">First Name *</label>
              <input type="text" class="form-control" id="edit_first_name" name="first_name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="edit_last_name" class="form-label">Last Name *</label>
              <input type="text" class="form-control" id="edit_last_name" name="last_name" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="edit_email" class="form-label">Email *</label>
            <input type="email" class="form-control" id="edit_email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="edit_phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="edit_phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="edit_role" class="form-label">Role *</label>
            <select class="form-select" id="edit_role" name="role" required>
              <option value="Booking Manager">Booking Manager</option>
              <option value="Manager">Manager</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update User</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Reset Password Modal -->
<div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resetPasswordModalLabel">Reset Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="resetPasswordForm">
        <input type="hidden" id="reset_id" name="id">
        <div class="modal-body">
          <p>Reset password for <strong id="reset_user_name"></strong>?</p>
          <div class="mb-3">
            <label for="new_password" class="form-label">New Password *</label>
            <div class="input-group">
              <input type="password" class="form-control" id="new_password" name="new_password" required minlength="8">
              <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                <i class="bx bx-hide" id="newPasswordIcon"></i>
              </button>
            </div>
            <div class="form-text">Must be 8+ characters with letters, numbers & special characters</div>
          </div>
          <div class="mb-3">
            <label for="reset_confirm_password" class="form-label">Confirm Password *</label>
            <div class="input-group">
              <input type="password" class="form-control" id="reset_confirm_password" name="reset_confirm_password" required minlength="8">
              <button class="btn btn-outline-secondary" type="button" id="toggleResetConfirmPassword">
                <i class="bx bx-hide" id="resetConfirmPasswordIcon"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-warning">Reset Password</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete <strong id="delete_user_name"></strong>?</p>
        <p class="text-danger small">This action cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDelete">Delete User</button>
      </div>
    </div>
  </div>
</div>

<?php include 'partials/vendor-scripts.php' ?>

<script>
// Search functionality
document.getElementById('search').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#staffTable tbody tr');
    
    rows.forEach(row => {
        const name = row.cells[0].textContent.toLowerCase();
        const email = row.cells[1].textContent.toLowerCase();
        
        if (name.includes(searchTerm) || email.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Role filter
document.getElementById('roleFilter').addEventListener('change', function() {
    const selectedRole = this.value;
    const rows = document.querySelectorAll('#staffTable tbody tr');
    
    rows.forEach(row => {
        const role = row.getAttribute('data-role');
        
        if (!selectedRole || role === selectedRole) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Password validation functions
function validatePassword(password) {
    const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return passwordRegex.test(password);
}

function checkPasswordsMatch() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    const confirmField = document.getElementById('confirm_password');
    
    if (confirmPassword && password !== confirmPassword) {
        confirmField.classList.add('is-invalid');
        return false;
    } else {
        confirmField.classList.remove('is-invalid');
        return true;
    }
}

// Real-time password validation
document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const isValid = validatePassword(password);
    
    if (password && !isValid) {
        this.classList.add('is-invalid');
    } else {
        this.classList.remove('is-invalid');
    }
    
    // Also check confirm password when main password changes
    checkPasswordsMatch();
});

document.getElementById('confirm_password').addEventListener('input', checkPasswordsMatch);

// Password visibility toggle functionality
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordField = document.getElementById('password');
    const passwordIcon = document.getElementById('passwordIcon');
    
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordIcon.classList.remove('bx-hide');
        passwordIcon.classList.add('bx-show');
    } else {
        passwordField.type = 'password';
        passwordIcon.classList.remove('bx-show');
        passwordIcon.classList.add('bx-hide');
    }
});

document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
    const confirmPasswordField = document.getElementById('confirm_password');
    const confirmPasswordIcon = document.getElementById('confirmPasswordIcon');
    
    if (confirmPasswordField.type === 'password') {
        confirmPasswordField.type = 'text';
        confirmPasswordIcon.classList.remove('bx-hide');
        confirmPasswordIcon.classList.add('bx-show');
    } else {
        confirmPasswordField.type = 'password';
        confirmPasswordIcon.classList.remove('bx-show');
        confirmPasswordIcon.classList.add('bx-hide');
    }
});

// Reset Password modal eye toggle functionality
document.getElementById('toggleNewPassword').addEventListener('click', function() {
    const newPasswordField = document.getElementById('new_password');
    const newPasswordIcon = document.getElementById('newPasswordIcon');
    
    if (newPasswordField.type === 'password') {
        newPasswordField.type = 'text';
        newPasswordIcon.classList.remove('bx-hide');
        newPasswordIcon.classList.add('bx-show');
    } else {
        newPasswordField.type = 'password';
        newPasswordIcon.classList.remove('bx-show');
        newPasswordIcon.classList.add('bx-hide');
    }
});

document.getElementById('toggleResetConfirmPassword').addEventListener('click', function() {
    const resetConfirmPasswordField = document.getElementById('reset_confirm_password');
    const resetConfirmPasswordIcon = document.getElementById('resetConfirmPasswordIcon');
    
    if (resetConfirmPasswordField.type === 'password') {
        resetConfirmPasswordField.type = 'text';
        resetConfirmPasswordIcon.classList.remove('bx-hide');
        resetConfirmPasswordIcon.classList.add('bx-show');
    } else {
        resetConfirmPasswordField.type = 'password';
        resetConfirmPasswordIcon.classList.remove('bx-show');
        resetConfirmPasswordIcon.classList.add('bx-hide');
    }
});

// Add user form submission (mockup)
document.getElementById('addUserForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    
    console.log('Password:', password); // Debug
    console.log('Confirm Password:', confirmPassword); // Debug
    console.log('Match:', password === confirmPassword); // Debug
    
    // Password validation: minimum 8 characters with letters, numbers, and special characters
    if (!validatePassword(password)) {
        alert('Password must be at least 8 characters long and contain letters, numbers, and special characters (@$!%*?&)');
        document.getElementById('password').focus();
        return;
    }
    
    // Check if passwords match
    if (password !== confirmPassword) {
        alert('Passwords do not match. Please make sure both password fields are identical.');
        document.getElementById('confirm_password').focus();
        return;
    }
    
    // Show success message for mockup
    alert('User would be created successfully (Mockup Mode)');
    bootstrap.Modal.getInstance(document.getElementById('addUserModal')).hide();
    this.reset();
});

// Edit user form submission (mockup)
document.getElementById('editUserForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show success message for mockup
    alert('User would be updated successfully (Mockup Mode)');
    bootstrap.Modal.getInstance(document.getElementById('editUserModal')).hide();
});

// Reset password form submission (mockup)
document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const newPassword = document.getElementById('new_password').value;
    const confirmPassword = document.getElementById('reset_confirm_password').value;
    
    // Password validation: minimum 8 characters with letters, numbers, and special characters
    if (!validatePassword(newPassword)) {
        alert('Password must be at least 8 characters long and contain letters, numbers, and special characters (@$!%*?&)');
        document.getElementById('new_password').focus();
        return;
    }
    
    if (newPassword !== confirmPassword) {
        alert('Passwords do not match. Please make sure both password fields are identical.');
        document.getElementById('reset_confirm_password').focus();
        return;
    }
    
    // Show success message for mockup
    alert('Password would be reset successfully (Mockup Mode)');
    bootstrap.Modal.getInstance(document.getElementById('resetPasswordModal')).hide();
    this.reset();
});

// Edit user function
function editUser(id) {
    // Get user data from the table row
    const row = document.querySelector(`button[onclick="editUser(${id})"]`).closest('tr');
    const cells = row.cells;
    
    // Extract data from the row
    const fullName = cells[0].querySelector('h5').textContent.trim();
    const nameParts = fullName.split(' ');
    const firstName = nameParts[0];
    const lastName = nameParts.slice(1).join(' ');
    const email = cells[1].textContent.trim();
    const phone = cells[2].textContent.trim();
    const role = row.getAttribute('data-role');
    
    // Populate the edit form
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_first_name').value = firstName;
    document.getElementById('edit_last_name').value = lastName;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_phone').value = phone === 'N/A' ? '' : phone;
    document.getElementById('edit_role').value = role;
    
    // Show the modal
    new bootstrap.Modal(document.getElementById('editUserModal')).show();
}

// Reset password function
function resetPassword(id, name) {
    document.getElementById('reset_id').value = id;
    document.getElementById('reset_user_name').textContent = name;
    document.getElementById('new_password').value = '';
    document.getElementById('reset_confirm_password').value = '';
    
    new bootstrap.Modal(document.getElementById('resetPasswordModal')).show();
}

// Delete user function
function deleteUser(id, name) {
    document.getElementById('delete_user_name').textContent = name;
    
    document.getElementById('confirmDelete').onclick = function() {
        // Show success message for mockup
        alert('User would be deleted successfully (Mockup Mode)');
        bootstrap.Modal.getInstance(document.getElementById('deleteModal')).hide();
    };
    
    new bootstrap.Modal(document.getElementById('deleteModal')).show();
}
</script>

</body>
</html> 