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
            <h4>Gift Certificates</h4>
            
            <div class="card">
              <div class="card-body">
                <div class="table-responsive table-centered">
                  <table class="table text-nowrap mb-0">
                    <thead class="bg-light bg-opacity-50">
                      <tr>
                        <th class="" style="width:6%"></th>
                        <th class="border-0 py-2 menu-arrow" style="width:6%"></th>
                        <th class="border-0 py-2"> Title <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2" style="width:6%"> Sold <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2 text-end"> Action </th>
                      </tr>
                    </thead>
                    <!-- end thead-->
                    <tbody id="sortable-tbody">
                      <tr class="draggable-row">
                        <td style="width:6%">
                          <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i>
                        </td>
                        <td>
                          <a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" />
                          </a>
                        </td>
                        <td>$25</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                          </div>
                        </td>
                        <td>30</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGiftCertModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
                        </td>
                      </tr>
                      <tr class="draggable-row">
                        <td style="width:6%">
                          <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i>
                        </td>
                        <td>
                          <a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" />
                          </a>
                        </td>
                        <td>$50</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                          </div>
                        </td>
                        <td>25</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGiftCertModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
                        </td>
                      </tr>
                      <tr class="draggable-row">
                        <td style="width:6%">
                          <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i>
                        </td>
                        <td>
                          <a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" />
                          </a>
                        </td>
                        <td>$100</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                          </div>
                        </td>
                        <td>14</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGiftCertModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
                        </td>
                      </tr>
                      <tr class="draggable-row">
                        <td style="width:6%">
                          <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Drag to change order" class='bx bx-menu drag-handle' draggable="true"></i>
                        </td>
                        <td>
                          <a data-bs-toggle="modal" data-bs-target="#updateImageModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <img class="img-fluid membership-thumb" src="assets/images/placeholder-img.png" />
                          </a>
                        </td>
                        <td>$200</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                          </div>
                        </td>
                        <td>7</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGiftCertModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <i class='bx bx-trash fs-16'></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                    <!-- end tbody -->
                  </table>
                  <!-- end table --> 
                </div>
                <!-- table responsive -->
                
              </div>
              <!-- end card body --> 
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                  <div class="col-sm">
                    <div class="text-muted"> 
                      Showing <span class="fw-semibold">4</span> of <span class="fw-semibold">4</span> Gift Certificates 
                    </div>
                  </div>
                  <div class="col-sm-auto mt-3 mt-sm-0">                    
                  </div>
                  <div class="col-sm" style="text-align: right;"> 
                    <a data-bs-toggle="modal" data-bs-target="#createGiftCertModal" href="#" class="btn btn-success"> 
                      <i class="bx bx-plus me-1"></i>Create Gift Certificate
                    </a> 
                  </div>
                </div>
            </div>
            <!-- end card --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
        
        <!-- Gift Certificate Transactions Table -->
        <div class="row mt-4">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-3">Gift Certificate Transactions</h5>
                <div class="d-flex flex-wrap justify-content-between gap-3 mb-3">
                  <div class="search-bar">
                    <span><i class="bx bx-search-alt"></i></span>
                    <input type="search" class="form-control" id="search-transactions" placeholder="Search transactions..." />
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">Filter:</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" id="filterAll" name="transactionFilter" checked>
                      <label class="form-check-label" for="filterAll">All</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-success">
                      <input type="radio" class="form-check-input" id="filterRedeemed" name="transactionFilter">
                      <label class="form-check-label" for="filterRedeemed">Redeemed</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-warning">
                      <input type="radio" class="form-check-input" id="filterUnredeemed" name="transactionFilter">
                      <label class="form-check-label" for="filterUnredeemed">Unredeemed</label>
                    </div>
                  </div>
                </div>
                <!-- end search and filters -->
              </div>
              <div class="card-body p-0">
                <div class="table-responsive table-card">
                  <table class="table text-nowrap mb-0" id="giftCertTransactionsTable">
                    <thead class="bg-light bg-opacity-50">
                      <tr>
                        <th class="border-0 py-2">ID <i class='bx bx-expand-vertical'></i></th>
                        <th class="border-0 py-2">Purchase Date <i class='bx bx-expand-vertical'></i></th>
                        <th class="border-0 py-2">Buyer <i class='bx bx-expand-vertical'></i></th>
                        <th class="border-0 py-2">Redeemed Date <i class='bx bx-expand-vertical'></i></th>
                        <th class="border-0 py-2">Redeemer <i class='bx bx-expand-vertical'></i></th>
                        <th class="border-0 py-2 text-end">Amount <i class='bx bx-expand-vertical'></i></th>
                      </tr>
                    </thead>
                    <!-- end thead-->
                    <tbody>
                      <tr>
                        <td class="fw-medium">GC8F9A2B1E</td>
                        <td>Dec 15, 2024</td>
                        <td>sarah.jones@email.com</td>
                        <td>Dec 22, 2024</td>
                        <td>mike.wilson@email.com</td>
                        <td class="text-end"><span class="fw-semibold">$50.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC3K7L9M4P</td>
                        <td>Dec 10, 2024</td>
                        <td>john.smith@email.com</td>
                        <td>Dec 18, 2024</td>
                        <td>emily.davis@email.com</td>
                        <td class="text-end"><span class="fw-semibold">$100.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC6R8T2N5Q</td>
                        <td>Dec 08, 2024</td>
                        <td>lisa.brown@email.com</td>
                        <td><span class="text-muted">Not redeemed</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td class="text-end"><span class="fw-semibold">$75.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC9X4V7C1W</td>
                        <td>Dec 05, 2024</td>
                        <td>robert.taylor@email.com</td>
                        <td><span class="text-muted">Not redeemed</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td class="text-end"><span class="fw-semibold">$25.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC5Z8A3E6H</td>
                        <td>Dec 02, 2024</td>
                        <td>amanda.clark@email.com</td>
                        <td>Dec 12, 2024</td>
                        <td>david.johnson@email.com</td>
                        <td class="text-end"><span class="fw-semibold">$150.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC2B7F4J9L</td>
                        <td>Nov 28, 2024</td>
                        <td>jennifer.white@email.com</td>
                        <td><span class="text-muted">Not redeemed</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td class="text-end"><span class="fw-semibold">$50.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC8K3P6D2S</td>
                        <td>Nov 25, 2024</td>
                        <td>chris.martin@email.com</td>
                        <td>Dec 01, 2024</td>
                        <td>jessica.lee@email.com</td>
                        <td class="text-end"><span class="fw-semibold">$100.00</span></td>
                      </tr>
                      <tr>
                        <td class="fw-medium">GC4Q9R7T1Y</td>
                        <td>Nov 20, 2024</td>
                        <td>michelle.garcia@email.com</td>
                        <td><span class="text-muted">Not redeemed</span></td>
                        <td><span class="text-muted">—</span></td>
                        <td class="text-end"><span class="fw-semibold">$75.00</span></td>
                      </tr>
                    </tbody>
                    <!-- end tbody -->
                  </table>
                  <!-- end table --> 
                </div>
                <!-- table responsive -->
                <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                  <div class="col-sm">
                    <div class="text-muted" id="transactionsShowingText"> 
                      Showing <span class="fw-semibold">8</span> of <span class="fw-semibold">23</span> Transactions 
                    </div>
                  </div>
                  <div class="col-sm-auto mt-3 mt-sm-0">
                    <ul class="pagination pagination-sm m-0" id="transactionsPagination">
                      <!-- Pagination buttons will be generated dynamically by JavaScript -->
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end card body --> 
            </div>
            <!-- end card --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end transactions row -->
        
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

  <!-- Full Calendar --> 
  <script src="assets/vendor/fullcalendar/main.min.js"></script> 
  <script>
    // Bubble theme and Snow theme editors are initialized in assets/js/components/form-quilljs.js

    // Price and Amount field validation and formatting
    document.addEventListener('DOMContentLoaded', function() {
      const priceInput = document.getElementById('giftCertPrice');
      const priceError = document.getElementById('priceError');
      const amountInput = document.getElementById('giftCertAmount');
      const amountError = document.getElementById('amountError');
      
      // Track if amount field has been manually changed by user
      let amountManuallyChanged = false;
      
      // Price field validation
      if (priceInput) {
        // Format input on blur (when user leaves the field)
        priceInput.addEventListener('blur', function() {
          let value = parseFloat(this.value);
          if (!isNaN(value) && value > 0) {
            this.value = value.toFixed(2);
            this.classList.remove('is-invalid');
            priceError.style.display = 'none';
          }
        });

        // Real-time validation on input
        priceInput.addEventListener('input', function() {
          let value = parseFloat(this.value);
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            priceError.style.display = 'none';
            // Clear amount field if price is empty and not manually changed
            if (!amountManuallyChanged && amountInput) {
              amountInput.value = '';
            }
            // Reset minimum value when price is empty
            if (amountInput) {
              amountInput.setAttribute('min', '0.01');
            }
            return;
          }
          
          if (isNaN(value) || value < 0.01 || value > 9999.99) {
            this.classList.add('is-invalid');
            priceError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            priceError.style.display = 'none';
            
            // Update amount field to match price if not manually changed
            if (!amountManuallyChanged && amountInput) {
              amountInput.value = this.value;
            }
            
            // Update minimum value for amount field
            if (amountInput) {
              amountInput.setAttribute('min', this.value);
            }
          }
        });
        
        // Update amount when price changes (on blur)
        priceInput.addEventListener('blur', function() {
          if (!amountManuallyChanged && this.value && amountInput) {
            let value = parseFloat(this.value);
            if (!isNaN(value) && value > 0) {
              amountInput.value = value.toFixed(2);
            }
          }
          
          // Always update the minimum value for amount field
          if (this.value && amountInput) {
            let priceValue = parseFloat(this.value);
            if (!isNaN(priceValue) && priceValue > 0) {
              amountInput.setAttribute('min', priceValue.toFixed(2));
            }
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
      }
      
      // Amount field validation
      if (amountInput) {
        // Format input on blur (when user leaves the field)
        amountInput.addEventListener('blur', function() {
          let value = parseFloat(this.value);
          let priceValue = parseFloat(priceInput.value) || 0;
          
          if (!isNaN(value) && value >= 0.01) {
            this.value = value.toFixed(2);
            
            // Validate against price if price exists
            if (priceValue > 0 && value < priceValue) {
              this.classList.add('is-invalid');
              amountError.textContent = 'Amount cannot be lower than the price ($' + priceValue.toFixed(2) + ')';
              amountError.style.display = 'block';
            } else {
              this.classList.remove('is-invalid');
              amountError.style.display = 'none';
            }
          } else if (value < 0.01) {
            this.classList.add('is-invalid');
            amountError.textContent = 'Please enter a valid amount between $0.01 and $9,999.99';
            amountError.style.display = 'block';
          }
        });

        // Real-time validation on input
        amountInput.addEventListener('input', function() {
          // Mark as manually changed when user types in amount field
          amountManuallyChanged = true;
          
          let value = parseFloat(this.value);
          let priceValue = parseFloat(priceInput.value) || 0;
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            amountError.style.display = 'none';
            // Reset manual change flag if field is completely cleared
            amountManuallyChanged = false;
            return;
          }
          
          if (isNaN(value) || value < 0.01 || value > 9999.99) {
            this.classList.add('is-invalid');
            amountError.textContent = 'Please enter a valid amount between $0.01 and $9,999.99';
            amountError.style.display = 'block';
          } else if (priceValue > 0 && value < priceValue) {
            this.classList.add('is-invalid');
            amountError.textContent = 'Amount cannot be lower than the price ($' + priceValue.toFixed(2) + ')';
            amountError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            amountError.style.display = 'none';
          }
        });

        // Prevent non-numeric characters (except decimal point)
        amountInput.addEventListener('keypress', function(e) {
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
      }

      // Create Modal: Price and Amount field validation and formatting
      const createPriceInput = document.getElementById('createGiftCertPrice');
      const createPriceError = document.getElementById('createPriceError');
      const createAmountInput = document.getElementById('createGiftCertAmount');
      const createAmountError = document.getElementById('createAmountError');
      
      // Track if amount field has been manually changed by user
      let createAmountManuallyChanged = false;
      
      // Create Price field validation
      if (createPriceInput) {
        // Format input on blur (when user leaves the field)
        createPriceInput.addEventListener('blur', function() {
          let value = parseFloat(this.value);
          if (!isNaN(value) && value > 0) {
            this.value = value.toFixed(2);
            this.classList.remove('is-invalid');
            createPriceError.style.display = 'none';
          }
        });

        // Real-time validation on input
        createPriceInput.addEventListener('input', function() {
          let value = parseFloat(this.value);
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            createPriceError.style.display = 'none';
            // Clear amount field if price is empty and not manually changed
            if (!createAmountManuallyChanged && createAmountInput) {
              createAmountInput.value = '';
            }
            // Reset minimum value when price is empty
            if (createAmountInput) {
              createAmountInput.setAttribute('min', '0.01');
            }
            return;
          }
          
          if (isNaN(value) || value < 0.01 || value > 9999.99) {
            this.classList.add('is-invalid');
            createPriceError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            createPriceError.style.display = 'none';
            
            // Update amount field to match price if not manually changed
            if (!createAmountManuallyChanged && createAmountInput) {
              createAmountInput.value = this.value;
            }
            
            // Update minimum value for amount field
            if (createAmountInput) {
              createAmountInput.setAttribute('min', this.value);
            }
          }
        });
        
        // Update amount when price changes (on blur)
        createPriceInput.addEventListener('blur', function() {
          if (!createAmountManuallyChanged && this.value && createAmountInput) {
            let value = parseFloat(this.value);
            if (!isNaN(value) && value > 0) {
              createAmountInput.value = value.toFixed(2);
            }
          }
          
          // Always update the minimum value for amount field
          if (this.value && createAmountInput) {
            let priceValue = parseFloat(this.value);
            if (!isNaN(priceValue) && priceValue > 0) {
              createAmountInput.setAttribute('min', priceValue.toFixed(2));
            }
          }
        });

        // Prevent non-numeric characters (except decimal point)
        createPriceInput.addEventListener('keypress', function(e) {
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
      }
      
      // Create Amount field validation
      if (createAmountInput) {
        // Format input on blur (when user leaves the field)
        createAmountInput.addEventListener('blur', function() {
          let value = parseFloat(this.value);
          let priceValue = parseFloat(createPriceInput.value) || 0;
          
          if (!isNaN(value) && value >= 0.01) {
            this.value = value.toFixed(2);
            
            // Validate against price if price exists
            if (priceValue > 0 && value < priceValue) {
              this.classList.add('is-invalid');
              createAmountError.textContent = 'Amount cannot be lower than the price ($' + priceValue.toFixed(2) + ')';
              createAmountError.style.display = 'block';
            } else {
              this.classList.remove('is-invalid');
              createAmountError.style.display = 'none';
            }
          } else if (value < 0.01) {
            this.classList.add('is-invalid');
            createAmountError.textContent = 'Please enter a valid amount between $0.01 and $9,999.99';
            createAmountError.style.display = 'block';
          }
        });

        // Real-time validation on input
        createAmountInput.addEventListener('input', function() {
          // Mark as manually changed when user types in amount field
          createAmountManuallyChanged = true;
          
          let value = parseFloat(this.value);
          let priceValue = parseFloat(createPriceInput.value) || 0;
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            createAmountError.style.display = 'none';
            // Reset manual change flag if field is completely cleared
            createAmountManuallyChanged = false;
            return;
          }
          
          if (isNaN(value) || value < 0.01 || value > 9999.99) {
            this.classList.add('is-invalid');
            createAmountError.textContent = 'Please enter a valid amount between $0.01 and $9,999.99';
            createAmountError.style.display = 'block';
          } else if (priceValue > 0 && value < priceValue) {
            this.classList.add('is-invalid');
            createAmountError.textContent = 'Amount cannot be lower than the price ($' + priceValue.toFixed(2) + ')';
            createAmountError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            createAmountError.style.display = 'none';
          }
        });

        // Prevent non-numeric characters (except decimal point)
        createAmountInput.addEventListener('keypress', function(e) {
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

      // Initialize drag and drop when the page loads
      initializeDragAndDrop();

      // Pagination functionality for Gift Certificate Transactions
      const rowsPerPage = 10;
      const transactionsTable = document.querySelector('#giftCertTransactionsTable tbody');
      const transactionRows = transactionsTable ? transactionsTable.querySelectorAll('tr') : [];
      const totalRows = transactionRows.length;
      const totalPages = Math.ceil(totalRows / rowsPerPage) || 1;
      let currentPage = 1;

      function showTransactionsPage(page) {
          // Hide all rows
          transactionRows.forEach(row => row.style.display = 'none');
          
          // Show rows for current page
          const startIndex = (page - 1) * rowsPerPage;
          const endIndex = startIndex + rowsPerPage;
          
          for (let i = startIndex; i < endIndex && i < totalRows; i++) {
              if (transactionRows[i]) {
                  transactionRows[i].style.display = '';
              }
          }
          
          // Update pagination display
          updateTransactionsDisplay(page);
          updateTransactionsPagination(page);
      }

      function updateTransactionsDisplay(page) {
          // Calculate items shown on current page
          const startIndex = (page - 1) * rowsPerPage;
          const endIndex = Math.min(startIndex + rowsPerPage, totalRows);
          const itemsShown = endIndex - startIndex;
          
          // Target the text element using the ID
          const transactionsPaginationText = document.getElementById('transactionsShowingText');
          if (transactionsPaginationText) {
              transactionsPaginationText.innerHTML = `Showing <span class="fw-semibold">${itemsShown}</span> of <span class="fw-semibold">${totalRows}</span> Transactions`;
          }
      }

      function updateTransactionsPagination(page) {
          const paginationContainer = document.querySelector('#transactionsPagination');
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
                  showTransactionsPage(currentPage);
              }
          });
          prevLi.appendChild(prevLink);
          paginationContainer.appendChild(prevLi);
          
          // Page number buttons
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
                          showTransactionsPage(currentPage);
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
                  showTransactionsPage(currentPage);
              }
          });
          nextLi.appendChild(nextLink);
          paginationContainer.appendChild(nextLi);
      }

      // Initialize transactions pagination
      showTransactionsPage(1);

    });
  </script> 
  <!-- Page Js --> 
  <script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>

<!-- Edit Gift Certificate Modal -->
<div class="modal fade" id="editGiftCertModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Edit Gift Certificate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Title" required>
        </div>
        
        <div class="row mb-5">
          <div class="col-md-5 offset-md-1 align-content-center">
            <img class="img-fluid rounded " style="display:block; margin:0 auto;" src="assets/images/placeholder-img.png" />               
          </div>
          <div class="col-md-5 dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick">
              <i class="h1 bx bx-cloud-upload"></i>
              <h3>Upload Featured Image</h3>
              <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Description</label>
            <!-- Quill Editors -->
            <div id="snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Hello World!</span></h3>
              <p><br></p>
              <h3>This is a simple editable area.</h3>
              <p><br></p>
              <ul>
                <li>Select a text to reveal the toolbar.</li>
                <li>Edit rich document on-the-fly, so elastic!</li>
              </ul>
            </div>
          </div>
        </div>           
        
        <div class="row offset-md-1 mb-5">          
          <div class="col-md-2 mb-3">
            <label for="giftCertPrice" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control spinner-field" id="giftCertPrice" 
                     min="0.00" max="9999.99" step="1.00" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 25.00)" 
                     required>
            </div>
            <div class="invalid-feedback" id="priceError">
              Please enter a valid price between $0.01 and $9,999.99
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="giftCertAmount" class="form-label">Redeemable Amount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control spinner-field" id="giftCertAmount" 
                     min="0.00" max="9999.99" step="1.00"
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Gift Certificate Amount"
                     data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Amount" data-bs-content="Enter a higher amount than the price for incentive to purchase">
            </div>
            <div class="invalid-feedback" id="amountError">
              Please enter a valid amount
            </div>
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

<!-- Create Gift Certificate Modal -->
<div class="modal fade" id="createGiftCertModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Create Gift Certificate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-3 offset-md-1 mb-3">
          <label for="createValidationDefault01" class="form-label">Title</label>
          <input type="text" class="form-control" id="createValidationDefault01" value="" placeholder="Enter title" required>
        </div>
        
        <div class="row mb-5">
          <div class="col-md-5 offset-md-1 align-content-center">
            <img class="img-fluid rounded " style="display:block; margin:0 auto;" src="assets/images/placeholder-img.png" />               
          </div>
          <div class="col-md-5 dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
            <div class="dz-message needsclick">
              <i class="h1 bx bx-cloud-upload"></i>
              <h3>Upload Featured Image</h3>
              <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Description</label>
            <!-- Quill Editors -->
            <div id="create-snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Gift Certificate</span></h3>
              <p><br></p>
              <h3>Enter gift certificate description</h3>
              <p><br></p>
              <ul>
                <li>Valid for all services</li>
                <li>Non-refundable</li>
              </ul>
            </div>
          </div>
        </div>           
        
        <div class="row offset-md-1 mb-5">          
          <div class="col-md-2 mb-3">
            <label for="createGiftCertPrice" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control spinner-field" id="createGiftCertPrice" 
                     min="0.00" max="9999.99" step="1.00" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 25.00)" 
                     required>
            </div>
            <div class="invalid-feedback" id="createPriceError">
              Please enter a valid price between $0.01 and $9,999.99
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="createGiftCertAmount" class="form-label">Redeemable Amount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control spinner-field" id="createGiftCertAmount" 
                     min="0.00" max="9999.99" step="1.00"
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Gift Certificate Amount"
                     data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Amount" data-bs-content="Enter a higher amount than the price for incentive to purchase">
            </div>
            <div class="invalid-feedback" id="createAmountError">
              Please enter a valid amount
            </div>
          </div>          
        </div>
      </div>
      
      <div class="modal-footer">
        <div class="form-check form-switch">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable gift certificate" type="checkbox" role="switch" id="createFlexSwitchCheckChecked" checked>
          <label class="form-check-label" for="createFlexSwitchCheckChecked">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>