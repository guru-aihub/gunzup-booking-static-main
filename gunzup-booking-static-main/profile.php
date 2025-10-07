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
        <div class="col-xl-4 col-lg-5">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <div class="position-relative d-inline-block">
                  <img src="assets/images/users/avatar-1.jpg" alt="Profile Picture" 
                       class="avatar-xl rounded-circle mb-3" id="profileImage">
                  <button type="button" class="btn btn-sm btn-primary position-absolute" 
                          style="bottom: 0; right: 0; border-radius: 50%; width: 32px; height: 32px; padding: 0;"
                          data-bs-toggle="modal" data-bs-target="#profilePictureModal">
                    <i class="bx bx-camera"></i>
                  </button>
                </div>
                <h5 class="mb-1">John Smith</h5>
                <p class="text-muted mb-3">Administrator</p>
                
                <div class="row text-center">
                  <div class="col-6">
                    <div class="border-end">
                      <h5 class="mb-1">156</h5>
                      <p class="text-muted mb-0">Bookings Managed</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <h5 class="mb-1">2.5</h5>
                    <p class="text-muted mb-0">Years Active</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Account Status Card -->
          <div class="card">
            <div class="card-body">
              <h6 class="card-title mb-3">Account Status</h6>
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <div class="avatar-xs">
                    <div class="avatar-title bg-success-subtle text-success rounded-circle">
                      <i class="bx bx-check"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Account Active</h6>
                  <p class="text-muted mb-0">Your account is in good standing</p>
                </div>
              </div>
              
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0">
                  <div class="avatar-xs">
                    <div class="avatar-title bg-info-subtle text-info rounded-circle">
                      <i class="bx bx-shield"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Admin Privileges</h6>
                  <p class="text-muted mb-0">Full system access granted</p>
                </div>
              </div>
              
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar-xs">
                    <div class="avatar-title bg-warning-subtle text-warning rounded-circle">
                      <i class="bx bx-time"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Last Login</h6>
                  <p class="text-muted mb-0">Today at 9:45 AM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-8 col-lg-7">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0">Edit Profile</h5>
            </div>
            <div class="card-body">
              <form id="profileForm">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="firstName" class="form-label">First Name *</label>
                    <input type="text" class="form-control" id="firstName" value="John" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName" class="form-label">Last Name *</label>
                    <input type="text" class="form-control" id="lastName" value="Smith" required>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email Address *</label>
                    <input type="email" class="form-control" id="email" value="john.smith@company.com" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" value="(555) 123-4567">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="jobTitle" class="form-label">Job Title</label>
                    <input type="text" class="form-control" id="jobTitle" value="Operations Manager">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-select" id="department">
                      <option value="operations" selected>Operations</option>
                      <option value="customer-service">Customer Service</option>
                      <option value="management">Management</option>
                      <option value="administration">Administration</option>
                    </select>
                  </div>
                </div>
                
                <div class="mb-3">
                  <label for="bio" class="form-label">Bio</label>
                  <textarea class="form-control" id="bio" rows="4" placeholder="Tell us about yourself...">Experienced operations manager with over 5 years in the entertainment industry. Passionate about delivering exceptional customer experiences and team leadership.</textarea>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="dateJoined" class="form-label">Date Joined</label>
                    <input type="date" class="form-control" id="dateJoined" value="2022-01-15" readonly>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="emergencyContact" class="form-label">Emergency Contact</label>
                    <input type="tel" class="form-control" id="emergencyContact" value="(555) 987-6543">
                  </div>
                </div>
                
                <div class="text-end">
                  <button type="button" class="btn btn-secondary me-2" onclick="resetForm()">Reset</button>
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </form>
            </div>
          </div>
          
          <!-- Change Password Card -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0">Change Password</h5>
            </div>
            <div class="card-body">
              <form id="passwordForm">
                <div class="mb-3">
                  <label for="currentPassword" class="form-label">Current Password *</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="currentPassword" required>
                    <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
                      <i class="bx bx-hide" id="currentPasswordIcon"></i>
                    </button>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="newPassword" class="form-label">New Password *</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="newPassword" required minlength="8">
                      <button class="btn btn-outline-secondary" type="button" id="toggleNewPasswordProfile">
                        <i class="bx bx-hide" id="newPasswordProfileIcon"></i>
                      </button>
                    </div>
                    <div class="form-text">Must be 8+ characters with letters, numbers & special characters</div>
                    <div class="invalid-feedback">
                      Password must be 8+ characters with letters, numbers & special characters.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="confirmNewPassword" class="form-label">Confirm New Password *</label>
                    <div class="input-group">
                      <input type="password" class="form-control" id="confirmNewPassword" required minlength="8">
                      <button class="btn btn-outline-secondary" type="button" id="toggleConfirmNewPassword">
                        <i class="bx bx-hide" id="confirmNewPasswordIcon"></i>
                      </button>
                    </div>
                    <div class="invalid-feedback">
                      Passwords do not match.
                    </div>
                  </div>
                </div>
                
                <div class="text-end">
                  <button type="submit" class="btn btn-warning">Change Password</button>
                </div>
              </form>
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

<!-- Profile Picture Modal -->
<div class="modal fade" id="profilePictureModal" tabindex="-1" aria-labelledby="profilePictureModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profilePictureModalLabel">Update Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-3">
          <img src="assets/images/users/avatar-1.jpg" alt="Current Profile" 
               class="avatar-lg rounded-circle mb-3" id="currentProfilePreview">
        </div>
        
        <div class="mb-3">
          <label for="profilePictureInput" class="form-label">Choose new profile picture</label>
          <input type="file" class="form-control" id="profilePictureInput" accept="image/*">
          <div class="form-text">Recommended size: 400x400px. Max file size: 2MB.</div>
        </div>
        
        <div class="text-center" id="newImagePreview" style="display: none;">
          <p class="mb-2">Preview:</p>
          <img src="" alt="New Profile Preview" class="avatar-lg rounded-circle mb-3" id="newProfilePreview">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="uploadProfilePicture">Update Picture</button>
      </div>
    </div>
  </div>
</div>

<?php include 'partials/vendor-scripts.php' ?>

<script>
// Profile form submission
document.getElementById('profileForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show success message for mockup
    alert('Profile updated successfully (Mockup Mode)');
});

// Password validation functions
function validatePassword(password) {
    const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return passwordRegex.test(password);
}

function checkPasswordsMatchProfile() {
    const password = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmNewPassword').value;
    const confirmField = document.getElementById('confirmNewPassword');
    
    if (confirmPassword && password !== confirmPassword) {
        confirmField.classList.add('is-invalid');
        return false;
    } else {
        confirmField.classList.remove('is-invalid');
        return true;
    }
}

// Real-time password validation for profile
document.getElementById('newPassword').addEventListener('input', function() {
    const password = this.value;
    const isValid = validatePassword(password);
    
    if (password && !isValid) {
        this.classList.add('is-invalid');
    } else {
        this.classList.remove('is-invalid');
    }
    
    // Also check confirm password when main password changes
    checkPasswordsMatchProfile();
});

document.getElementById('confirmNewPassword').addEventListener('input', checkPasswordsMatchProfile);

// Password visibility toggle functionality for profile page
document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
    const currentPasswordField = document.getElementById('currentPassword');
    const currentPasswordIcon = document.getElementById('currentPasswordIcon');
    
    if (currentPasswordField.type === 'password') {
        currentPasswordField.type = 'text';
        currentPasswordIcon.classList.remove('bx-hide');
        currentPasswordIcon.classList.add('bx-show');
    } else {
        currentPasswordField.type = 'password';
        currentPasswordIcon.classList.remove('bx-show');
        currentPasswordIcon.classList.add('bx-hide');
    }
});

document.getElementById('toggleNewPasswordProfile').addEventListener('click', function() {
    const newPasswordField = document.getElementById('newPassword');
    const newPasswordIcon = document.getElementById('newPasswordProfileIcon');
    
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

document.getElementById('toggleConfirmNewPassword').addEventListener('click', function() {
    const confirmNewPasswordField = document.getElementById('confirmNewPassword');
    const confirmNewPasswordIcon = document.getElementById('confirmNewPasswordIcon');
    
    if (confirmNewPasswordField.type === 'password') {
        confirmNewPasswordField.type = 'text';
        confirmNewPasswordIcon.classList.remove('bx-hide');
        confirmNewPasswordIcon.classList.add('bx-show');
    } else {
        confirmNewPasswordField.type = 'password';
        confirmNewPasswordIcon.classList.remove('bx-show');
        confirmNewPasswordIcon.classList.add('bx-hide');
    }
});

// Password form submission
document.getElementById('passwordForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmNewPassword').value;
    
    // Validate current password is entered
    if (!currentPassword) {
        alert('Please enter your current password');
        document.getElementById('currentPassword').focus();
        return;
    }
    
    // Password validation: minimum 8 characters with letters, numbers, and special characters
    if (!validatePassword(newPassword)) {
        alert('New password must be at least 8 characters long and contain letters, numbers, and special characters (@$!%*?&)');
        document.getElementById('newPassword').focus();
        return;
    }
    
    // Check if passwords match
    if (newPassword !== confirmPassword) {
        alert('New passwords do not match. Please make sure both password fields are identical.');
        document.getElementById('confirmNewPassword').focus();
        return;
    }
    
    // Show success message for mockup
    alert('Password changed successfully (Mockup Mode)');
    this.reset();
});


// Reset profile form
function resetForm() {
    document.getElementById('firstName').value = 'John';
    document.getElementById('lastName').value = 'Smith';
    document.getElementById('email').value = 'john.smith@company.com';
    document.getElementById('phone').value = '(555) 123-4567';
    document.getElementById('jobTitle').value = 'Operations Manager';
    document.getElementById('department').value = 'operations';
    document.getElementById('bio').value = 'Experienced operations manager with over 5 years in the entertainment industry. Passionate about delivering exceptional customer experiences and team leadership.';
    document.getElementById('emergencyContact').value = '(555) 987-6543';
}

// Profile picture preview
document.getElementById('profilePictureInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        if (file.size > 2 * 1024 * 1024) { // 2MB limit
            alert('File size must be less than 2MB');
            this.value = '';
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('newProfilePreview').src = e.target.result;
            document.getElementById('newImagePreview').style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        document.getElementById('newImagePreview').style.display = 'none';
    }
});

// Upload profile picture
document.getElementById('uploadProfilePicture').addEventListener('click', function() {
    const fileInput = document.getElementById('profilePictureInput');
    if (!fileInput.files[0]) {
        alert('Please select a file first');
        return;
    }
    
    // Show success message for mockup
    alert('Profile picture updated successfully (Mockup Mode)');
    
    // Update the main profile image (for mockup purposes)
    const newImageSrc = document.getElementById('newProfilePreview').src;
    document.getElementById('profileImage').src = newImageSrc;
    
    // Close modal
    bootstrap.Modal.getInstance(document.getElementById('profilePictureModal')).hide();
    
    // Reset form
    fileInput.value = '';
    document.getElementById('newImagePreview').style.display = 'none';
});

// Reset modal when closed
document.getElementById('profilePictureModal').addEventListener('hidden.bs.modal', function () {
    document.getElementById('profilePictureInput').value = '';
    document.getElementById('newImagePreview').style.display = 'none';
});
</script>

</body>
</html> 