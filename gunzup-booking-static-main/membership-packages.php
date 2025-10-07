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
          <h4>Membership</h4>
          <div class="card">
            <div class="card-body">
              <!--<div class="row">
                <div class="col-md-2"><a name="waivers" id="waivers"></a>
                  <select style="width:80%;" class="form-control" id="booked-package" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                    <option value="">All</option>
                    <option value="">Today's Parties</option>
                    <option value="">Group Name</option>
                    <option value="">Group Name</option>
                    <option value="">Group Name</option>
                  </select>
                </div>
                <div class="col-md-2 search-bar"> <span><i class="bx bx-search-alt"></i></span>
                  <input type="search" class="form-control" id="search" placeholder="Search Name or Group" />
                </div>
                <div class="col-md-5">
                  <div class="row">
                    </name>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">Filter Results:</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-warning">
                      <input type="checkbox" class="form-check-input" id="" checked>
                      <label class="form-check-label" for="bookingsPaid">Include Expired</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-success">
                      <input type="checkbox" class="form-check-input" id="">
                      <label class="form-check-label" for="bookingsUnpaid">Include Checked In</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <button type="button" class="btn btn-soft-secondary">Select Date: 01/02/2025</button>
                </div>
              </div>-->
              <!-- end row --> 
            </div>
            <div>
              <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="" style="width:6%"></th>       
                        <th class="border-0 py-2" style="width:6%"> Image </th> 
                      <th class="border-0 py-2"> Package <i class='bx bx-expand-vertical'></i> </th>     
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Active <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Action </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody id="sortable-tbody">
                    <tr class="draggable-row">
                        
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                        <td>
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <a data-bs-toggle="modal" data-bs-target="#updateImageModal"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a>
                          </span>
                        </td>
                      <td>1 Month Membership</td>
                      
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>12</td>
                       
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMembershipModal"><i class="bx bx-edit fs-16"></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy fs-16'></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal"><i class='bx bx-code-alt fs-16'></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class='bx bx-trash fs-16'></i></button>
                        </span>
                      </td>
                    </tr>
                      <tr class="draggable-row">
                        
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                        <td>
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <a data-bs-toggle="modal" data-bs-target="#updateImageModal"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a>
                          </span>
                        </td>
                      <td>3 Month Membership</td>
                      
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>7</td>
                      <td><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMembershipModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr class="draggable-row">
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                       <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td> 
                      <td>6 Month Membership</td>
                    
                         
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>5</td>
                      <td><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMembershipModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                    <tr class="draggable-row">
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                        <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                      <td>12 Month Membership</td>
                      
                     <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>15</td>
                      <td><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMembershipModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                    <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                      <tr class="draggable-row">
                        
                      <td style="width:6%"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i></td>
                      <td><a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" /></a></td>
                      <td>Team Membership</td>
                      
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>3</td>
                      <td><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMembershipModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class="bx bx-edit fs-16"></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New"><i class='bx bx-copy fs-16'></i></button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code"><i class='bx bx-code-alt fs-16'></i></button>
                        <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class='bx bx-trash fs-16'></i></button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                <div class="col-sm">
                  <div class="text-muted"> Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">4</span> Membership Packages </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">                  
                </div>
                 
                <div class="col-sm" style="text-align: right;"> <a data-bs-toggle="modal" data-bs-target="#newMembershipModal" href="#" class="btn btn-success"> <i class="bx bx-plus me-1"></i>Create Membership Package</a> </div>
              </div>
            </div>
            <!-- end card body --> 
            </div>
          <!-- end card --> 
        </div>
        <!-- end col --> 
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

// Universal price field validation and formatting
document.addEventListener('DOMContentLoaded', function() {
  const priceFields = document.querySelectorAll('.price-field');
  
  priceFields.forEach(function(priceInput) {
    // Format input on blur (when user leaves the field)
    priceInput.addEventListener('blur', function() {
      let value = parseFloat(this.value);
      if (!isNaN(value) && value >= 0) {
        this.value = value.toFixed(2);
        this.classList.remove('is-invalid');
      }
    });

    // Real-time validation on input
    priceInput.addEventListener('input', function() {
      let value = parseFloat(this.value);
      let min = parseFloat(this.getAttribute('min')) || 0;
      let max = parseFloat(this.getAttribute('max')) || 9999.99;
      
      if (this.value === '') {
        this.classList.remove('is-invalid');
        return;
      }
      
      if (isNaN(value) || value < min || value > max) {
        this.classList.add('is-invalid');
      } else {
        this.classList.remove('is-invalid');
      }
    });

    // Prevent non-numeric characters (except decimal point)
    priceInput.addEventListener('keypress', function(e) {
      const char = String.fromCharCode(e.which);
      const currentValue = this.value;
      
      // Allow control keys (backspace, delete, tab, etc.)
      if (e.which < 32 || e.which === 127) return true;
      
      // Allow digits
      if (/\d/.test(char)) return true;
      
      // Allow decimal point only if there isn't one already and it's not the first character
      if (char === '.' && currentValue.indexOf('.') === -1 && currentValue.length > 0) {
        return true;
      }
      
      // Prevent all other characters
      e.preventDefault();
      return false;
    });
  });

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
  initializeDragAndDrop();
});
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>
<!-- Membership Modal -->
<div class="modal fade" id="editMembershipModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Membership Package</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Membership Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Membership Title" required>
        </div>
          
          
          
          
        <div class="row mb-5">
          <div class="col-md-5 offset-md-1 align-content-center">
            <img class="img-fluid rounded " style="display:block; margin:0 auto;" src="assets/images/placeholder-img.png" />               
          </div>
       
          <div class="col-md-5 dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick"><i class="h1 bx bx-cloud-upload"></i>
              <h3>Upload Featured Image</h3>
              <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Description</label>
            <!-- Quill Editors -->
            <div id="snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Hello World!</span></h3>
              <p><br>
              </p>
              <h3>This is a simple editable area.</h3>
              <p><br>
              </p>
              <ul>
                <li>Select a text to reveal the toolbar.</li>
                <li>Edit rich document on-the-fly, so elastic!</li>
              </ul>             
              
            </div>
          </div>
        </div>
        
          <div id="discounted-addons-container">
            <div class="row g-3 mb-3 discount-addon-row">
              <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this membership package">
                <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
                <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                  <option value="">Field Fee</option>
                  <option value="">Paint</option>
                  <option value="">Rental Packages</option>
                  <option value="">Mask</option>
                  <option value="">Grenade + $12.00</option>
                  <option value="">Upgraded Gun package + $100.00</option>
                 
                </select>
              </div>   
              <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this membership package">
                <label for="discountPercentMembership1" class="form-label">% Discount</label>
                <div class="input-group">
                  <span class="input-group-text">%</span>
                  <input type="number" class="form-control" id="discountPercentMembership1" 
                         min="0" max="100" step="1" 
                         placeholder="0" 
                         title="Please enter a valid discount percentage (e.g., 10)" 
                         required>
                </div>
              </div>
              <div class="col-md-2 mb-3">  
                <label for="discountAmountMembership1" class="form-label">$ Discount</label>
                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input type="number" class="form-control price-field" id="discountAmountMembership1" 
                         min="0.01" max="999.99" step="0.01" 
                         placeholder="0.00" 
                         pattern="^\d+(\.\d{1,2})?$" 
                         title="Please enter a valid discount amount (e.g., 10.00)" 
                         required>
                </div> 
              </div>
              <div class="col-md-1 d-flex align-items-end align-items-center">
                <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeDiscountAddonRow(this)" title="Remove this discount add-on"></i>
                <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addDiscountAddonRow()" title="Add another discount add-on"></i>
              </div>
            </div>
          </div>
        
            <div class="row mb-3 offset-md-1">
            <div class="col-md-2 mb-3">
            <label for="membershipPrice" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="membershipPrice" 
                     min="0.01" max="9999.99" step="0.01" 
                     placeholder="99.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid membership price (e.g., 99.00)" 
                     required>
            </div>
          </div>                
          
         <div class="col-md-2 mb-3 ">
            <div class="form-check form-switch mt-3">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enables price reduction using coupon codes" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              
              <label class="form-check-label" for="invalidCheck2"> Allow Discounts</label>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Membership Package Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <div class="form-check form-switch me-3">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Make package available / unavailable for booking" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="invalidCheck2">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary me-2">Save</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
// Dynamic Discount Add-ons functionality for Membership Packages
function addDiscountAddonRow() {
    const container = document.getElementById('discounted-addons-container');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 discount-addon-row';
    
    // Generate unique IDs for this row
    const timestamp = Date.now();
    const uniqueId = `Membership_${timestamp}`;
    
    newRow.innerHTML = `
        <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this membership package">
            <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
            <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Field Fee</option>
                <option value="">Paint</option>
                <option value="">Rental Packages</option>
                <option value="">Mask</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>                
            </select>
        </div>   
        <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this membership package">
            <label for="discountPercentMembership_${uniqueId}" class="form-label">% Discount</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="discountPercentMembership_${uniqueId}" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Please enter a valid discount percentage (e.g., 10)" 
                     required>
            </div>
        </div>
        <div class="col-md-2 mb-3">  
            <label for="discountAmountMembership_${uniqueId}" class="form-label">$ Discount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="discountAmountMembership_${uniqueId}" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid discount amount (e.g., 10.00)" 
                     required>
            </div>
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeDiscountAddonRow(this)" title="Remove this discount add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addDiscountAddonRow()" title="Add another discount add-on"></i>
        </div>
    `;
    
    // Remove plus button from previous rows
    const allPlusButtons = container.querySelectorAll('.bxs-plus-circle');
    allPlusButtons.forEach(button => {
        if (button !== newRow.querySelector('.bxs-plus-circle')) {
            button.style.display = 'none';
        }
    });
    
    container.appendChild(newRow);
    
    // Update z-index for all rows after adding new one
    updateRowZIndex();
    
    // Initialize Choices.js for the new select elements
    const newSelects = newRow.querySelectorAll('[data-choices]');
    newSelects.forEach(select => {
        if (typeof Choices !== 'undefined') {
            const choicesInstance = new Choices(select, {
                searchEnabled: false,
                removeItemButton: true
            });
        }
    });
}

function removeDiscountAddonRow(element) {
    const row = element.closest('.discount-addon-row');
    const container = document.getElementById('discounted-addons-container');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Update z-index for all remaining rows
    updateRowZIndex();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.discount-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
}

// Function to update z-index for all rows (first row gets highest z-index)
function updateRowZIndex() {
    const container = document.getElementById('discounted-addons-container');
    const rows = container.querySelectorAll('.discount-addon-row');
    
    rows.forEach((row, index) => {
        // First row gets highest z-index (1080), each subsequent row gets lower
        const zIndexValue = 1080 - index;
        
        // Set z-index on the row itself
        row.style.zIndex = zIndexValue;
        
        // Set higher z-index on any dropdowns in this row
        const dropdowns = row.querySelectorAll('.choices__list--dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.style.zIndex = zIndexValue + 10;
        });
        
        // Also set z-index on choices containers
        const choicesContainers = row.querySelectorAll('.choices');
        choicesContainers.forEach(container => {
            container.style.zIndex = zIndexValue;
        });
    });
}

// Fix existing dropdowns when modal opens
document.getElementById('editMembershipModal').addEventListener('shown.bs.modal', function() {
    setTimeout(() => {
        // Update z-index for all existing rows
        updateRowZIndex();
    }, 100);
});
</script>

<!-- New Membership Package Modal -->
<div class="modal fade" id="newMembershipModal" tabindex="-1" aria-labelledby="newMembershipLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="newMembershipLabel">New Membership Package</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="newMembershipTitle" class="form-label">Membership Title</label>
          <input type="text" class="form-control" id="newMembershipTitle" value="" placeholder="Enter membership title" required>
        </div>
          <div id="new-discounted-addons-container">
            <div class="row g-3 mb-3 discount-addon-row">
              <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this membership package">
                <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
                <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                  <option value="">Field Fee</option>
                  <option value="">Paint</option>
                  <option value="">Rental Packages</option>
                  <option value="">Mask</option>
                  <option value="">Grenade + $12.00</option>
                  <option value="">Upgraded Gun package + $100.00</option>
                 
                </select>
              </div>   
              <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this membership package">
                <label for="newDiscountPercentMembership1" class="form-label">% Discount</label>
                <div class="input-group">
                  <span class="input-group-text">%</span>
                  <input type="number" class="form-control" id="newDiscountPercentMembership1" 
                         min="0" max="100" step="1" 
                         placeholder="0" 
                         title="Please enter a valid discount percentage (e.g., 10)" 
                         required>
                </div>
              </div>
              <div class="col-md-2 mb-3">  
                <label for="newDiscountAmountMembership1" class="form-label">$ Discount</label>
                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input type="number" class="form-control price-field" id="newDiscountAmountMembership1" 
                         min="0.01" max="999.99" step="0.01" 
                         placeholder="0.00" 
                         pattern="^\d+(\.\d{1,2})?$" 
                         title="Please enter a valid discount amount (e.g., 10.00)" 
                         required>
                </div> 
              </div>
              <div class="col-md-1 d-flex align-items-end align-items-center">
                <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeNewDiscountAddonRow(this)" title="Remove this discount add-on"></i>
                <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addNewDiscountAddonRow()" title="Add another discount add-on"></i>
              </div>
            </div>
          </div>
          
        <div class="row mb-5">
          <div class="col-md-5 offset-md-1 align-content-center">
            <img class="img-fluid rounded " style="display:block; margin:0 auto;" src="assets/images/placeholder-img.png" />               
          </div>
       
          <div class="col-md-5 dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick"><i class="h1 bx bx-cloud-upload"></i>
              <h3>Upload Featured Image</h3>
              <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="new-description" class="form-label">Description</label>
            <!-- Quill Editors -->
            <div id="new-snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Hello World!</span></h3>
              <p><br>
              </p>
              <h3>This is a simple editable area.</h3>
              <p><br>
              </p>
              <ul>
                <li>Select a text to reveal the toolbar.</li>
                <li>Edit rich document on-the-fly, so elastic!</li>
              </ul>             
              
            </div>
          </div>
        </div>
        
            <div class="row mb-3 offset-md-1">
            <div class="col-md-2 mb-3">
            <label for="newMembershipPrice" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="newMembershipPrice" 
                     min="0.01" max="9999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid membership price (e.g., 99.00)" 
                     required>
            </div>
          </div>                
          
         <div class="col-md-2 mb-3 ">
            <div class="form-check form-switch mt-3">
                <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enables price reduction using coupon codes" type="checkbox" role="switch" id="newAllowDiscounts" checked>
              
              <label class="form-check-label" for="newAllowDiscounts"> Allow Discounts</label>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="new-admin-notes" class="form-label">Admin Membership Package Notes</label>
            <textarea class="form-control" id="new-admin-notes" rows="5"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <div class="form-check form-switch me-3">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Make package available / unavailable for booking" type="checkbox" role="switch" id="newEnabled" checked>
          <label class="form-check-label" for="newEnabled">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary me-2">Create</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
// Dynamic Discount Add-ons functionality for New Membership Package Modal
function addNewDiscountAddonRow() {
    const container = document.getElementById('new-discounted-addons-container');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 discount-addon-row';
    
    // Generate unique IDs for this row
    const timestamp = Date.now();
    const uniqueId = `NewMembership_${timestamp}`;
    
    newRow.innerHTML = `
        <div class="col-md-3 form-group offset-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Items available at discount for this membership package">
            <label for="payment-status" class="form-label">Assign Discounted Add-ons</label>
            <select class="form-control discount-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Field Fee</option>
                <option value="">Paint</option>
                <option value="">Rental Packages</option>
                <option value="">Mask</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package + $100.00</option>                
            </select>
        </div>   
        <div class="col-md-2 form-group mb-3" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this membership package">
            <label for="newDiscountPercentMembership_${uniqueId}" class="form-label">% Discount</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="newDiscountPercentMembership_${uniqueId}" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Please enter a valid discount percentage (e.g., 10)" 
                     required>
            </div>
        </div>
        <div class="col-md-2 mb-3">  
            <label for="newDiscountAmountMembership_${uniqueId}" class="form-label">$ Discount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="newDiscountAmountMembership_${uniqueId}" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid discount amount (e.g., 10.00)" 
                     required>
            </div>
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeNewDiscountAddonRow(this)" title="Remove this discount add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addNewDiscountAddonRow()" title="Add another discount add-on"></i>
        </div>
    `;
    
    // Remove plus button from previous rows
    const allPlusButtons = container.querySelectorAll('.bxs-plus-circle');
    allPlusButtons.forEach(button => {
        if (button !== newRow.querySelector('.bxs-plus-circle')) {
            button.style.display = 'none';
        }
    });
    
    container.appendChild(newRow);
    
    // Update z-index for all rows after adding new one
    updateNewRowZIndex();
    
    // Initialize Choices.js for the new select elements
    const newSelects = newRow.querySelectorAll('[data-choices]');
    newSelects.forEach(select => {
        if (typeof Choices !== 'undefined') {
            const choicesInstance = new Choices(select, {
                searchEnabled: false,
                removeItemButton: true
            });
        }
    });
}

function removeNewDiscountAddonRow(element) {
    const row = element.closest('.discount-addon-row');
    const container = document.getElementById('new-discounted-addons-container');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Update z-index for all remaining rows
    updateNewRowZIndex();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.discount-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
        });
    }
}

// Function to update z-index for all rows in new modal
function updateNewRowZIndex() {
    const container = document.getElementById('new-discounted-addons-container');
    const rows = container.querySelectorAll('.discount-addon-row');
    
    rows.forEach((row, index) => {
        // First row gets highest z-index (1080), each subsequent row gets lower
        const zIndexValue = 1080 - index;
        
        // Set z-index on the row itself
        row.style.zIndex = zIndexValue;
        
        // Set higher z-index on any dropdowns in this row
        const dropdowns = row.querySelectorAll('.choices__list--dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.style.zIndex = zIndexValue + 10;
        });
        
        // Also set z-index on choices containers
        const choicesContainers = row.querySelectorAll('.choices');
        choicesContainers.forEach(container => {
            container.style.zIndex = zIndexValue;
        });
    });
}

// Fix existing dropdowns when new modal opens
document.getElementById('newMembershipModal').addEventListener('shown.bs.modal', function() {
    setTimeout(() => {
        // Update z-index for all existing rows
        updateNewRowZIndex();
        
        // Initialize Quill editor for the new modal
        if (typeof Quill !== 'undefined') {
            const newSnowEditor = document.getElementById('new-snow-editor');
            if (newSnowEditor && !newSnowEditor.quillInstance) {
                newSnowEditor.quillInstance = new Quill('#new-snow-editor', {
                    theme: 'snow',
                    modules: {
                        'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
                    },
                });
            }
        }
    }, 100);
});
</script>