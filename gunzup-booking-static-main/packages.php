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
          <h4>Packages</h4>
            <p>Available packages for booking.</p>
          <div class="card">
            <div class="card-body"> </div>
            <!-- end card body --> 
              <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="" style="width:6%"></th>
                      <th class="border-0 py-2 menu-arrow" style="width:6%"></th>
                      <th class="border-0 py-2"> Package <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2" style="width:6%"> Inventory <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2 text-end"> Action </th>
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
                      <td>Paintball Package 1</td>
                      <td><div class="form-switch">
                          <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div></td>
                      <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand" value="11" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPackageModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy fs-16'></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
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
                      <td>Paintball Package 2</td>
                      <td><div class="form-switch">
                          <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div></td>
                      <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand" value="7" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPackageModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy fs-16'></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
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
                      <td>Low Impact Paintball</td>
                      <td><div class="form-switch">
                          <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div></td>
                      <td>
                          <div class="input-group quantity-selector">
                          <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand" value="9" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                        </div>
                        </td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPackageModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy fs-16'></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
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
                      <td>Bow Tag</td>
                      <td><div class="form-switch">
                          <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div></td>
                        <td>
                              <div class="input-group quantity-selector">
                              <input type="number" id="inputQuantitySelector" class="form-control" aria-live="polite" data-bs-step="counter" name="quantity" title="quantity" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="quantity on hand" value="12" min="0" max="" step="1" data-bs-round="0" aria-label="Quantity selector">
                            </div>
                        </td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editPackageModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy fs-16'></i></button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="packagesPagination">
                <div class="col-sm">
                  <div class="text-muted" id="packagesShowingText"> Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">4</span> Packages </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="packagesPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
                <div class="col-sm" style="text-align: right;"> <a data-bs-toggle="modal" data-bs-target="#createPackageModal" href="#" class="btn btn-success"> <i class="bx bx-plus me-1"></i>Create Package</a> </div>
              </div>
           
           
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
  // Initialize Quill editors for both modals
  let editSnowEditor = null;
  let createSnowEditor = null;
  
  // Initialize edit modal editor when edit modal is shown
  const editPackageModal = document.getElementById('editPackageModal');
  if (editPackageModal) {
    editPackageModal.addEventListener('shown.bs.modal', function() {
      const editEditorElement = document.getElementById('snow-editor');
      if (editEditorElement && !editEditorElement.classList.contains('ql-container')) {
        editSnowEditor = new Quill('#snow-editor', {
          theme: 'snow',
          modules: {
            'toolbar': [
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
      }
      
      // Initialize z-index for add-on dropdowns when modal opens
      setTimeout(() => {
        initializeAddonZIndex();
      }, 100);
    });
  }
  
  // Initialize create modal editor when create modal is shown  
  const createPackageModal = document.getElementById('createPackageModal');
  if (createPackageModal) {
    createPackageModal.addEventListener('shown.bs.modal', function() {
      const createEditorElement = document.getElementById('create-snow-editor');
      if (createEditorElement && !createEditorElement.classList.contains('ql-container')) {
        createSnowEditor = new Quill('#create-snow-editor', {
          theme: 'snow',
          modules: {
            'toolbar': [
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
      }
      
      // Initialize z-index for add-on dropdowns when modal opens
      setTimeout(() => {
        initializeAddonZIndex();
      }, 100);
    });
  }
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
  
  // Duration field handling for HH:MM display format
  const durationField = document.getElementById('bookingDuration');
  if (durationField) {
    // Convert minutes to HH:MM format
    function minutesToHHMM(minutes) {
      const hours = Math.floor(minutes / 60);
      const mins = minutes % 60;
      // Pad hours only if less than 10, always pad minutes
      const paddedHours = hours < 10 ? hours.toString().padStart(2, '0') : hours.toString();
      return paddedHours + ':' + mins.toString().padStart(2, '0');
    }
    
    // Convert HH:MM format to minutes
    function hhmmToMinutes(timeString) {
      const parts = timeString.split(':');
      if (parts.length === 2) {
        const hours = parseInt(parts[0]) || 0;
        const minutes = parseInt(parts[1]) || 0;
        return hours * 60 + minutes;
      }
      return parseInt(timeString) || 60; // fallback to numeric value
    }
    
    // Validate and format HH:MM input
    function validateAndFormatTime(input) {
      let value = input.replace(/[^0-9:]/g, ''); // Remove non-numeric and non-colon chars
      
      // Auto-add colon after 2 digits (only if no colon exists)
      if (value.length === 2 && !value.includes(':')) {
        value += ':';
      }
      
      // Limit minutes to 2 digits after colon
      const parts = value.split(':');
      if (parts.length === 2 && parts[1].length > 2) {
        parts[1] = parts[1].substring(0, 2);
        value = parts[0] + ':' + parts[1];
      }
      
      return value;
    }
    
    // Validate time values
    function isValidTime(timeString) {
      const parts = timeString.split(':');
      if (parts.length === 2) {
        const hours = parseInt(parts[0]);
        const minutes = parseInt(parts[1]);
        return hours >= 0 && minutes >= 0 && minutes <= 59;
      }
      return false;
    }
    
    // Real-time input formatting
    durationField.addEventListener('input', function() {
      const cursorPos = this.selectionStart;
      const formatted = validateAndFormatTime(this.value);
      this.value = formatted;
      
      // Restore cursor position
      this.setSelectionRange(cursorPos, cursorPos);
    });
    
    // Validation on blur
    durationField.addEventListener('blur', function() {
      let value = this.value;
      
      // If incomplete, try to complete it
      if (value.length === 1) {
        value = '0' + value + ':00';
      } else if (!value.includes(':')) {
        // Numbers without colon - add :00
        value = value + ':00';
      } else if (value.includes(':')) {
        const parts = value.split(':');
        if (parts.length === 2) {
          // Pad hours with leading zero only if single digit
          if (parts[0].length === 1) {
            parts[0] = '0' + parts[0];
          }
          // Pad minutes if incomplete
          if (parts[1].length === 1) {
            parts[1] = parts[1] + '0';
          } else if (parts[1].length === 0) {
            parts[1] = '00';
          }
          value = parts[0] + ':' + parts[1];
        }
      }
      
      // Validate and format
      if (isValidTime(value)) {
        const minutes = hhmmToMinutes(value);
        this.value = minutesToHHMM(minutes);
        this.setAttribute('data-minutes', minutes);
        this.classList.remove('is-invalid');
      } else {
        // Default to 1 hour if invalid
        this.value = '01:00';
        this.setAttribute('data-minutes', 60);
        this.classList.add('is-invalid');
      }
    });
    
    // Prevent invalid characters
    durationField.addEventListener('keypress', function(e) {
      const char = String.fromCharCode(e.which);
      if (!/[0-9:]/.test(char) && e.which !== 8 && e.which !== 9) {
        e.preventDefault();
      }
    });
    
    // Handle form submission - ensure we submit minutes value
    const form = durationField.closest('form');
    if (form) {
      form.addEventListener('submit', function() {
        const minutes = hhmmToMinutes(durationField.value);
        durationField.setAttribute('data-minutes', minutes);
      });
    }
  }
});

// Dynamic Available Add-ons functionality for Packages
function addAvailableAddonRow() {
    const container = document.getElementById('available-addons-container');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 available-addon-row';
    
    newRow.innerHTML = `
        <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this package.">
            <label for="payment-status" class="form-label">Assign Available Add-ons</label>
            <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package+ $100.00</option>
                <option value="">Add-ons selected available for chosen package</option>
            </select>
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRow(this)" title="Remove this add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRow()" title="Add another add-on"></i>
        </div>
    `;
    
    container.appendChild(newRow);
    
    // Hide plus buttons from all other rows and set z-index
    const rows = container.querySelectorAll('.available-addon-row');
    rows.forEach((row, index) => {
        const plusButton = row.querySelector('.bxs-plus-circle');
        if (plusButton && index < rows.length - 1) {
            plusButton.style.display = 'none';
        }
        
        // Set z-index for proper dropdown stacking (highest for first row)
        const zIndexValue = 1080 - index;
        row.style.zIndex = zIndexValue;
        
        // Set higher z-index on any dropdowns in this row
        const dropdowns = row.querySelectorAll('.choices__list--dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.style.zIndex = zIndexValue + 10;
        });
    });
    
    
}

function removeAvailableAddonRow(element) {
    const row = element.closest('.available-addon-row');
    const container = document.getElementById('available-addons-container');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.available-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows and update z-index
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
            
            // Update z-index for proper dropdown stacking
            const zIndexValue = 1080 - index;
            row.style.zIndex = zIndexValue;
            
            // Set higher z-index on any dropdowns in this row
            const dropdowns = row.querySelectorAll('.choices__list--dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.style.zIndex = zIndexValue + 10;
            });
        });
    }
}

// Dynamic Available Add-ons functionality for Create Package Modal
function addCreateAvailableAddonRow() {
    const container = document.getElementById('create-available-addons-container');
    const newRow = document.createElement('div');
    newRow.className = 'row g-3 mb-3 available-addon-row';
    
    newRow.innerHTML = `
        <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this package.">
            <label for="payment-status" class="form-label">Assign Available Add-ons</label>
            <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package+ $100.00</option>
                <option value="">Add-ons selected available for chosen package</option>
            </select>
        </div>
        <div class="col-md-1 d-flex align-items-end align-items-center">
            <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeCreateAvailableAddonRow(this)" title="Remove this add-on"></i>
            <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addCreateAvailableAddonRow()" title="Add another add-on"></i>
        </div>
    `;
    
    container.appendChild(newRow);
    
    // Hide plus buttons from all other rows and set z-index
    const rows = container.querySelectorAll('.available-addon-row');
    rows.forEach((row, index) => {
        const plusButton = row.querySelector('.bxs-plus-circle');
        if (plusButton && index < rows.length - 1) {
            plusButton.style.display = 'none';
        }
        
        // Set z-index for proper dropdown stacking (highest for first row)
        const zIndexValue = 1080 - index;
        row.style.zIndex = zIndexValue;
        
        // Set higher z-index on any dropdowns in this row
        const dropdowns = row.querySelectorAll('.choices__list--dropdown');
        dropdowns.forEach(dropdown => {
            dropdown.style.zIndex = zIndexValue + 10;
        });
    });
}

function removeCreateAvailableAddonRow(element) {
    const row = element.closest('.available-addon-row');
    const container = document.getElementById('create-available-addons-container');
    
    // Don't remove if it's the only row
    if (container.children.length <= 1) {
        return;
    }
    
    // Remove the row
    row.remove();
    
    // Make sure the last row has the plus button visible
    const remainingRows = container.querySelectorAll('.available-addon-row');
    if (remainingRows.length > 0) {
        const lastRow = remainingRows[remainingRows.length - 1];
        const plusButton = lastRow.querySelector('.bxs-plus-circle');
        if (plusButton) {
            plusButton.style.display = 'inline';
        }
        
        // Hide plus buttons from all other rows and update z-index
        remainingRows.forEach((row, index) => {
            const plusButton = row.querySelector('.bxs-plus-circle');
            if (plusButton && index < remainingRows.length - 1) {
                plusButton.style.display = 'none';
            }
            
            // Update z-index for proper dropdown stacking
            const zIndexValue = 1080 - index;
            row.style.zIndex = zIndexValue;
            
            // Set higher z-index on any dropdowns in this row
            const dropdowns = row.querySelectorAll('.choices__list--dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.style.zIndex = zIndexValue + 10;
            });
        });
    }
}

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

// Initialize add-on z-index values
function initializeAddonZIndex() {
  // Initialize Edit Package modal add-ons
  const editContainer = document.getElementById('available-addons-container');
  if (editContainer) {
    const editRows = editContainer.querySelectorAll('.available-addon-row');
    editRows.forEach((row, index) => {
      const zIndexValue = 1080 - index;
      row.style.zIndex = zIndexValue;
      
      const dropdowns = row.querySelectorAll('.choices__list--dropdown');
      dropdowns.forEach(dropdown => {
        dropdown.style.zIndex = zIndexValue + 10;
      });
    });
  }
  
  // Initialize Create Package modal add-ons
  const createContainer = document.getElementById('create-available-addons-container');
  if (createContainer) {
    const createRows = createContainer.querySelectorAll('.available-addon-row');
    createRows.forEach((row, index) => {
      const zIndexValue = 1080 - index;
      row.style.zIndex = zIndexValue;
      
      const dropdowns = row.querySelectorAll('.choices__list--dropdown');
      dropdowns.forEach(dropdown => {
        dropdown.style.zIndex = zIndexValue + 10;
      });
    });
  }
}

// Initialize drag and drop when the page loads
document.addEventListener('DOMContentLoaded', function() {
  initializeDragAndDrop();
  
  // Initialize z-index for add-on dropdowns
  initializeAddonZIndex();
  
  // Packages table pagination functionality
  const rowsPerPage = 10;
  const packagesTable = document.querySelector('#sortable-tbody');
  const tableRows = packagesTable ? packagesTable.querySelectorAll('tr') : [];
  const totalRows = tableRows.length;
  const totalPages = Math.ceil(totalRows / rowsPerPage) || 1;
  let currentPage = 1;

  function showPage(page) {
      // Hide all rows
      tableRows.forEach(row => row.style.display = 'none');
      
      // Show rows for current page
      const startIndex = (page - 1) * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;
      
      for (let i = startIndex; i < endIndex && i < totalRows; i++) {
          if (tableRows[i]) {
              tableRows[i].style.display = '';
          }
      }
      
      // Update pagination display
      updatePaginationDisplay(page);
      updatePaginationButtons(page);
  }

  function updatePaginationDisplay(page) {
      const startItem = totalRows > 0 ? ((page - 1) * rowsPerPage) + 1 : 0;
      const endItem = Math.min(page * rowsPerPage, totalRows);
      const packagesShowingText = document.getElementById('packagesShowingText');
      if (packagesShowingText) {
          packagesShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Packages`;
      }
  }

  function updatePaginationButtons(page) {
      const paginationContainer = document.getElementById('packagesPaginationContainer');
      if (!paginationContainer) return;
      
      // Clear existing pagination
      paginationContainer.innerHTML = '';
      
      // Previous button
      const prevLi = document.createElement('li');
      prevLi.className = `page-item ${page === 1 || totalPages === 1 ? 'disabled' : ''}`;
      const prevLink = document.createElement('a');
      prevLink.href = '#';
      prevLink.className = 'page-link';
      prevLink.innerHTML = '<i class="bx bx-left-arrow-alt"></i>';
      prevLink.addEventListener('click', function(e) {
          e.preventDefault();
          if (page > 1 && totalPages > 1) {
              currentPage = page - 1;
              showPage(currentPage);
          }
      });
      prevLi.appendChild(prevLink);
      paginationContainer.appendChild(prevLi);
      
      // Page number buttons - only show if we actually have pages
      if (totalPages > 0) {
          for (let i = 1; i <= totalPages; i++) {
              const pageLi = document.createElement('li');
              pageLi.className = `page-item ${i === page ? 'active' : ''}`;
              const pageLink = document.createElement('a');
              pageLink.href = '#';
              pageLink.className = 'page-link';
              pageLink.textContent = i;
              pageLink.addEventListener('click', function(e) {
                  e.preventDefault();
                  if (totalPages > 1) {
                      currentPage = i;
                      showPage(currentPage);
                  }
              });
              pageLi.appendChild(pageLink);
              paginationContainer.appendChild(pageLi);
          }
      }
      
      // Next button
      const nextLi = document.createElement('li');
      nextLi.className = `page-item ${page === totalPages || totalPages === 1 ? 'disabled' : ''}`;
      const nextLink = document.createElement('a');
      nextLink.href = '#';
      nextLink.className = 'page-link';
      nextLink.innerHTML = '<i class="bx bx-right-arrow-alt"></i>';
      nextLink.addEventListener('click', function(e) {
          e.preventDefault();
          if (page < totalPages && totalPages > 1) {
              currentPage = page + 1;
              showPage(currentPage);
          }
      });
      nextLi.appendChild(nextLink);
      paginationContainer.appendChild(nextLi);
      
      // Ensure the container has the correct classes
      paginationContainer.className = 'pagination pagination-sm m-0';
  }

  // Initialize pagination
  showPage(1);
});
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>
<!-- Package Modal -->
<div class="modal fade" id="editPackageModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Edit Package</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Package Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Package Title" required>
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
          <div class="row g-3 mb-5">
          <div class="col-md-2 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Minimum Group Guests" data-bs-content="Sets minimum attendee count to book.">
            <label for="minGroupGuests" class="form-label">Minimum Group Guests</label>
            <input type="number" class="form-control spinner-field" id="minGroupGuests" value="2" min="1" max="100" required>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Maximum Group Guests" data-bs-content="Sets maximum attendee count to book.">
            <label for="maxGroupGuests" class="form-label">Maximum Group Guests</label>
            <input type="number" class="form-control spinner-field" id="maxGroupGuests" value="6" min="1" max="100" required>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Maximum Groups" data-bs-content="Sets maximum groups can book in given time.">
            <label for="maxGroups" class="form-label">Maximum Groups</label>
            <input type="number" class="form-control spinner-field" id="maxGroups" value="2" min="1" max="50" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="maxTotalGuests" class="form-label">Maximum Total Guests</label>
            <input data-bs-toggle="popover"  data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Note" data-bs-content="ie: If set to 30, max would be 3 groups of 10, or 2 groups of 15 etc." type="number" class="form-control spinner-field" id="maxTotalGuests" value="100" min="1" max="1000" required>
          </div>
              <div class="col-md-2 mb-3 ">
            <label for="bookingDuration" class="form-label">Booking Duration</label>
            <input type="text" class="form-control" id="bookingDuration" value="01:00" placeholder="HH:MM" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Works with inventory and calendar to prevent over booking by multiple groups." required>
          </div>
        </div>
          
        <div id="available-addons-container">
          <div class="row g-3 mb-3 available-addon-row">
            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this package.">
              <label for="payment-status" class="form-label">Assign Available Add-ons</label>
              <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package+ $100.00</option>
                <option value="">Add-ons selected available for chosen package</option>
              </select>
            </div>
            <div class="col-md-1 d-flex align-items-end align-items-center">
              <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRow(this)" title="Remove this add-on"></i>
              <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRow()" title="Add another add-on"></i>
            </div>
          </div>
        </div>
        
        
        
          <!--<div class="row mb-5"> 
              <label class="form-check-label offset-md-1 " for="visa">Bookable Inventory</label>
        <div class="col-md-2 offset-md-1 mt-3 mb-3"> 
            
        <div class="form-check form-check-inline mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Subtracts from bookable inventory.">
            
             <input type="checkbox" class="form-check-input" id="customCheck3" checked>
             <label class="form-check-label" for="visa">Keep Inventory</label>
        </div>
              </div>
              
          <div class="col-md-3 mb-3 ">
            <label for="validationDefault01" class="form-label">Current Inventory / Max Bookable</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Max Bookable Amount}" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Sets maximum allowable packages in bookable time." required>
          </div>
              
        </div>-->
          
          
          <div class="row mb-3 offset-md-1">
          <div class="col-md-4 form-group">
            <label for="payment-status" class="form-label">Charge By:</label>
            <select class="form-control" id="payment-status" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
              <option value="">Package Price</option>
              <option value="">Per Player</option>
            </select>
          </div>
        </div>
        <div class="row offset-md-1 mb-5">          
          <div class="col-md-2 mb-3">
            <label for="packagePrice" class="form-label">Package Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="packagePrice" 
                     min="0.01" max="999.99" step="1.00" 
                     placeholder="0" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 150.00)" 
                     required>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="perPlayerPrice" class="form-label">Per Player Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="perPlayerPrice" 
                     min="0.01" max="999.99" step="1.00" 
                     placeholder="0" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 25.00)" 
                     required>
            </div>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Deposit Percentage" data-bs-content="Percentage of total package price required as deposit. *Leave blank to require payment in full.">
            <label for="depositPercentPackage" class="form-label">% Deposit</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="depositPercentPackage" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Enter deposit percentage (e.g., 25 for 25%)">
            </div>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Fixed Deposit Amount" data-bs-content="Fixed dollar amount required as deposit. * Leave blank to require payment in full.">
            <label for="depositAmountPackage" class="form-label">$ Deposit</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="depositAmountPackage" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Enter fixed deposit amount (e.g., 50.00)">
            </div>
          </div>
          <div class="col-md-2 mb-3 mt-3">
            <div class="form-check form-switch" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enables price reduction using coupon codes">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              <label class="form-check-label" for="invalidCheck2">Allow Discounts</label>
            </div>
          </div>
        </div>
        <div class="row mb-3 g-3">
          <div class="row">
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Package will only be visible after this period from today's date. Overrides global default settings." >
              <label for="minBookable" class="form-label">Default minimum bookable days ahead</label>
              <select class="form-control" id="minBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Default Settings</option>
                <option value="">Same Day</option>
                <option value="">1 Day Ahead</option>
                <option value="">2 Days Ahead</option>
                <option value="">3 Days Ahead</option>
                <option value="">1 Week Ahead</option>
                <option value="">2 Weeks Ahead</option>
              </select>
            </div>
            <div class="col-md-4 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Package is only visible for this duration ahead of today's date. Inidividual packages also have override settings." >
              <label for="maxBookable" class="form-label">Default maximum bookable days ahead</label>
              <select class="form-control" id="maxBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Default Settings</option>
                <option value="">7</option>
                <option value="">15</option>
                <option value="">30</option>
                <option value="">60</option>
                <option value="">90</option>
                <option value="">Indefinitely</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Package Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-check form-switch">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable group discount" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="invalidCheck2">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Create Package Modal -->
<div class="modal fade" id="createPackageModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Create Package</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Package Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Package Title" required>
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
            <div id="create-snow-editor" style="height: 300px;">
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
          <div class="row g-3 mb-5">
          <div class="col-md-2 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Minimum Group Guests" data-bs-content="Sets minimum attendee count to book.">
            <label for="minGroupGuests" class="form-label">Minimum Group Guests</label>
            <input type="number" class="form-control spinner-field" id="minGroupGuests" value="2" min="1" max="100" required>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Maximum Group Guests" data-bs-content="Sets maximum attendee count to book.">
            <label for="maxGroupGuests" class="form-label">Maximum Group Guests</label>
            <input type="number" class="form-control spinner-field" id="maxGroupGuests" value="6" min="1" max="100" required>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Maximum Groups" data-bs-content="Sets maximum groups can book in given time.">
            <label for="maxGroups" class="form-label">Maximum Groups</label>
            <input type="number" class="form-control spinner-field" id="maxGroups" value="2" min="1" max="50" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="maxTotalGuests" class="form-label">Maximum Total Guests</label>
            <input data-bs-toggle="popover"  data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Note" data-bs-content="ie: If set to 30, max would be 3 groups of 10, or 2 groups of 15 etc." type="number" class="form-control spinner-field" id="maxTotalGuests" value="100" min="1" max="1000" required>
          </div>
              <div class="col-md-2 mb-3 ">
            <label for="bookingDuration" class="form-label">Booking Duration</label>
            <input type="text" class="form-control" id="bookingDuration" value="01:00" placeholder="HH:MM" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Works with inventory and calendar to prevent over booking by multiple groups." required>
          </div>
        </div>
          
        <div id="create-available-addons-container">
          <div class="row g-3 mb-3 available-addon-row">
            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this package.">
              <label for="payment-status" class="form-label">Assign Available Add-ons</label>
              <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">None</option>
                <option value="">Grenade + $12.00</option>
                <option value="">Upgraded Gun package+ $100.00</option>
                <option value="">Add-ons selected available for chosen package</option>
              </select>
            </div>
            <div class="col-md-1 d-flex align-items-end align-items-center">
              <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeCreateAvailableAddonRow(this)" title="Remove this add-on"></i>
              <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addCreateAvailableAddonRow()" title="Add another add-on"></i>
            </div>
          </div>
        </div>
        
        
        
          <!--<div class="row mb-5"> 
              <label class="form-check-label offset-md-1 " for="visa">Bookable Inventory</label>
        <div class="col-md-2 offset-md-1 mt-3 mb-3"> 
            
        <div class="form-check form-check-inline mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Subtracts from bookable inventory.">
            
             <input type="checkbox" class="form-check-input" id="customCheck3" checked>
             <label class="form-check-label" for="visa">Keep Inventory</label>
        </div>
              </div>
              
          <div class="col-md-3 mb-3 ">
            <label for="validationDefault01" class="form-label">Current Inventory / Max Bookable</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Max Bookable Amount}" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Sets maximum allowable packages in bookable time." required>
          </div>
              
        </div>-->
          
          
          <div class="row mb-3 offset-md-1">
          <div class="col-md-4 form-group">
            <label for="payment-status" class="form-label">Charge By:</label>
            <select class="form-control" id="payment-status" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
              <option value="">Package Price</option>
              <option value="">Per Player</option>
            </select>
          </div>
        </div>
        <div class="row offset-md-1 mb-5">          
          <div class="col-md-2 mb-3">
            <label for="packagePrice" class="form-label">Package Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="packagePrice" 
                     min="0.01" max="999.99" step="1.00" 
                     placeholder="0" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 150.00)" 
                     required>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="perPlayerPrice" class="form-label">Per Player Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="perPlayerPrice" 
                     min="0.01" max="999.99" step="1.00" 
                     placeholder="0" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 25.00)" 
                     required>
            </div>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Deposit Percentage" data-bs-content="Percentage of total package price required as deposit. *Leave blank to require payment in full.">
            <label for="depositPercentPackage" class="form-label">% Deposit</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="depositPercentPackage" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Enter deposit percentage (e.g., 25 for 25%)">
            </div>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Fixed Deposit Amount" data-bs-content="Fixed dollar amount required as deposit. * Leave blank to require payment in full.">
            <label for="depositAmountPackage" class="form-label">$ Deposit</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="depositAmountPackage" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Enter fixed deposit amount (e.g., 50.00)">
            </div>
          </div>
          <div class="col-md-2 mb-3 mt-3">
            <div class="form-check form-switch" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Enables price reduction using coupon codes">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              <label class="form-check-label" for="invalidCheck2">Allow Discounts</label>
            </div>
          </div>
        </div>
        <div class="row mb-3 g-3">
          <div class="row">
            <div class="col-md-4 mb-3 offset-md-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Package will only be visible after this period from today's date. Overrides global default settings." >
              <label for="minBookable" class="form-label">Default minimum bookable days ahead</label>
              <select class="form-control" id="minBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Default Settings</option>
                <option value="">Same Day</option>
                <option value="">1 Day Ahead</option>
                <option value="">2 Days Ahead</option>
                <option value="">3 Days Ahead</option>
                <option value="">1 Week Ahead</option>
                <option value="">2 Weeks Ahead</option>
              </select>
            </div>
            <div class="col-md-4 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Booking Ahead" data-bs-content="Package is only visible for this duration ahead of today's date. Inidividual packages also have override settings." >
              <label for="maxBookable" class="form-label">Default maximum bookable days ahead</label>
              <select class="form-control" id="maxBookable" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                <option value="">Default Settings</option>
                <option value="">7</option>
                <option value="">15</option>
                <option value="">30</option>
                <option value="">60</option>
                <option value="">90</option>
                <option value="">Indefinitely</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Package Notes</label>
            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-check form-switch">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable group discount" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="invalidCheck2">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>