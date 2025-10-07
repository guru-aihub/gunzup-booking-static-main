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
      <h4>Payment Settings</h4>
      <div class="card">
        <div class="card-body">
          <div class="alert alert-warning" role="alert"><i class='bx bx-info-circle'></i> Alert: You are solely responsible for your website security and Payment Card Industry Data Security Standards (PCI DSS) compliance.
           GunzUp! is not responsible for anything related to payment fraud that may occur on your website due to insufficient security standards. Learn more about <a href="https://www.pcisecuritystandards.org/merchants/index.php" target="_blank">PCI DSS compliance</a> and/or our <a href="privacy.php">Privacy Policy</a> & <a href="terms.php">Terms of Service</a></div>
          <div class="table-responsive table-centered">
            <table class="table text-nowrap mb-0">
              <thead class="bg-light bg-opacity-50">
                <tr>
                  <th class="" style="width:6%"></th>
                  <th class="border-0 py-2 menu-arrow" style="width:6%"></th>
                  <th class="border-0 py-2"> Payment Method <i class='bx bx-expand-vertical'></i> </th>
                  <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                  <th class="border-0 py-2 text-end"> Edit </th>
                </tr>
              </thead>
              <!-- end thead-->
              <tbody id="sortable-tbody">
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>PayPal Pro</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate PayPal Pro</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPayPalProModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>PayPal Express</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate PayPal Express</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPaymentModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>Apple Pay</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate Apple Pay</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPaymentModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>Stripe</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate Stripe</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPaymentModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>Bank</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate Bank Payments</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPaymentModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>Authorize.net</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate Authorize.net</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPaymentModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
                <tr class="draggable-row">
                  <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                  <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                  <td>Groupon</td>
                  <td><div class="form-switch">
                      <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div></td>
                  <td class="text-end"><button data-dz-remove class="btn btn-sm btn-primary" style="margin-left:10px;" data-bs-toggle="modal" data-bs-target="#editPayPalProModal">Activate Groupon</button> <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPaymentModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                    <i class="bx bx-edit fs-16"></i>
                    </button></td>
                </tr>
              </tbody>
              <!-- end tbody -->
            </table>
            <!-- end table --> 
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

// Drag and Drop functionality for table rows
function initializeDragAndDrop() {
  const tbody = document.getElementById('sortable-tbody');
  const dragHandles = tbody.querySelectorAll('.drag-handle');
  const rows = tbody.querySelectorAll('.draggable-row');
  let draggedRow = null;
  
  // Add drag event listeners to drag handles
  dragHandles.forEach(handle => {
    // Drag start event
    handle.addEventListener('dragstart', function(e) {
      draggedRow = this.closest('.draggable-row');
      draggedRow.classList.add('dragging');
      e.dataTransfer.effectAllowed = 'move';
      e.dataTransfer.setData('text/html', draggedRow.outerHTML);
    });
    
    // Drag end event
    handle.addEventListener('dragend', function(e) {
      if (draggedRow) {
        draggedRow.classList.remove('dragging');
        draggedRow = null;
      }
      
      // Remove drag-over class from all rows
      tbody.querySelectorAll('.draggable-row').forEach(r => {
        r.classList.remove('drag-over');
      });
    });
  });
  
  // Add drop event listeners to table rows
  rows.forEach(row => {
    // Drag over event
    row.addEventListener('dragover', function(e) {
      e.preventDefault();
      e.dataTransfer.dropEffect = 'move';
      
      if (this !== draggedRow && draggedRow) {
        this.classList.add('drag-over');
      }
    });
    
    // Drag leave event
    row.addEventListener('dragleave', function(e) {
      this.classList.remove('drag-over');
    });
    
    // Drop event
    row.addEventListener('drop', function(e) {
      e.preventDefault();
      
      if (this !== draggedRow && draggedRow) {
        const allRows = Array.from(tbody.querySelectorAll('.draggable-row'));
        const draggedIndex = allRows.indexOf(draggedRow);
        const targetIndex = allRows.indexOf(this);
        
        if (draggedIndex < targetIndex) {
          // Insert after target
          this.parentNode.insertBefore(draggedRow, this.nextSibling);
        } else {
          // Insert before target
          this.parentNode.insertBefore(draggedRow, this);
        }
        
        // Re-initialize drag and drop for the newly ordered rows
        setTimeout(() => {
          initializeDragAndDropEvents();
        }, 100);
      }
      
      this.classList.remove('drag-over');
    });
  });
}

// Re-initialize events after reordering
function initializeDragAndDropEvents() {
  const rows = document.querySelectorAll('#sortable-tbody .draggable-row');
  const handles = document.querySelectorAll('#sortable-tbody .drag-handle');
  
  // Remove existing event listeners by cloning and replacing the nodes
  rows.forEach(row => {
    const newRow = row.cloneNode(true);
    row.parentNode.replaceChild(newRow, row);
  });
  
  // Re-initialize drag and drop
  initializeDragAndDrop();
}

// Initialize drag and drop when the page loads
document.addEventListener('DOMContentLoaded', function() {
  initializeDragAndDrop();
});
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>
<!-- Edit Payment PayPal Pro Modal -->
<div class="modal fade" id="editPayPalProModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">PayPal Pro Settings </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body justify-content-center">
          
          <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Payment Method Title *</label>
          <input type="text" class="form-control" id="validationDefault01" value="Custom Payment Title" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Custom Title" data-bs-content="Payment method title upon checkout" required>
        </div>        
        <div class="col-md-10 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Description</label>
          <input type="text" class="form-control" id="validationDefault01" value="Description" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Description" data-bs-content="Payment method description upon checkout" required>
        </div> 
        <div class="col-md-3 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Debugging" data-bs-content="Allows testing in sandbox mode.">        
            
            <label for="payment-status" class="form-label mb-3">Debug Mode</label>
              <select class="form-control" id="payment-status" name="choices-single-no-search" data-choices data-choices-search-false>
                <option value="off">Off</option>
                <option value="on">On</option>                            
              </select>
            </div>
          
          <div class="col-md-3 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Default Payment" data-bs-content="This will make payment method detault and bypass user choice.">
              <label for="payment-status" class="form-label">Default</label>
              <select class="form-control" id="payment-status" name="choices-single-no-search" data-choices data-choices-search-false>
                <option value="off">Off</option>
                <option value="on">On</option>                            
              </select>
            </div>
         
        <div class="row">
            <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">API Username*</label>
          <input type="text" class="form-control" id="validationDefault01" value="Payment Title" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="API Username" data-bs-content="Found in your PayPal account" required>
        </div>
          <div class="col-md-3 mb-3">
          <label for="validationDefault01" class="form-label">API Password*	</label>
          <input type="text" class="form-control" id="validationDefault01" value="Payment Title" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="API Password" data-bs-content="Found in your PayPal account" required>
        </div>
          	<div class="col-md-3 mb-5">
          <label for="validationDefault01" class="form-label">API Signature*</label>
          <input type="text" class="form-control" id="validationDefault01" value="Payment Title" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="API Signature" data-bs-content="Found in your PayPal account" required>
        </div>
        </div>    
         <label for="" class="form-label offset-md-1 mb-3">Cards Accepted: </label>  
        <div class="form-check form-check-inline mb-3">
             <input type="checkbox" class="form-check-input" id="customCheck3" checked>
             <label class="form-check-label" for="visa">Visa</label>
        </div>
        <div class="form-check form-check-inline mb-3">
             <input type="checkbox" class="form-check-input" id="customCheck4" checked>
             <label class="form-check-label" for="mastercard">MasterCard</label>
        </div>
        <div class="form-check form-check-inline mb-3">
             <input type="checkbox" class="form-check-input" id="customCheck3" checked>
             <label class="form-check-label" for="amex">American Express</label>
        </div>
        <div class="form-check form-check-inline mb-5">
             <input type="checkbox" class="form-check-input" id="customCheck4" checked>
             <label class="form-check-label" for="discover">Discover</label>
        </div>
              
         <div class="row">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Button Text</label>
          <input type="text" class="form-control" id="validationDefault01" value="Pay with CC using PayPal" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Button Text" data-bs-content="Customise checkout button." required>
        </div>
              <div class="col-md-3">
           
          <button data-dz-remove class="btn btn-sm btn-success mt-3 mb-5">Pay with CC using PayPal</button>
        </div>  
             <p class="offset-md-1">All fields marked with a * are required fields</p>
        </div>
             	



       
      </div>
      <div class="modal-footer">        
         
            <div class="form-check form-switch">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable group discount" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              
              <label class="form-check-label" for="invalidCheck2">Enabled</label>
            </div>
            <button type="button" class="btn btn-primary">Save</button> <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          
         
      </div>
    </div>
  </div>
</div>