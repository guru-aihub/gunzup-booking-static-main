<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Email Promotions";
include 'partials/title-meta.php'
?>

<!-- Flatpickr CSS -->
<link href="assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
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
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-between">
            <h4>Email Promotions</h4>
          </div>
        </div>
      </div>

      <!-- Email Templates Tabs -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#confirmation-tab" role="tab">
                    <i class="bx bx-check-circle me-1"></i>Confirmation
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#reminder-tab" role="tab">
                    <i class="bx bx-bell me-1"></i>Reminder
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#receipt-tab" role="tab">
                    <i class="bx bx-receipt me-1"></i>Receipt
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#followup-tab" role="tab">
                    <i class="bx bx-mail-send me-1"></i>Follow-up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#waiver-tab" role="tab">
                    <i class="bx bx-file-blank me-1"></i>Waiver Request
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#marketing-tab" role="tab">
                  <i class="bx bxs-megaphone bx-flip-horizontal"></i> Marketing
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#abandoned-cart-tab" role="tab">
                    <i class="bx bx-cart-alt me-1"></i>Abandoned Cart
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                
                <!-- Booking Confirmation Tab -->
                <div class="tab-pane fade show active" id="confirmation-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" value="Booking Confirmation - {GROUP_NAME} on {EVENT_DATE}" placeholder="Enter subject line">
                        <small class="text-muted">Available shortcodes: {GROUP_NAME}, {EVENT_DATE}, {CUSTOMER_NAME}, {TOTAL_AMOUNT}</small>
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Customer Email Body</label>
                        <div id="confirmation-editor" style="height: 400px">
                          <h2>Booking / Registration Confirmation</h2>
                          <p>Dear {CUSTOMER_NAME},</p>
                          <p>Thank you for booking with {COMPANY_NAME}. Your reservation has been confirmed.</p>
                          
                          <h3>Booking / Registration Details:</h3>
                          <ul>
                            <li><strong>Group Name:</strong> {GROUP_NAME}</li>
                            <li><strong>Event Date:</strong> {EVENT_DATE}</li>
                            <li><strong>Event Time:</strong> {EVENT_TIME}</li>
                            <li><strong>Package / Event:</strong> {PACKAGE_NAME}{EVENT_NAME}</li>
                            <li><strong>Number of Attendees:</strong> {TOTAL_ATTENDEES}</li>
                            <li><strong>Total Amount:</strong> {TOTAL_AMOUNT}</li>
                          </ul>
                          
                          <h3>What to Bring:</h3>
                          <ul>
                            <li>Comfortable clothing that can get dirty</li>
                            <li>Closed-toe shoes</li>
                            <li>Signed waivers (if not completed online)</li>
                          </ul>
                          
                          <h3>Important Information:</h3>
                          <p>Please arrive 15 minutes early for check-in. Our address is {COMPANY_ADDRESS}.</p>
                          <p>If you need to make any changes to your booking, please contact us at {COMPANY_PHONE} or email us at {COMPANY_EMAIL}.</p>
                          
                          <p>We look forward to seeing you!</p>
                          <p>Best regards,<br>{COMPANY_NAME} Team</p>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Confirmation Template Actions</h5>
                        </div>
                        <div class="card-body">
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="confirmation-template-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('confirmation')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                  <!-- In-house Booking Confirmation Row -->
                  <div class="row mt-4">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <h5 class="mb-3">In-house Booking / Registration Confirmation</h5>
                        <label class="form-label">Internal Email Body</label>
                        <div id="confirmation-internal-editor" style="height: 400px">
                          <h2>New Booking / Registration Confirmation - Internal</h2>
                          <p><strong>Booking Alert:</strong> New reservation has been confirmed.</p>
                          
                          <h3>Customer Information:</h3>
                          <ul>
                            <li><strong>Customer Name:</strong> {CUSTOMER_NAME}</li>
                            <li><strong>Email:</strong> {CUSTOMER_EMAIL}</li>
                            <li><strong>Phone:</strong> {CUSTOMER_PHONE}</li>
                          </ul>
                          
                          <h3>Booking / Registration Details:</h3>
                          <ul>
                            <li><strong>Booking ID:</strong> {BOOKING_ID}</li>
                            <li><strong>Group Name:</strong> {GROUP_NAME}</li>
                            <li><strong>Event Date:</strong> {EVENT_DATE}</li>
                            <li><strong>Event Time:</strong> {EVENT_TIME}</li>
                            <li><strong>Package / Event:</strong> {PACKAGE_NAME}{EVENT_NAME}</li>
                            <li><strong>Number of Attendees:</strong> {TOTAL_ATTENDEES}</li>
                            <li><strong>Total Amount:</strong> {TOTAL_AMOUNT}</li>
                            <li><strong>Payment Status:</strong> {PAYMENT_STATUS}</li>
                            <li><strong>Special Requests:</strong> {SPECIAL_REQUESTS}</li>
                          </ul>
                          
                          <h3>Action Items:</h3>
                          <ul>
                            <li>Prepare equipment for {TOTAL_ATTENDEES} players</li>
                            <li>Set up field for {PACKAGE_NAME}</li>
                            <li>Verify waiver completion status</li>
                            <li>Check payment confirmation</li>
                            <li>Send reminder email 24 hours before event</li>
                          </ul>
                          
                          <h3>Contact Customer:</h3>
                          <p>Customer can be reached at {CUSTOMER_PHONE} or {CUSTOMER_EMAIL}</p>
                          
                          <p><strong>Booking confirmed on:</strong> {CONFIRMATION_DATE}</p>
                          <p>{COMPANY_NAME} Booking System</p>
                        </div>                        
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">In-house Template Actions</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Primary recipients:</label>
                            <textarea class="form-control" rows="3" id="confirmation-recipients" placeholder="example@example.com, example@example.com, example@example.com"></textarea>
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="confirmation-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('confirmation')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewInternalEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Booking Reminder Tab -->
                <div class="tab-pane fade" id="reminder-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" value="Reminder: Your booking at {COMPANY_NAME} is tomorrow - {GROUP_NAME}" placeholder="Enter subject line">
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Email Body</label>
                        <div id="reminder-editor" style="height: 400px">
                          <h2>Booking / Registration Reminder</h2>
                          <p>Hello {CUSTOMER_NAME},</p>
                          <p>This is a friendly reminder that your {COMPANY_NAME} booking is coming up!</p>
                          
                          <h3>Event Details:</h3>
                          <ul>
                            <li><strong>Group Name:</strong> {GROUP_NAME}</li>
                            <li><strong>Date:</strong> {EVENT_DATE}</li>
                            <li><strong>Time:</strong> {EVENT_TIME}</li>
                            <li><strong>Package / Event:</strong> {PACKAGE_NAME}{EVENT_NAME}</li>
                            <li><strong>Event:</strong> {EVENT_NAME}</li>
                            <li><strong>Players:</strong> {TOTAL_ATTENDEES}</li>
                          </ul>
                          
                          <h3>Preparation Checklist:</h3>
                          <ul>
                            <li>✓ Comfortable, old clothes</li>
                            <li>✓ Closed-toe shoes</li>
                            <li>✓ Completed waivers</li>
                            <li>✓ Arrive 15 minutes early</li>
                          </ul>
                          
                          <p><strong>Location:</strong> {COMPANY_ADDRESS}</p>
                          <p>Contact us at {COMPANY_PHONE} if you have any questions.</p>
                          
                          <p>See you soon!</p>
                          <p>{COMPANY_NAME} Team</p>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Reminder Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">First reminder</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="first-reminder-value" value="3" min="1" max="30">
                              <select class="form-select" id="first-reminder-unit">
                                <option value="days" selected>day(s) before</option>
                                <option value="hours">hour(s) before</option>
                              </select>
                            </div>
                            <small class="text-muted">When to send the first reminder email</small>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Second Reminder</label>
                            <div class="input-group">
                              <input type="number" class="form-control" id="second-reminder-value" value="1" min="1" max="30">
                              <select class="form-select" id="second-reminder-unit">
                                <option value="days" selected>day(s) before</option>
                                <option value="hours">hour(s) before</option>
                              </select>
                            </div>
                            <small class="text-muted">When to send the second reminder email</small>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="enable-second-reminder">
                            <label class="form-check-label" for="enable-second-reminder">
                              Enable second reminder
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                          
                        </div>
                      </div>
                      
                    
                      
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Internal Recipients</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Recipients:</label>
                            <textarea class="form-control" rows="3" id="reminder-bcc-recipients" placeholder="example@example.com, example@example.com"></textarea>
                            <small class="text-muted">Enter email addresses separated by commas</small>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="reminder-auto-bcc-admin">
                            <label class="form-check-label" for="reminder-auto-bcc-admin">
                              Send admin copy
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="reminder-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('reminder')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Receipt Tab -->
                <div class="tab-pane fade" id="receipt-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" value="Receipt for {GROUP_NAME} - {TOTAL_AMOUNT}" placeholder="Enter subject line">
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Email Body</label>
                        <div id="receipt-editor" style="height: 400px">
                          <h2>Payment Receipt</h2>
                          <p>Dear {CUSTOMER_NAME},</p>
                          <p>Thank you for your payment. Here's your receipt for your {COMPANY_NAME} booking.</p>
                          
                          <h3>Receipt Details:</h3>
                          <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                              <td><strong>Receipt #:</strong></td>
                              <td>{RECEIPT_NUMBER}</td>
                            </tr>
                            <tr>
                              <td><strong>Date:</strong></td>
                              <td>{PAYMENT_DATE}</td>
                            </tr>
                            <tr>
                              <td><strong>Payment Method:</strong></td>
                              <td>{PAYMENT_METHOD}</td>
                            </tr>
                          </table>
                          
                          <h3>Booking Information:</h3>
                          <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                              <td><strong>Group Name:</strong></td>
                              <td>{GROUP_NAME}</td>
                            </tr>
                            <tr>
                              <td><strong>Event Date:</strong></td>
                              <td>{EVENT_DATE}</td>
                            </tr>
                            <tr>
                              <td><strong>Package / Event:</strong></td>
                              <td>{PACKAGE_NAME}{EVENT_NAME}</td>
                            </tr>
                            <tr>
                              <td><strong>Players:</strong></td>
                              <td>{TOTAL_ATTENDEES}</td>
                            </tr>
                          </table>
                          
                          <h3>Payment Breakdown:</h3>
                          <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd;">
                            <thead>
                              <tr style="background-color: #f8f9fa;">
                                <th style="padding: 8px; border: 1px solid #ddd;">Item</th>
                                <th style="padding: 8px; border: 1px solid #ddd;">Quantity</th>
                                <th style="padding: 8px; border: 1px solid #ddd;">Price</th>
                                <th style="padding: 8px; border: 1px solid #ddd;">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">{PACKAGE_NAME}</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">{TOTAL_ATTENDEES}</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">{PACKAGE_PRICE}</td>
                                <td style="padding: 8px; border: 1px solid #ddd;">{SUBTOTAL}</td>
                              </tr>
                              <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;" colspan="3"><strong>Tax ({TAX_RATE}%)</strong></td>
                                <td style="padding: 8px; border: 1px solid #ddd;">{TAX_AMOUNT}</td>
                              </tr>
                              <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;" colspan="3"><strong>Total</strong></td>
                                <td style="padding: 8px; border: 1px solid #ddd;"><strong>{TOTAL_AMOUNT}</strong></td>
                              </tr>
                            </tbody>
                          </table>
                          
                          <p>If you have any questions about this receipt, please contact us at {COMPANY_EMAIL} or {COMPANY_PHONE}.</p>
                          
                          <p>Thank you for choosing {COMPANY_NAME}!</p>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Receipt Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="includePDF">
                            <label class="form-check-label" for="includePDF">
                              Include PDF attachment
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="sendCopy">
                            <label class="form-check-label" for="sendCopy">
                              Send copy to admin
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Template Actions</h5>
                        </div>
                        <div class="card-body">
                          
                          
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="receipt-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('receipt')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
                <!-- Follow-up Tab -->
                <div class="tab-pane fade" id="followup-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" value="How was your experience at {COMPANY_NAME}?" placeholder="Enter subject line">
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Email Body</label>
                        <div id="followup-editor" style="height: 400px">
                          <h2>How was your experience?</h2>
                          <p>Hi {CUSTOMER_NAME},</p>
                          <p>We hope you had an amazing time at {COMPANY_NAME} on {EVENT_DATE}!</p>
                          
                          <h3>We'd love your feedback!</h3>
                          <p>Your opinion matters to us. Please take a moment to share your experience:</p>
                          
                          <p><a href="{REVIEW_LINK}" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Leave a Review</a></p>
                          
                          <h3>Share the Fun!</h3>
                          <p>Had a blast? Tell your friends and family about your experience!</p>
                          <ul>
                            <li>Tag us on social media @{SOCIAL_HANDLE}</li>
                            <li>Share your photos and videos</li>
                            <li>Leave a review on Google or Yelp</li>
                          </ul>
                          
                          <h3>Plan Your Next Visit</h3>
                          <p>Ready for round 2? Here's what we have coming up:</p>
                          <ul>
                            <li>Special theme events</li>
                            <li>Tournament competitions</li>
                            <li>New packages and experiences</li>
                          </ul>
                          
                          <p>Use code <strong>RETURN10</strong> for 10% off your next booking!</p>
                          
                          <p>Thank you for choosing {COMPANY_NAME}!</p>
                          <p>The {COMPANY_NAME} Team</p>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Follow-up Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Send follow-up</label>
                            <div class="input-group">
                              <input type="number" class="form-control" value="1" min="1" max="30">
                              <select class="form-select">
                                <option value="days">day(s) after event</option>
                                <option value="hours">hour(s) after event</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="includePhotos">
                            <label class="form-check-label" for="includePhotos">
                              Include event photos
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="requestReview">
                            <label class="form-check-label" for="requestReview">
                              Request online review
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="includeDiscount">
                            <label class="form-check-label" for="includeDiscount">
                              Include return discount
                            </label>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Discount percentage</label>
                            <div class="input-group">
                              <input type="number" class="form-control" value="0" min="5" max="50">
                              <span class="input-group-text">%</span>
                            </div>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                        </div>
                      </div>
                      
                                            
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Internal Recipients</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Recipients:</label>
                            <textarea class="form-control" rows="3" id="followup-bcc-recipients" placeholder="example@example.com, example@example.com"></textarea>
                            <small class="text-muted">Enter email addresses separated by commas</small>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="followup-auto-bcc-marketing">
                            <label class="form-check-label" for="followup-auto-bcc-marketing">
                              Send admin copy
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="followup-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('followup')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Waiver Request Tab -->
                <div class="tab-pane fade" id="waiver-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" value="Action Required: Sign Your Waiver for {GROUP_NAME} on {EVENT_DATE}" placeholder="Enter subject line">
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Email Body</label>
                        <div id="waiver-editor" style="height: 400px">
                          <h2>Important: Waiver Required Before Your Event</h2>
                          <p>Dear {CUSTOMER_NAME},</p>
                          <p>We're excited about your upcoming experience with {COMPANY_NAME}!</p>
                          
                          <h3>📋 Waiver Requirement</h3>
                          <p>Before participating in the activities, <strong>all players must complete and sign our liability waiver</strong>.</p>
                          
                          <h3>Your Event Details:</h3>
                          <ul>
                            <li><strong>Group Name:</strong> {GROUP_NAME}</li>
                            <li><strong>Event Date:</strong> {EVENT_DATE}</li>
                            <li><strong>Event Time:</strong> {EVENT_TIME}</li>
                            <li><strong>Number of Attendees:</strong> {TOTAL_ATTENDEES}</li>
                          </ul>
                        
                          <h2>⚡ Complete Your Waiver⚡ </h2>
                          <h3>Forward This Email to Everyone in Your Group</h3>
                          <p>Save time at check-in by completing your waiver online before arrival:</p>
                          
                          <div style="text-align: center; margin: 30px 0;">
                            <a href="{WAIVER_LINK}" style="background-color:rgb(58, 150, 255); color: white; padding: 15px 30px; text-decoration: none; border-radius: 8px; font-size: 18px; font-weight: bold; display: inline-block;">
                              🖊️ SIGN WAIVER NOW
                            </a>
                          </div>
                          
                          <h3>⚠️ Important Notes:</h3>
                          <ul>
                            <li><strong>All players must complete their own waiver</strong> (no exceptions)</li>
                            <li><strong>Players under 18</strong> require parent/guardian signature</li>                          
                           
                          </ul>
                          
                          <h3>Need Help?</h3>
                          <p>Having trouble with the online waiver? Contact us:</p>
                          <ul>
                            <li><strong>Phone:</strong> {COMPANY_PHONE}</li>
                            <li><strong>Email:</strong> {COMPANY_EMAIL}</li>
                            <li><strong>Website:</strong> {COMPANY_WEBSITE}</li>
                          </ul>
                          
                          <p>We look forward to an amazing experience with your group!</p>
                          <p>Best regards,<br>{COMPANY_NAME} Team</p>
                          
                          <p><small><em>This waiver must be completed before your event date. Failure to complete the waiver may result in delays or cancellation of your booking.</em></small></p>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Waiver Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Send waiver request</label>
                            <div class="input-group">
                              <input type="number" class="form-control" value="7" min="1" max="30">
                              <select class="form-select">
                                <option value="days" selected>day(s) before event</option>
                                <option value="hours">hour(s) before event</option>
                              </select>
                            </div>
                          </div>
                          

                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                        </div>
                      </div>
                      
                     
                      
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Internal Recipients</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Recipients:</label>
                            <textarea class="form-control" rows="3" id="waiver-bcc-recipients" placeholder="example@example.com, example@example.com"></textarea>
                            <small class="text-muted">Enter email addresses separated by commas</small>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="waiver-auto-bcc-safety">
                            <label class="form-check-label" for="waiver-auto-bcc-safety">
                              Send admin copy
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="waiver-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('waiver')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Marketing Tab -->
                <div class="tab-pane fade" id="marketing-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Template Name</label>
                        <input type="text" class="form-control" id="marketing-template-title" value="Special Offers Template" placeholder="Enter template name">
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" id="marketing-subject-line" value="Special Offers at {COMPANY_NAME} - Book Your Next Adventure!" placeholder="Enter subject line">
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Email Body</label>
                        <div id="marketing-editor" style="height: 400px">
                          <h2>Special Offers Just for You!</h2>
                          <p>Hi {CUSTOMER_NAME},</p>
                          <p>We hope you had an amazing time at {COMPANY_NAME}! We have some exciting offers for your next visit.</p>
                          
                          <h3>🎯 Current Promotions:</h3>
                          <ul>
                            <li><strong>Return Customer Special:</strong> 15% off your next booking</li>
                            <li><strong>Group Discount:</strong> Bring 10+ players and save 20%</li>
                            <li><strong>Birthday Special:</strong> Free upgrade for birthday parties</li>
                            <li><strong>Corporate Packages:</strong> Team building packages starting at $25/person</li>
                          </ul>
                          
                          <h3>🌟 What's New:</h3>
                          <ul>
                            <li>New low-impact paintball area for beginners</li>
                            <li>Upgraded equipment and safety gear</li>
                            <li>Extended hours on weekends</li>
                            <li>New party packages available</li>
                          </ul>
                          
                          <p><strong>Book now and save!</strong> Use code <strong>RETURN15</strong> for 15% off your next booking.</p>
                          
                          <p>Ready to book? Call us at {COMPANY_PHONE} or visit our website.</p>
                          
                          <p>See you soon!</p>
                          <p>{COMPANY_NAME} Team</p>
                          
                        
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <!-- Template Management -->
                      <div class="card bg-light mb-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                          <h5 class="card-title mb-0">Marketing Email Templates</h5>
                        
                        </div>
                        <div class="card-body">
                          <div id="marketing-templates-list" class="border rounded p-2 bg-body-secondary overflow-auto template-list">
                            <div class="template-item d-flex justify-content-between align-items-center py-1 px-2 border rounded mb-1">
                              <div>
                                <strong>Special Offers Template</strong>
                                <br><small class="text-muted">Last modified: Today</small>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-sm btn-outline-success" onclick="openCampaignSettings('special-offers')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Create Campaign">
                                  <i class="bx bx-envelope"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary" onclick="loadTemplate('special-offers')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Template">
                                  <i class="bx bx-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('special-offers')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Template">
                                  <i class="bx bx-trash"></i>
                                </button>
                              </div>
                            </div>
                            
                            <div class="template-item d-flex justify-content-between align-items-center py-1 px-2 border rounded mb-1">
                              <div>
                                <strong>Holiday Promotion</strong>
                                <br><small class="text-muted">Last modified: Yesterday</small>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-sm btn-outline-success" onclick="openCampaignSettings('holiday-promo')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Create Campaign">
                                  <i class="bx bx-envelope"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary" onclick="loadTemplate('holiday-promo')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Template">
                                  <i class="bx bx-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('holiday-promo')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Template">
                                  <i class="bx bx-trash"></i>
                                </button>
                              </div>
                            </div>
                            
                            <div class="template-item d-flex justify-content-between align-items-center py-1 px-2 border rounded mb-1">
                              <div>
                                <strong>Birthday Special</strong>
                                <br><small class="text-muted">Last modified: 2 days ago</small>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-sm btn-outline-success" onclick="openCampaignSettings('birthday-special')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Create Campaign">
                                  <i class="bx bx-envelope"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-primary" onclick="loadTemplate('birthday-special')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Template">
                                  <i class="bx bx-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('birthday-special')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Template">
                                  <i class="bx bx-trash"></i>
                                </button>
                              </div>
                            </div>
                            
                            <div class="template-item d-flex justify-content-between align-items-center py-1 px-2 border rounded mb-1">
                              <div>
                                <strong>Corporate Team Building</strong>
                                <br><small class="text-muted">Last modified: 1 week ago</small>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary" onclick="loadTemplate('corporate-team')" title="Edit">
                                  <i class="bx bx-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('corporate-team')" title="Delete">
                                  <i class="bx bx-trash"></i>
                                </button>
                              </div>
                            </div>
                            
                            <div class="template-item d-flex justify-content-between align-items-center py-1 px-2 border rounded mb-1">
                              <div>
                                <strong>Summer Special</strong>
                                <br><small class="text-muted">Last modified: 2 weeks ago</small>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary" onclick="loadTemplate('summer-special')" title="Edit">
                                  <i class="bx bx-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('summer-special')" title="Delete">
                                  <i class="bx bx-trash"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          
                          <button class="btn btn-sm btn-success w-100 mt-2" onclick="createNewTemplate()">
                            <i class="bx bx-plus"></i> Create New Template
                          </button>
                        </div>
                      </div>
                      
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Template Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Internal Recipients</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Recipients:</label>
                            <textarea class="form-control" rows="3" id="marketing-bcc-recipients" placeholder="example@example.com, example2@example.com"></textarea>
                            <small class="text-muted">Enter email addresses separated by commas</small>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="marketing-auto-bcc-team">
                            <label class="form-check-label" for="marketing-auto-bcc-team">
                              Send admin copy
                            </label>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="test-email-addresses" placeholder="Enter email addresses separated by commas (e.g., test@example.com, user@domain.com)">
                            <small class="text-muted">Send a test email to these addresses to preview how it will look</small>
                          </div>
                          
                          <div class="d-grid gap-2">
                            <button class="btn btn-outline-secondary" onclick="sendTestEmail('marketing')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Abandoned Cart Tab -->
                <div class="tab-pane fade" id="abandoned-cart-tab">
                  <div class="row">
                    <div class="col-xl-8">
                      <div class="mb-3">
                        <label class="form-label">Subject Line</label>
                        <input type="text" class="form-control" value="Don't miss out! Complete your booking at {COMPANY_NAME}" placeholder="Enter subject line">
                        <small class="text-muted">Available shortcodes: {CUSTOMER_NAME}, {GROUP_NAME}, {PACKAGE_NAME}, {TOTAL_AMOUNT}, {CART_LINK}</small>
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label">Email Body</label>
                        <div id="abandoned-cart-editor" style="height: 400px">
                          <h2>Don't Miss Out on Your Adventure!</h2>
                          <p>Hi {CUSTOMER_NAME},</p>
                          <p>We noticed you started booking an awesome experience with {COMPANY_NAME} but didn't complete your reservation. Don't let this exciting adventure slip away!</p>
                          
                          <h3>🎯 Your Incomplete Booking:</h3>
                          <div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;">
                            <ul style="margin: 0;">
                              <li><strong>Group Name:</strong> {GROUP_NAME}</li>
                              <li><strong>Package / Event:</strong> {PACKAGE_NAME}{EVENT_NAME}</li>
                              <li><strong>Preferred Date:</strong> {PREFERRED_DATE}</li>
                              <li><strong>Number of Attendees:</strong> {TOTAL_ATTENDEES}</li>
                              <li><strong>Total Amount:</strong> {TOTAL_AMOUNT}</li>
                            </ul>
                          </div>
                          
                          <h3>⏰ Limited Time Offer!</h3>
                          <p>Complete your booking in the next 24 hours and get:</p>
                          <ul>
                            <li><strong>10% DISCOUNT</strong> on your total booking</li>
                            <li><strong>FREE equipment upgrade</strong> (worth $50)</li>
                            <li><strong>Complimentary group photo</strong></li>
                            <li><strong>Priority field selection</strong></li>
                          </ul>
                          
                          <div style="text-align: center; margin: 30px 0;">
                            <a href="{CART_LINK}" style="background-color: #28a745; color: white; padding: 15px 30px; text-decoration: none; border-radius: 8px; font-size: 18px; font-weight: bold; display: inline-block;">
                              🎯 COMPLETE BOOKING NOW
                            </a>
                          </div>
                          
                          <h3>🌟 Why Choose {COMPANY_NAME}?</h3>
                          <ul>
                            <li>State-of-the-art paintball equipment</li>
                            <li>Multiple themed battlefields</li>
                            <li>Professional safety briefing included</li>
                            <li>All skill levels welcome</li>
                            <li>Group packages and party options</li>
                          </ul>
                          
                          <h3>⚠️ Hurry - Popular Dates Fill Up Fast!</h3>
                          <p>Weekend slots are booking quickly, and your preferred date might not be available much longer. Secure your spot today!</p>
                          
                          <h3>Need Help?</h3>
                          <p>Have questions about your booking? Our friendly team is here to help:</p>
                          <ul>
                            <li><strong>Phone:</strong> {COMPANY_PHONE}</li>
                            <li><strong>Email:</strong> {COMPANY_EMAIL}</li>
                            <li><strong>Live Chat:</strong> Available on our website</li>
                          </ul>
                          
                          <p>Don't let this epic paintball adventure get away. Complete your booking now and get ready for an unforgettable experience!</p>
                          
                          <p>Ready to paint the battlefield?</p>
                          <p>The {COMPANY_NAME} Team</p>
                          
                          <p><small><em>This offer expires in 24 hours. Complete your booking to secure these exclusive bonuses!</em></small></p>
                        </div>
                      </div>
                      <button class="btn btn-sm btn-primary float-end" onclick="saveCurrentTemplate()">
                            <i class="bx bx-save"></i> Save
                          </button>
                    </div>
                    
                    <div class="col-xl-4">
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Abandoned Cart Settings</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Send reminder after</label>
                            <div class="input-group">
                              <input type="number" class="form-control" value="2" min="1" max="48">
                              <select class="form-select">
                                <option value="hours" selected>hour(s)</option>
                                <option value="days">day(s)</option>
                              </select>
                            </div>
                            <small class="text-muted">How long to wait before sending abandoned cart email</small>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Follow-up sequence</label>
                            <select class="form-select">
                              <option value="single" selected>Single email only</option>
                              <option value="sequence">Email sequence (2-3 emails)</option>
                            </select>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="includeDiscount" checked>
                            <label class="form-check-label" for="includeDiscount">
                              Include discount offer
                            </label>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Discount percentage</label>
                            <div class="input-group">
                              <input type="number" class="form-control" value="0" min="5" max="50">
                              <span class="input-group-text">%</span>
                            </div>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackCartRecovery" checked>
                            <label class="form-check-label" for="trackCartRecovery">
                              Track cart recovery rate
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="stopAfterComplete">
                            <label class="form-check-label" for="stopAfterComplete">
                              Stop emails if booking completed
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackOpens">
                            <label class="form-check-label" for="trackOpens">
                              Track email opens
                            </label>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="trackClicks">
                            <label class="form-check-label" for="trackClicks">
                              Track link clicks
                            </label>
                          </div>
                        </div>
                      </div>
                      

                      
                      <div class="card bg-light">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Internal Recipients</h5>
                        </div>
                        <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Recipients:</label>
                            <textarea class="form-control" rows="3" id="abandoned-cart-bcc-recipients" placeholder="example@example.com, example@example.com"></textarea>
                            <small class="text-muted">Enter email addresses separated by commas</small>
                          </div>
                          
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="abandoned-cart-auto-bcc-sales">
                            <label class="form-check-label" for="abandoned-cart-auto-bcc-sales">
                              Send admin copy
                            </label>
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Send test to:</label>
                            <input type="text" class="form-control" id="abandoned-cart-test-email-addresses" placeholder="example@example.com, example@example.com">
                            <small class="text-muted">Enter recipient emails separated by commas</small>
                          </div>
                          
                          <div class="mb-3">
                            <button class="btn btn-outline-secondary w-100" onclick="sendTestEmail('abandoned-cart')">
                              <i class="bx bx-test-tube me-1"></i>Send Test
                            </button>
                          </div>
                          
                          <div class="d-grid gap-2">                            
                            <button class="btn btn-outline-primary" onclick="previewEmail()">
                              <i class="bx bx-show me-1"></i>Preview
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Available Shortcodes Section -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0">Available Shortcodes</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <h6>Customer Information</h6>
                    <div class="mb-2">
                      <code class="text-primary">{CUSTOMER_NAME}</code>
                      <p class="text-muted small mb-0">Customer's full name</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{CUSTOMER_EMAIL}</code>
                      <p class="text-muted small mb-0">Customer's email address</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{CUSTOMER_PHONE}</code>
                      <p class="text-muted small mb-0">Customer's phone number</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4">
                  <div class="mb-3">
                    <h6>Booking / Registration Details</h6>
                    <div class="mb-2">
                      <code class="text-primary">{GROUP_NAME}</code>
                      <p class="text-muted small mb-0">Name of the group</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{EVENT_DATE}</code>
                      <p class="text-muted small mb-0">Event date</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{EVENT_TIME}</code>
                      <p class="text-muted small mb-0">Event time</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{PACKAGE_NAME}</code>
                      <p class="text-muted small mb-0">Selected package</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{TOTAL_ATTENDEES}</code>
                      <p class="text-muted small mb-0">Number of attendees</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{TOTAL_AMOUNT}</code>
                      <p class="text-muted small mb-0">Total booking amount</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4">
                  <div class="mb-3">
                    <h6>Company Information</h6>
                    <div class="mb-2">
                      <code class="text-primary">{COMPANY_NAME}</code>
                      <p class="text-muted small mb-0">Company name</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{COMPANY_ADDRESS}</code>
                      <p class="text-muted small mb-0">Company address</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{COMPANY_PHONE}</code>
                      <p class="text-muted small mb-0">Company phone</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{COMPANY_EMAIL}</code>
                      <p class="text-muted small mb-0">Company email</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{COMPANY_WEBSITE}</code>
                      <p class="text-muted small mb-0">Company website</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{WAIVER_LINK}</code>
                      <p class="text-muted small mb-0">Link to online waiver form</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{CART_LINK}</code>
                      <p class="text-muted small mb-0">Link to complete abandoned booking</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{PREFERRED_DATE}</code>
                      <p class="text-muted small mb-0">Customer's preferred booking date</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{BOOKING_ID}</code>
                      <p class="text-muted small mb-0">Unique booking identifier</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{PAYMENT_STATUS}</code>
                      <p class="text-muted small mb-0">Payment confirmation status</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{SPECIAL_REQUESTS}</code>
                      <p class="text-muted small mb-0">Customer's special requests or notes</p>
                    </div>
                    <div class="mb-2">
                      <code class="text-primary">{CONFIRMATION_DATE}</code>
                      <p class="text-muted small mb-0">Date when booking was confirmed</p>
                    </div>
                  </div>
                </div>
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

<?php include 'partials/vendor-scripts.php' ?>

<!-- Flatpickr -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

<!-- Quill Editor -->
<script src="assets/vendor/quill/quill.min.js"></script>

<script>
// Initialize Quill Editors
var confirmationEditor = new Quill('#confirmation-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var confirmationInternalEditor = new Quill('#confirmation-internal-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var reminderEditor = new Quill('#reminder-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var receiptEditor = new Quill('#receipt-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var marketingEditor = new Quill('#marketing-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var followupEditor = new Quill('#followup-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var waiverEditor = new Quill('#waiver-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

var abandonedCartEditor = new Quill('#abandoned-cart-editor', {
  theme: 'snow',
  modules: {
    toolbar: [
      [{ 'font': [] }, { 'size': [] }],
      ['bold', 'italic', 'underline', 'strike'],
      [{ 'color': [] }, { 'background': [] }],
      [{ 'script': 'super' }, { 'script': 'sub' }],
      [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'],
      [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
      ['direction', { 'align': [] }],
      ['link', 'image', 'video'],
      ['clean']
    ]
  }
});

// Save All Templates
function saveAllTemplates() {
  // Get content from all editors
  var templates = {
    confirmation: {
      subject: document.querySelector('#confirmation-tab input[type="text"]').value,
      body: confirmationEditor.root.innerHTML,
      internalBody: confirmationInternalEditor.root.innerHTML
    },
    reminder: {
      subject: document.querySelector('#reminder-tab input[type="text"]').value,
      body: reminderEditor.root.innerHTML
    },
    receipt: {
      subject: document.querySelector('#receipt-tab input[type="text"]').value,
      body: receiptEditor.root.innerHTML
    },
    followup: {
      subject: document.querySelector('#followup-tab input[type="text"]').value,
      body: followupEditor.root.innerHTML
    },
    waiver: {
      subject: document.querySelector('#waiver-tab input[type="text"]').value,
      body: waiverEditor.root.innerHTML
    },
    marketing: {
      subject: document.getElementById('marketing-subject-line').value,
      body: marketingEditor.root.innerHTML
    },
    abandonedCart: {
      subject: document.querySelector('#abandoned-cart-tab input[type="text"]').value,
      body: abandonedCartEditor.root.innerHTML
    }
  };
  
  console.log('Saving templates:', templates);
  
  // Show success message
  alert('All email templates have been saved successfully!');
}

// Marketing Template Management Functions
var marketingTemplates = {
  'special-offers': {
    name: 'Special Offers Template',
    subject: 'Special Offers at {COMPANY_NAME} - Book Your Next Adventure!',
    body: `<h2>Special Offers Just for You!</h2>
<p>Hi {CUSTOMER_NAME},</p>
<p>We hope you had an amazing time at {COMPANY_NAME}! We have some exciting offers for your next visit.</p>

<h3>🎯 Current Promotions:</h3>
<ul>
  <li><strong>Return Customer Special:</strong> 15% off your next booking</li>
  <li><strong>Group Discount:</strong> Bring 10+ players and save 20%</li>
  <li><strong>Birthday Special:</strong> Free upgrade for birthday parties</li>
  <li><strong>Corporate Packages:</strong> Team building packages starting at $25/person</li>
</ul>

<h3>🌟 What's New:</h3>
<ul>
  <li>New low-impact paintball area for beginners</li>
  <li>Upgraded equipment and safety gear</li>
  <li>Extended hours on weekends</li>
  <li>New party packages available</li>
</ul>

<p><strong>Book now and save!</strong> Use code <strong>RETURN15</strong> for 15% off your next booking.</p>

<p>Ready to book? Call us at {COMPANY_PHONE} or visit our website.</p>

<p>See you soon!</p>
<p>{COMPANY_NAME} Team</p>

<p><small>Don't want to receive promotional emails? <a href="{UNSUBSCRIBE_LINK}">Unsubscribe here</a></small></p>`
  },
  'holiday-promo': {
    name: 'Holiday Promotion',
    subject: 'Holiday Special - Save Big at {COMPANY_NAME}!',
    body: `<h2>🎄 Holiday Special Offer!</h2>
<p>Hi {CUSTOMER_NAME},</p>
<p>The holiday season is here, and we have amazing deals for you and your family!</p>

<h3>🎁 Holiday Promotions:</h3>
<ul>
  <li><strong>Family Package:</strong> 4 players for the price of 3</li>
  <li><strong>Gift Cards:</strong> Purchase $100 gift card, get $25 bonus</li>
  <li><strong>New Year Special:</strong> 30% off all January bookings</li>
</ul>

<p>Book your holiday fun today!</p>
<p>Happy Holidays from {COMPANY_NAME}</p>`
  },
  'birthday-special': {
    name: 'Birthday Special',
    subject: 'Birthday Bash Special at {COMPANY_NAME}!',
    body: `<h2>🎂 Birthday Celebration Special!</h2>
<p>Hi {CUSTOMER_NAME},</p>
<p>Make your birthday unforgettable with our special birthday packages!</p>

<h3>🎉 Birthday Perks:</h3>
<ul>
  <li><strong>Birthday Player:</strong> Plays for FREE</li>
  <li><strong>Free Cake:</strong> Complimentary birthday cake</li>
  <li><strong>Party Favors:</strong> Special birthday party favors</li>
  <li><strong>Group Discount:</strong> 15% off for parties of 8 or more</li>
</ul>

<p>Book your birthday party today!</p>
<p>{COMPANY_NAME} Team</p>`
  },
  'corporate-team': {
    name: 'Corporate Team Building',
    subject: 'Corporate Team Building at {COMPANY_NAME}!',
    body: `<h2>🏢 Corporate Team Building Experience!</h2>
<p>Dear Corporate Partner,</p>
<p>Looking for an exciting team building activity? Look no further!</p>

<h3>🎯 Corporate Packages:</h3>
<ul>
  <li><strong>Team Building Special:</strong> Customized scenarios for team bonding</li>
  <li><strong>Group Rates:</strong> Special pricing for corporate groups</li>
  <li><strong>Catering Available:</strong> Complete lunch and refreshment packages</li>
  <li><strong>Private Fields:</strong> Exclusive access to our premium fields</li>
</ul>

<p>Contact us to plan your next corporate event!</p>
<p>{COMPANY_NAME} Corporate Events Team</p>`
  },
  'summer-special': {
    name: 'Summer Special',
    subject: 'Summer Fun at {COMPANY_NAME} - Beat the Heat with Paint!',
    body: `<h2>☀️ Summer Special Offer!</h2>
<p>Hi {CUSTOMER_NAME},</p>
<p>Summer is here and it's time for some outdoor fun!</p>

<h3>🌞 Summer Promotions:</h3>
<ul>
  <li><strong>Beat the Heat:</strong> Early morning sessions with 25% off</li>
  <li><strong>Summer Camp:</strong> Special rates for youth groups</li>
  <li><strong>Weekend Warriors:</strong> Extended hours on weekends</li>
  <li><strong>Hydration Station:</strong> Free water and sports drinks</li>
</ul>

<p>Book your summer adventure today!</p>
<p>Stay cool and paint on!</p>
<p>{COMPANY_NAME} Team</p>`
  }
};

function loadTemplate(templateId) {
  if (marketingTemplates[templateId]) {
    var template = marketingTemplates[templateId];
    
    // Update the form fields
    document.getElementById('marketing-template-title').value = template.name;
    document.getElementById('marketing-subject-line').value = template.subject;
    
    // Update the editor content
    marketingEditor.root.innerHTML = template.body;
    
    // Show success message
    showToast('Template loaded successfully!', 'success');
  }
}

function saveCurrentTemplate() {
  var templateName = document.getElementById('marketing-template-title').value;
  var subject = document.getElementById('marketing-subject-line').value;
  var body = marketingEditor.root.innerHTML;
  
  if (!templateName.trim()) {
    showToast('Please enter a template name', 'error');
    return;
  }
  
  // Create template ID from name
  var templateId = templateName.toLowerCase().replace(/[^a-z0-9]/g, '-');
  
  // Save template
  marketingTemplates[templateId] = {
    name: templateName,
    subject: subject,
    body: body
  };
  
  // Refresh template list
  refreshTemplateList();
  
  showToast('Template saved successfully!', 'success');
}

function deleteTemplate(templateId) {
  if (confirm('Are you sure you want to delete this template?')) {
    delete marketingTemplates[templateId];
    refreshTemplateList();
    showToast('Template deleted successfully!', 'success');
  }
}

function createNewTemplate() {
  // Clear the form
  document.getElementById('marketing-template-title').value = '';
  document.getElementById('marketing-subject-line').value = '';
  marketingEditor.root.innerHTML = '<p>Start writing your marketing email...</p>';
  
  showToast('New template created. Don\'t forget to save!', 'info');
}

function refreshTemplateList() {
  var templateList = document.getElementById('marketing-templates-list');
  templateList.innerHTML = '';
  
  for (var templateId in marketingTemplates) {
    var template = marketingTemplates[templateId];
    var templateItem = document.createElement('div');
    templateItem.className = 'template-item d-flex justify-content-between align-items-center py-1 px-2 border rounded mb-1';
    templateItem.innerHTML = `
      <div>
        <strong>${template.name}</strong>
        <br><small class="text-muted">Last modified: Today</small>
      </div>
      <div class="btn-group">
        <button class="btn btn-sm btn-outline-primary" onclick="loadTemplate('${templateId}')" title="Edit">
          <i class="bx bx-edit"></i>
        </button>
        <button class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('${templateId}')" title="Delete">
          <i class="bx bx-trash"></i>
        </button>
      </div>
    `;
    templateList.appendChild(templateItem);
  }
}

function showToast(message, type) {
  // Create toast element
  var toast = document.createElement('div');
  toast.className = `alert alert-${type === 'error' ? 'danger' : type === 'success' ? 'success' : 'info'} alert-dismissible fade show position-fixed`;
  toast.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
  toast.innerHTML = `
    ${message}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  `;
  
  document.body.appendChild(toast);
  
  // Auto remove after 3 seconds
  setTimeout(() => {
    if (toast.parentNode) {
      toast.parentNode.removeChild(toast);
    }
  }, 3000);
}

function sendTestEmail(tabType) {
  var testEmails, subject, templateName;
  var currentEditor;
  
  // Get the appropriate fields based on tab type
  switch(tabType) {
    case 'confirmation':
      testEmails = document.getElementById('confirmation-test-email-addresses').value.trim();
      subject = document.querySelector('#confirmation-tab input[type="text"]').value;
      templateName = 'Booking Confirmation';
      currentEditor = confirmationEditor;
      break;
    case 'reminder':
      testEmails = document.getElementById('reminder-test-email-addresses').value.trim();
      subject = document.querySelector('#reminder-tab input[type="text"]').value;
      templateName = 'Booking Reminder';
      currentEditor = reminderEditor;
      break;
    case 'receipt':
      testEmails = document.getElementById('receipt-test-email-addresses').value.trim();
      subject = document.querySelector('#receipt-tab input[type="text"]').value;
      templateName = 'Receipt';
      currentEditor = receiptEditor;
      break;
    case 'followup':
      testEmails = document.getElementById('followup-test-email-addresses').value.trim();
      subject = document.querySelector('#followup-tab input[type="text"]').value;
      templateName = 'Follow-up';
      currentEditor = followupEditor;
      break;
    case 'waiver':
      testEmails = document.getElementById('waiver-test-email-addresses').value.trim();
      subject = document.querySelector('#waiver-tab input[type="text"]').value;
      templateName = 'Waiver Request';
      currentEditor = waiverEditor;
      break;
    case 'abandoned-cart':
      testEmails = document.getElementById('abandoned-cart-test-email-addresses').value.trim();
      subject = document.querySelector('#abandoned-cart-tab input[type="text"]').value;
      templateName = 'Abandoned Cart';
      currentEditor = abandonedCartEditor;
      break;
    case 'marketing':
    default:
      testEmails = document.getElementById('test-email-addresses').value.trim();
      subject = document.getElementById('marketing-subject-line').value;
      templateName = document.getElementById('marketing-template-title').value;
      currentEditor = marketingEditor;
      break;
  }
  
  if (!testEmails) {
    showToast('Please enter test email addresses', 'error');
    return;
  }
  
  if (!subject.trim()) {
    showToast('Please enter a subject line', 'error');
    return;
  }
  
  // Validate email addresses
  var emailArray = testEmails.split(',').map(email => email.trim()).filter(email => email.length > 0);
  var validEmails = emailArray.filter(email => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email));
  
  if (validEmails.length === 0) {
    showToast('Please enter valid email addresses', 'error');
    return;
  }
  
  if (validEmails.length !== emailArray.length) {
    showToast(`Some email addresses are invalid. Valid emails: ${validEmails.length}/${emailArray.length}`, 'error');
    return;
  }
  
  if (confirm(`Send test email "${templateName}" to:\n${validEmails.join(', ')}\n\nSubject: ${subject}`)) {
    // Simulate sending test email
    showToast(`Test email sent successfully to ${validEmails.length} address(es)!`, 'success');
    
    // Here you would typically make an AJAX call to your backend
    console.log('Sending test email:', {
      template: templateName,
      subject: subject,
      testEmails: validEmails,
      body: currentEditor.root.innerHTML,
      type: tabType
    });
  }
}

function sendEmail(tabType) {
  var subject, templateName, currentEditor;
  
  // Get the appropriate fields based on tab type
  switch(tabType) {
    case 'confirmation':
      subject = document.querySelector('#confirmation-tab input[type="text"]').value;
      templateName = 'Booking Confirmation';
      currentEditor = confirmationEditor;
      break;
    case 'reminder':
      subject = document.querySelector('#reminder-tab input[type="text"]').value;
      templateName = 'Booking Reminder';
      currentEditor = reminderEditor;
      break;
    case 'receipt':
      subject = document.querySelector('#receipt-tab input[type="text"]').value;
      templateName = 'Receipt';
      currentEditor = receiptEditor;
      break;
    case 'followup':
      subject = document.querySelector('#followup-tab input[type="text"]').value;
      templateName = 'Follow-up';
      currentEditor = followupEditor;
      break;
    case 'waiver':
      subject = document.querySelector('#waiver-tab input[type="text"]').value;
      templateName = 'Waiver Request';
      currentEditor = waiverEditor;
      break;
    case 'abandoned-cart':
      subject = document.querySelector('#abandoned-cart-tab input[type="text"]').value;
      templateName = 'Abandoned Cart';
      currentEditor = abandonedCartEditor;
      break;
    case 'marketing':
    default:
      // For marketing, call the specialized function
      sendMarketingEmail();
      return;
  }
  
  // Send to value removed - dropdowns no longer exist
  
  if (!subject.trim()) {
    showToast('Please enter a subject line', 'error');
    return;
  }
  
  // Show confirmation dialog
  var sendToText = {
    'all': 'all customers',
    'recent': 'recent customers (last 30 days)',
    'inactive': 'inactive customers',
    'members': 'members only'
  };
  
  if (confirm(`Send "${templateName}" to ${sendToText[sendTo]}?\n\nSubject: ${subject}`)) {
    // Simulate sending email
    showToast(`${templateName} sent successfully!`, 'success');
    
    // Here you would typically make an AJAX call to your backend
    console.log('Sending email:', {
      template: templateName,
      subject: subject,
      sendTo: sendTo,
      body: currentEditor.root.innerHTML,
      type: tabType
    });
  }
}

function sendMarketingEmail() {
  var templateName = document.getElementById('marketing-template-title').value;
  var subject = document.getElementById('marketing-subject-line').value;
  var sendTo = document.querySelector('#marketing-tab .card-body select[class="form-select"]').value;
  
  if (!templateName.trim()) {
    showToast('Please select or create a template first', 'error');
    return;
  }
  
  if (!subject.trim()) {
    showToast('Please enter a subject line', 'error');
    return;
  }
  
  // Show confirmation dialog
  var sendToText = {
    'all': 'all customers',
    'recent': 'recent customers (last 30 days)',
    'inactive': 'inactive customers',
    'members': 'members only'
  };
  
  if (confirm(`Send "${templateName}" to ${sendToText[sendTo]}?\n\nSubject: ${subject}`)) {
    // Simulate sending email
    showToast('Marketing email sent successfully!', 'success');
    
    // Here you would typically make an AJAX call to your backend
    // to actually send the emails
    console.log('Sending marketing email:', {
      template: templateName,
      subject: subject,
      sendTo: sendTo,
      body: marketingEditor.root.innerHTML
    });
  }
}

// Preview Email
function previewEmail() {
  // Get currently active tab
  var activeTab = document.querySelector('.tab-pane.active');
  var tabId = activeTab.id;
  
  // Special handling for confirmation tab - open both templates
  if (tabId === 'confirmation-tab') {
    // Open customer confirmation in first window
    var customerPreviewWindow = window.open('', 'CustomerEmailPreview', 'width=800,height=600,left=100,top=100');
    customerPreviewWindow.document.write('<html><head><title>Customer Confirmation Preview</title></head><body>' + confirmationEditor.root.innerHTML + '</body></html>');
    
    // Open internal confirmation in second window
    var internalPreviewWindow = window.open('', 'InternalEmailPreview', 'width=800,height=600,left=920,top=100');
    internalPreviewWindow.document.write('<html><head><title>Internal Confirmation Preview</title></head><body>' + confirmationInternalEditor.root.innerHTML + '</body></html>');
    return;
  }
  
  // Get the editor for current tab
  var currentEditor;
  switch(tabId) {
    case 'reminder-tab':
      currentEditor = reminderEditor;
      break;
    case 'receipt-tab':
      currentEditor = receiptEditor;
      break;
    case 'marketing-tab':
      currentEditor = marketingEditor;
      break;
    case 'followup-tab':
      currentEditor = followupEditor;
      break;
    case 'waiver-tab':
      currentEditor = waiverEditor;
      break;
    case 'abandoned-cart-tab':
      currentEditor = abandonedCartEditor;
      break;
  }
  
  // Open preview in new window
  var previewWindow = window.open('', 'EmailPreview', 'width=800,height=600');
  previewWindow.document.write('<html><head><title>Email Preview</title></head><body>' + currentEditor.root.innerHTML + '</body></html>');
}

// Preview Internal Email Only
function previewInternalEmail() {
  // Open internal confirmation preview in new window
  var internalPreviewWindow = window.open('', 'InternalEmailPreview', 'width=800,height=600,left=100,top=100');
  internalPreviewWindow.document.write('<html><head><title>Internal Confirmation Preview</title></head><body>' + confirmationInternalEditor.root.innerHTML + '</body></html>');
}

// Insert shortcode function
function insertShortcode(shortcode) {
  // Get currently active editor
  var activeTab = document.querySelector('.tab-pane.active');
  var tabId = activeTab.id;
  
  var currentEditor;
  switch(tabId) {
    case 'confirmation-tab':
      // For confirmation tab, we'll insert into whichever editor has focus
      // Default to customer editor if neither has focus
      if (confirmationInternalEditor.hasFocus()) {
        currentEditor = confirmationInternalEditor;
      } else {
        currentEditor = confirmationEditor;
      }
      break;
    case 'reminder-tab':
      currentEditor = reminderEditor;
      break;
    case 'receipt-tab':
      currentEditor = receiptEditor;
      break;
    case 'marketing-tab':
      currentEditor = marketingEditor;
      break;
    case 'followup-tab':
      currentEditor = followupEditor;
      break;
    case 'waiver-tab':
      currentEditor = waiverEditor;
      break;
    case 'abandoned-cart-tab':
      currentEditor = abandonedCartEditor;
      break;
  }
  
  // Insert shortcode at cursor position
  var range = currentEditor.getSelection();
  if (range) {
    currentEditor.insertText(range.index, shortcode);
  }
}

// Add click handlers for shortcode buttons
document.querySelectorAll('code.text-primary').forEach(function(element) {
  element.style.cursor = 'pointer';
  element.addEventListener('click', function() {
    insertShortcode(this.textContent);
  });
});

// Campaign Settings Functions
function openCampaignSettings(templateId) {
  currentCampaignTemplate = templateId;
  populateEmailLists();
  
  // Initialize Flatpickr for the date picker
  if (!document.getElementById('campaignScheduleDate')._flatpickr) {
    flatpickr("#campaignScheduleDate", {
      enableTime: true,
      dateFormat: "m/d/Y H:i",
      minDate: "today",
      time_24hr: false,
      defaultHour: 9,
      defaultMinute: 0
    });
  }
  
  var modal = new bootstrap.Modal(document.getElementById('campaignSettingsModal'));
  modal.show();
}

function populateEmailLists() {
  var dropdown = document.getElementById('campaignEmailList');
  
  // Email lists from emails-manage-lists.php
  var emailLists = [
    { id: 'all-customers', name: 'All Customers', subscribers: '2,456', description: 'Master list' },
    { id: 'recent-customers', name: 'Recent Customers', subscribers: '284', description: 'Last 30 days' },
    { id: 'corporate-clients', name: 'Corporate Clients', subscribers: '156', description: 'Business bookings' },
    { id: 'birthday-parties', name: 'Birthday Parties', subscribers: '423', description: 'Party bookings' },
    { id: 'vip-members', name: 'VIP Members', subscribers: '89', description: 'Premium customers' },
    { id: 'inactive-customers', name: 'Inactive Customers', subscribers: '312', description: 'No recent activity' }
  ];
  
  dropdown.innerHTML = '<option value="">Select email list...</option>';
  
  emailLists.forEach(function(list) {
    var option = document.createElement('option');
    option.value = list.id;
    option.textContent = list.name + ' (' + list.subscribers + ' subscribers)';
    dropdown.appendChild(option);
  });
}

function scheduleCampaign() {
  var emailList = document.getElementById('campaignEmailList').value;
  var scheduleDate = document.getElementById('campaignScheduleDate').value;
  
  if (!emailList) {
    alert('Please select an email list');
    return;
  }
  
  if (!scheduleDate) {
    alert('Please select a date and time for the campaign');
    return;
  }
  
  // Get the selected email list name for display
  var listSelect = document.getElementById('campaignEmailList');
  var listName = listSelect.options[listSelect.selectedIndex].text;
  
  console.log('Scheduling campaign for template:', currentCampaignTemplate);
  console.log('Email list:', emailList);
  console.log('Schedule date:', scheduleDate);
  
  alert('Campaign scheduled successfully!\n\nTemplate: ' + currentCampaignTemplate + '\nList: ' + listName + '\nScheduled for: ' + scheduleDate);
  
  var modal = bootstrap.Modal.getInstance(document.getElementById('campaignSettingsModal'));
  modal.hide();
}

function sendCampaignNow() {
  var emailList = document.getElementById('campaignEmailList').value;
  
  if (!emailList) {
    alert('Please select an email list');
    return;
  }
  
  // Get the selected email list name for display
  var listSelect = document.getElementById('campaignEmailList');
  var listName = listSelect.options[listSelect.selectedIndex].text;
  
  if (confirm('Are you sure you want to send this campaign immediately?\n\nTemplate: ' + currentCampaignTemplate + '\nList: ' + listName)) {
    console.log('Sending campaign now for template:', currentCampaignTemplate);
    console.log('Email list:', emailList);
    
    alert('Campaign sent successfully!\n\nTemplate: ' + currentCampaignTemplate + '\nSent to: ' + listName);
    
    var modal = bootstrap.Modal.getInstance(document.getElementById('campaignSettingsModal'));
    modal.hide();
  }
}

var currentCampaignTemplate = null;
</script>

<!-- Campaign Settings Modal -->
<div class="modal fade" id="campaignSettingsModal" tabindex="-1" role="dialog" aria-labelledby="campaignSettingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="campaignSettingsModalLabel">Campaign Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
             <div class="modal-body">
         <div class="row">
           <div class="col-md-8">
             <div class="mb-3">
               <label for="campaignEmailList" class="form-label">Choose recipients</label>
               <select class="form-control" id="campaignEmailList">
                 <option value="">Loading email lists...</option>
               </select>
               <small class="text-muted"></small>
             </div>
           </div>
         </div>
         
         <div class="row">
           <div class="col-md-6">
             <div class="mb-3">
               <label for="campaignScheduleDate" class="form-label">Select date and time</label>
               <div class="input-group">
                 <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                 <input type="text" class="form-control" id="campaignScheduleDate" placeholder="Choose date and time" style="cursor: pointer;">
               </div>
               <small class="text-muted">Choose when to send this campaign</small>
             </div>
           </div>
           <div class="col-md-6 d-flex align-items-center">
             <div class="mb-3">
               <button type="button" class="btn btn-primary" onclick="scheduleCampaign()">
                 <i class="bx bx-calendar-plus me-1"></i> Schedule for Selected Date
               </button>
             </div>
           </div>
         </div>
         
         <div class="border-top pt-3">
           <div class="row">
             <div class="col-md-6">
               <p class="text-muted mb-3">Or send campaign now</p>
               <button type="button" class="btn btn-success" onclick="sendCampaignNow()">
                 <i class="bx bx-send me-2"></i> Send Now
               </button>
             </div>
           </div>
         </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html> 