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
      <h4>General Settings</h4>
      <div class="card">
        <div class="card-body">
          <div class="row mb-3">
            <h5 class="card-title mb-1 anchor" id="basic-example">Company Details</h5>
            <div class="col-md-5 mb-3 offset-md-1">
              
                  <div class="border rounded">
                    <div class="p-2">
                      <div class="position-relative" style="min-width: 0;">
                        <div class="rounded bg-light rounded"> 
                          <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/your-logo.png" /> 
                          <button type="button" class="btn btn-sm btn-light position-absolute" style="bottom: 4px; right: 4px; z-index: 10;" data-bs-toggle="modal" data-bs-target="#logoUploadModal">
                            <i class='bx bx-edit'></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                
            </div>
            <div class="col-md-5 mb-3">
              <p>Your logo will appear in the headings on confirmation emails, receipts, etc.</p>
            </div>
            <div class="row g-3">
              <div class="col-md-4 offset-md-1">
                <label for="validationDefault01" class="form-label">Organization Name</label>
                <input type="text" class="form-control" id="validationDefault01" value="{Org Name}" required>
              </div>
            </div>
              <div class="row g-3">
              <div class="col-md-4 offset-md-1">
                <label for="validationDefault01" class="form-label">Website URL</label>
                <input type="url" class="form-control" id="validationDefault01" value="ie: https//website.com" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Website" data-bs-content="The website URL that will display embed codes for GunzUp! Booking." required>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-md-4 offset-md-1">
                <label for="validationDefault01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationDefault01" value="{Primary's First Name}" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" value="{Primary's Last Name}" required>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-md-4 offset-md-1">
                <label for="example-email" class="form-label">Primary Contact Email</label>
                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
              </div>
              <div class="col-md-4">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span> </div>
            </div>
            <div class="row g-3">
              <div class="col-md-10 offset-md-1">
                <label for="validationDefault01" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationDefault01" value="{Address}" required>
              </div>
                <div class="col-md-10 offset-md-1">
                <label for="validationDefault01" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="validationDefault01" value="{Address}" required>
              </div>
              <div class="col-md-3 offset-md-1">
                <label for="validationDefault02" class="form-label">City</label>
                <input type="text" class="form-control" id="validationDefault02" value="{City}" required>
              </div>
              <div class="col-md-3">
                <label for="example-email" class="form-label">State/Province</label>
                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                  <option value="">Select</option>
                  <option value="Choice 1">Ca</option>
                  <option value="Choice 2">Choice 2</option>
                  <option value="Choice 3">Choice 3</option>
                </select>
              </div>
              <div class="col-md-2">
                <label class="form-label">Zip/Postal Code</label>
                <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="" value="{Zip / Postal Code}" required>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row mb-3">
            <h5 class="card-title mb-1 anchor" id="basic-example">Booking</h5>
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Packages and events are only visible after this period from today's date. Inidividual package settings can override." >
              <label for="globalMinBookable" class="form-label">Default minimum bookable days ahead</label>
              <select class="form-control" id="globalMinBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Same Day</option>
                <option value="">1 Day Ahead</option>
                <option value="">2 Days Ahead</option>
                <option value="">3 Days Ahead</option>
                <option value="">1 Week Ahead</option>
                <option value="">2 Weeks Ahead</option>
              </select>
            </div>
            <div class="col-md-4 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Packages and events are only visible for this duration ahead of today's date. Inidividual package settings can override." >
              <label for="globalMaxBookable" class="form-label">Default maximum bookable days ahead</label>
              <select class="form-control" id="globalMaxBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Indefinitely</option>
                  <option value="">7</option>
                <option value="">15</option>
                <option value="">30</option>
                <option value="">60</option>
                <option value="">90</option>
                
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col offset-md-1">
              <label class="form-label">Default Bookable Hours</label>
              <div class="d-flex align-items-center gap-2">
                
              
              <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Default Bookable Hours" data-bs-content="Set the default hours during which packages are available for booking.">
              <select class="form-control" id="defaultBookableStartTime" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem" style="flex: 1;">                  
                  <option value="12:00am">12:00 AM</option>
                  <option value="12:30am">12:30 AM</option>
                  <option value="1:00am">1:00 AM</option>
                  <option value="1:30am">1:30 AM</option>
                  <option value="2:00am">2:00 AM</option>
                  <option value="2:30am">2:30 AM</option>
                  <option value="3:00am">3:00 AM</option>
                  <option value="3:30am">3:30 AM</option>
                  <option value="4:00am">4:00 AM</option>
                  <option value="4:30am">4:30 AM</option>
                  <option value="5:00am">5:00 AM</option>
                  <option value="5:30am">5:30 AM</option>
                  <option value="6:00am">6:00 AM</option>
                  <option value="6:30am">6:30 AM</option>
                  <option value="7:00am">7:00 AM</option>
                  <option value="7:30am">7:30 AM</option>
                  <option value="8:00am" selected>8:00 AM</option>
                  <option value="8:30am">8:30 AM</option>
                  <option value="9:00am">9:00 AM</option>
                  <option value="9:30am">9:30 AM</option>
                  <option value="10:00am">10:00 AM</option>
                  <option value="10:30am">10:30 AM</option>
                  <option value="11:00am">11:00 AM</option>
                  <option value="11:30am">11:30 AM</option>
                  <option value="12:00pm">12:00 PM</option>
                  <option value="12:30pm">12:30 PM</option>
                  <option value="1:00pm">1:00 PM</option>
                  <option value="1:30pm">1:30 PM</option>
                  <option value="2:00pm">2:00 PM</option>
                  <option value="2:30pm">2:30 PM</option>
                  <option value="3:00pm">3:00 PM</option>
                  <option value="3:30pm">3:30 PM</option>
                  <option value="4:00pm">4:00 PM</option>
                  <option value="4:30pm">4:30 PM</option>
                  <option value="5:00pm">5:00 PM</option>
                  <option value="5:30pm">5:30 PM</option>
                  <option value="6:00pm">6:00 PM</option>
                  <option value="6:30pm">6:30 PM</option>
                  <option value="7:00pm">7:00 PM</option>
                  <option value="7:30pm">7:30 PM</option>
                  <option value="8:00pm">8:00 PM</option>
                  <option value="8:30pm">8:30 PM</option>
                  <option value="9:00pm">9:00 PM</option>
                  <option value="9:30pm">9:30 PM</option>
                  <option value="10:00pm">10:00 PM</option>
                  <option value="10:30pm">10:30 PM</option>
                  <option value="11:00pm">11:00 PM</option>
                  <option value="11:30pm">11:30 PM</option>
                </select>
              </div>

                <div class="col-md-1 text-center">

                <span class="text-muted fw-medium text-center">to</span>
              </div>
              <div class="col-md-2">
                <select class="form-control" id="defaultBookableEndTime" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem" style="flex: 1; ">
                 
                  <option value="12:00am">12:00 AM</option>
                  <option value="12:30am">12:30 AM</option>
                  <option value="1:00am">1:00 AM</option>
                  <option value="1:30am">1:30 AM</option>
                  <option value="2:00am">2:00 AM</option>
                  <option value="2:30am">2:30 AM</option>
                  <option value="3:00am">3:00 AM</option>
                  <option value="3:30am">3:30 AM</option>
                  <option value="4:00am">4:00 AM</option>
                  <option value="4:30am">4:30 AM</option>
                  <option value="5:00am">5:00 AM</option>
                  <option value="5:30am">5:30 AM</option>
                  <option value="6:00am">6:00 AM</option>
                  <option value="6:30am">6:30 AM</option>
                  <option value="7:00am">7:00 AM</option>
                  <option value="7:30am">7:30 AM</option>
                  <option value="8:00am">8:00 AM</option>
                  <option value="8:30am">8:30 AM</option>
                  <option value="9:00am">9:00 AM</option>
                  <option value="9:30am">9:30 AM</option>
                  <option value="10:00am">10:00 AM</option>
                  <option value="10:30am">10:30 AM</option>
                  <option value="11:00am">11:00 AM</option>
                  <option value="11:30am">11:30 AM</option>
                  <option value="12:00pm">12:00 PM</option>
                  <option value="12:30pm">12:30 PM</option>
                  <option value="1:00pm">1:00 PM</option>
                  <option value="1:30pm">1:30 PM</option>
                  <option value="2:00pm">2:00 PM</option>
                  <option value="2:30pm">2:30 PM</option>
                  <option value="3:00pm">3:00 PM</option>
                  <option value="3:30pm">3:30 PM</option>
                  <option value="4:00pm">4:00 PM</option>
                  <option value="4:30pm">4:30 PM</option>
                  <option value="5:00pm">5:00 PM</option>
                  <option value="5:30pm">5:30 PM</option>
                  <option value="6:00pm" selected>6:00 PM</option>
                  <option value="6:30pm">6:30 PM</option>
                  <option value="7:00pm">7:00 PM</option>
                  <option value="7:30pm">7:30 PM</option>
                  <option value="8:00pm">8:00 PM</option>
                  <option value="8:30pm">8:30 PM</option>
                  <option value="9:00pm">9:00 PM</option>
                  <option value="9:30pm">9:30 PM</option>
                  <option value="10:00pm">10:00 PM</option>
                  <option value="10:30pm">10:30 PM</option>
                  <option value="11:00pm">11:00 PM</option>
                  <option value="11:30pm">11:30 PM</option>
                </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row mt-3">
            <div class="col-12 offset-md-1">
              <h5 class="fw-medium text-muted">Cancellations</h5>
            </div>
          </div>
          
          <div class="row mb-3">
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Cancellation Notice" data-bs-content="Number of days before the booking date that customers must cancel to receive a full refund.">
              <label for="cancellationDays" class="form-label">Days required to cancel for refund</label>
              <div class="input-group">
                <input type="number" class="form-control" id="cancellationDays" placeholder="0" min="0" max="365" value="2" style="max-width: 80px;">
                <span class="input-group-text">days</span>
              </div>
              <div class="form-text">Customers must cancel this many days before their booking date to receive a full refund</div>
            </div>
          </div>
          
          <div class="row">
            <div class="col offset-md-1 mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="depositsNonRefundable" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Deposit Policy" data-bs-content="When enabled, deposits paid for bookings will not be refunded even if cancelled within the refund period.">
                <label class="form-check-label" for="depositsNonRefundable">
                  Deposits are non-refundable
                </label>
              </div>
            </div>
          </div>
            
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row mb-3">
            <h5 class="card-title mb-1 anchor" id="basic-example">Emails</h5>
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Admin Email" data-bs-content="The primary email address for administrative notifications and system emails." >
              <label for="adminEmail" class="form-label">Admin Email</label>
              <input type="email" class="form-control" id="adminEmail" placeholder="example@example.com" value="">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Reminders" data-bs-content="Set how many days in advance to send booking reminder emails to customers." >
              <label for="reminderDays" class="form-label">Send booking reminder emails</label>
              <div class="input-group">
                <input type="number" class="form-control" id="reminderDays" placeholder="000" min="0" max="999" value="3" style="max-width: 80px;">
                <span class="input-group-text">days in advance</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col offset-md-1 mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Group Reminders" data-bs-content="When enabled, reminder emails will be sent to all participants in a group who have signed waivers, not just the primary booker." type="checkbox" role="switch" id="groupReminders">              
                <label class="form-check-label" for="groupReminders">Send reminders to all signed waivers in the group</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col offset-md-1 mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="requireCompanyEmail" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Staff Email Domain" data-bs-content="This requires account emails share thesame domain as admin email.">
                <label class="form-check-label" for="requireCompanyEmail">
                  Staff accounts require company email
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
        <div class="card-body">
          <div class="row mb-3">
            <h5 class="card-title mb-1 anchor" id="basic-example">Waiver</h5>
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Waiver Expiration" data-bs-content="Require new waiver settings." >
              <label for="globalMinBookable" class="form-label">Waivers will Expire</label>
              <select class="form-control" id="globalMinBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Annually</option>
                <option value="">Monthly</option>
                <option value="">Upon Waiver Update</option>
                <option value="">Upon Next Visit</option>
              </select>
            </div>            
          </div>
            
            <div class="row">
            <div class="col offset-md-1 mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="ATTENTION" data-bs-content="Allows discounted groups to be visible in find my group on waiver" type="checkbox" role="switch" id="flexSwitchCheckChecked">              
              <label class="form-check-label" for="invalidCheck2"> Allow discount groups to appear in waiver groups</label>
            </div>
          </div>
            
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <h5 class="card-title mb-1 anchor" id="basic-example">Coupons</h5>
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Packages and Parties are only visible after this period from today's date." >
              <label for="duplicate" class="form-label">By default coupon codes apply to:</label>
              <select class="form-control" id="duplicate" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Entire Order</option>
                <option value="">Packages Only</option>
                <option value="">Add-ons & Upgrades Only</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <h5 class="card-title mb-1 anchor" id="basic-example">Tax</h5>
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Packages and Parties are only visible after this period from today's date." >
              <label for="duplicate" class="form-label">Make Taxable</label>
              <select class="form-control" id="duplicate" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="notax">No Sales Tax</option>
                <option value="tax-order">Entire Order</option>
                <option value="tax-package-only">Packages Only</option>
                <option value="tax-addons">Add-ons & Upgrades Only</option>
              </select>
            </div>
            <div class="col-md-4 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Tax" data-bs-content="Enter your State/ County / City sales tax percentage." >
              <div class="col-md-4 offset-md-1">
                <label for="validationDefault01" class="form-label">Tax %</label>
                <input type="text" class="form-control" id="validationDefault01" value="{Tax %}">
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="card">
        <div class="card-body">
          <div class="row">
            <h5 class="card-title mb-1 anchor" id="basic-example">Social</h5>
            <div class="col-md-10 offset-md-1 col-12 mb-3">
                <label for="validationDefault02" class="form-label"><i class='bx bxl-facebook me-1 align-middle'></i>Facebook</label>
                <input type="text" class="form-control" id="validationDefault02" value="{Facebook URL}">
              </div>
             <div class="col-md-10 offset-md-1 col-12 mb-3">
                <label for="validationDefault02" class="form-label"><i class='bx bxl-instagram me-1 align-middle'></i>Instagram</label>
                <input type="text" class="form-control" id="validationDefault02" value="{Instagram URL}">
              </div>              
              <div class="col-md-10 offset-md-1 col-12 mb-3">
                <label for="validationDefault02" class="form-label"><i class='bx bxl-youtube me-1 align-middle'></i>Youtube</label>
                <input type="text" class="form-control" id="validationDefault02" value="{Youtube URL}">
              </div>
              <div class="col-md-10 offset-md-1 col-12 mb-3">
                <label for="validationDefault02" class="form-label"><i class='bx bxl-twitter me-1 align-middle'></i>X</label>
                <input type="text" class="form-control" id="validationDefault02" value="{X.com URL}">
              </div>
              <div class="col-md-10 offset-md-1 col-12 mb-3">
                <label for="validationDefault02" class="form-label"><i class='bx bxl-yelp me-1 align-middle'></i>Yelp</label>
                <input type="text" class="form-control" id="validationDefault02" value="{Yelp URL}">
              </div>
          </div>
        </div>
      </div>
          
    
  
  <!-- end row --> 
</div>
<!-- End Container -->
<?php include  'partials/footer.php' ?>
</div>
<!-- ==================================================== --> 
<!-- End Page Content --> 
<!-- ==================================================== -->
</div>
<!-- END Wrapper -->

<?php include 'partials/vendor-scripts.php' ?>

<!-- Full Calendar --> 
<script src="assets/vendor/fullcalendar/main.min.js"></script> 
<script>
// Bubble theme and Snow theme editors are initialized in assets/js/components/form-quilljs.js
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>

<!-- Logo Upload Modal -->
<div class="modal fade" id="logoUploadModal" tabindex="-1" aria-labelledby="logoUploadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoUploadModalLabel">Upload Company Logo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <p class="text-muted mb-3">Upload your company logo. This will appear in email templates, receipts, and other customer communications.</p>
            
            <!-- File Upload Area -->
            <div class="border rounded p-4 text-center bg-light">
              <div class="upload-area" id="logoUploadArea">
                <i class="bx bx-cloud-upload display-4 text-muted mb-3"></i>
                <h4 class="text-muted">Choose Logo Image</h4>
                <p class="text-muted mb-3">Drag and drop your logo here, or click to browse</p>
                <input type="file" class="form-control d-none" id="logoFileInput" accept="image/*">
                <button type="button" class="btn btn-primary" onclick="document.getElementById('logoFileInput').click()">
                  <i class="bx bx-upload me-1"></i>Select Image
                </button>
              </div>
              
              <!-- Preview Area (hidden by default) -->
              <div class="logo-preview mt-3 d-none" id="logoPreview">
                <div class="d-flex align-items-center justify-content-center">
                  <div class="me-3">
                    <img id="previewImage" class="img-thumbnail" style="max-height: 150px; max-width: 200px;" alt="Logo Preview">
                  </div>
                  <div class="text-start">
                    <h6 id="fileName" class="mb-1"></h6>
                    <p id="fileSize" class="text-muted small mb-2"></p>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="removePreview()">
                      <i class="bx bx-trash me-1"></i>Remove
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Upload Guidelines -->
            <div class="mt-3">
              <small class="text-muted">
                <strong>Recommended:</strong> PNG or JPG format, maximum 2MB, and at least 400x300 pixels for best quality.
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="uploadLogoBtn" onclick="uploadLogo()" disabled>
          <i class="bx bx-upload me-1"></i>Upload Logo
        </button>
      </div>
    </div>
  </div>
</div>

<script>
// Logo Upload Functionality
document.getElementById('logoFileInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        // Validate file type
        if (!file.type.startsWith('image/')) {
            alert('Please select an image file (PNG, JPG, GIF, etc.)');
            return;
        }
        
        // Validate file size (2MB limit)
        if (file.size > 2 * 1024 * 1024) {
            alert('File size must be less than 2MB');
            return;
        }
        
        // Show preview
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImage').src = e.target.result;
            document.getElementById('fileName').textContent = file.name;
            document.getElementById('fileSize').textContent = formatFileSize(file.size);
            
            // Show preview area and enable upload button
            document.getElementById('logoPreview').classList.remove('d-none');
            document.getElementById('uploadLogoBtn').disabled = false;
        };
        reader.readAsDataURL(file);
    }
});

function removePreview() {
    document.getElementById('logoFileInput').value = '';
    document.getElementById('logoPreview').classList.add('d-none');
    document.getElementById('uploadLogoBtn').disabled = true;
}

function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

function uploadLogo() {
    const fileInput = document.getElementById('logoFileInput');
    const file = fileInput.files[0];
    
    if (!file) {
        alert('Please select a file first');
        return;
    }
    
    // Here you would typically upload the file to your server
    // For now, we'll simulate the upload process
    const uploadBtn = document.getElementById('uploadLogoBtn');
    const originalText = uploadBtn.innerHTML;
    
    uploadBtn.innerHTML = '<i class="bx bx-loader-alt bx-spin me-1"></i>Uploading...';
    uploadBtn.disabled = true;
    
    // Simulate upload delay
    setTimeout(() => {
        // Update the main logo display
        const mainLogoImg = document.querySelector('[data-dz-thumbnail]');
        const previewSrc = document.getElementById('previewImage').src;
        if (mainLogoImg) {
            mainLogoImg.src = previewSrc;
        }
        
        // Show success message
        alert('Logo uploaded successfully!');
        
        // Reset button and close modal
        uploadBtn.innerHTML = originalText;
        uploadBtn.disabled = false;
        
        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('logoUploadModal'));
        modal.hide();
        
        // Reset form
        removePreview();
    }, 2000);
}

// Drag and drop functionality
const uploadArea = document.getElementById('logoUploadArea');

uploadArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    uploadArea.classList.add('border-primary');
});

uploadArea.addEventListener('dragleave', function(e) {
    e.preventDefault();
    uploadArea.classList.remove('border-primary');
});

uploadArea.addEventListener('drop', function(e) {
    e.preventDefault();
    uploadArea.classList.remove('border-primary');
    
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        document.getElementById('logoFileInput').files = files;
        // Trigger change event
        const event = new Event('change', { bubbles: true });
        document.getElementById('logoFileInput').dispatchEvent(event);
    }
});
</script>

</body>
</html>