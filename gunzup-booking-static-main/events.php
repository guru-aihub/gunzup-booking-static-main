<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $title = "Events";
  include 'partials/title-meta.php'
  ?>
  <!-- Fullcalendar css -->
  <link href="assets/vendor/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />
  <!-- Date Picker CSS -->
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
          <div class="col">
            <h4>Events</h4>
            
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between gap-3 mb-3">
                  <div class="search-bar">
                    <span><i class="bx bx-search-alt"></i></span>
                    <input type="search" class="form-control" id="search-events" placeholder="Search events..." />
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">Filter Results:</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-success">
                      <input type="checkbox" class="form-check-input" id="filterFuture" checked>
                      <label class="form-check-label" for="filterFuture">Future</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-warning">
                      <input type="checkbox" class="form-check-input" id="filterPast">
                      <label class="form-check-label" for="filterPast">Past</label>
                    </div>
                    <div class="form-check form-check-inline form-checkbox-danger">
                      <input type="checkbox" class="form-check-input" id="filterArchived">
                      <label class="form-check-label" for="filterArchived">Archived</label>
                    </div>
                  </div>
                  <div>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                      <input type="text" class="form-control" id="eventsDateRange" placeholder="Show date range" style="cursor: pointer;">
                    </div>
                  </div>
                </div>
                <!-- end search and filters -->
              </div>
              <div class="card-body p-0">
                <div class="table-responsive table-centered">
                  <table class="table text-nowrap mb-0">
                    <thead class="bg-light bg-opacity-50">
                      <tr>
                        <th class="" style="width:6%"></th>
                        <th class="border-0 py-2 menu-arrow" style="width:6%"></th>
                        <th class="border-0 py-2"> Event Name <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Date <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2" style="width:8%"> Capacity <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2" style="width:8%"> Registered <i class='bx bx-expand-vertical'></i> </th>
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
                        <td>Laser Tag Tournament</td>
                        <td>Jan 15, 2025</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked>
                          </div>
                        </td>
                        <td>50</td>
                        <td>32</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editEventModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-warning me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                            <i class='bx bx-archive fs-16'></i>
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
                        <td>Birthday Party Special</td>
                        <td>Jan 20, 2025</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked>
                          </div>
                        </td>
                        <td>25</td>
                        <td>18</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editEventModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-warning me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                            <i class='bx bx-archive fs-16'></i>
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
                        <td>Corporate Team Building</td>
                        <td>Feb 05-07, 2025</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked3" checked>
                          </div>
                        </td>
                        <td>40</td>
                        <td>28</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editEventModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-warning me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                            <i class='bx bx-archive fs-16'></i>
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
                        <td>Weekend Warriors League</td>
                        <td>Feb 12, 2025</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked4">
                          </div>
                        </td>
                        <td>30</td>
                        <td>8</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editEventModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-warning me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                            <i class='bx bx-archive fs-16'></i>
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
                        <td>Summer Camp Special</td>
                        <td>Jul 10-14, 2025</td>
                        <td>
                          <div class="form-switch">
                            <input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked5">
                          </div>
                        </td>
                        <td>60</td>
                        <td>2</td>
                        <td class="text-end">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editEventModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                            <i class='bx bx-copy fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#embedCodeModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Embed Code">
                            <i class='bx bx-code-alt fs-16'></i>
                          </button>
                          <button type="button" class="btn btn-sm btn-soft-warning me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                            <i class='bx bx-archive fs-16'></i>
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
                      Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">5</span> Events 
                    </div>
                  </div>
                  <div class="col-sm-auto mt-3 mt-sm-0">                    
                  </div>
                  <div class="col-sm" style="text-align: right;"> 
                    <a data-bs-toggle="modal" data-bs-target="#createEventModal" href="#" class="btn btn-success"> 
                      <i class="bx bx-plus me-1"></i>Create Event
                    </a> 
                  </div>
                </div>
            </div>
            <!-- end card --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
        
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
  <!-- Date Picker -->
  <script src="assets/vendor/flatpickr/flatpickr.min.js"></script> 
  <script>
    // Event form validation and functionality
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Date Range Pickers (copied from working index.php implementation)
      const eventDate = document.getElementById('eventDate');
      if (eventDate) {
          flatpickr(eventDate, {
              mode: "range",
              dateFormat: "m/d/Y",
              onChange: function(selectedDates, dateStr, instance) {
                  if (selectedDates.length === 2) {
                      console.log('Event date range selected:', dateStr);
                  }
              }
          });
      }

      const createEventDate = document.getElementById('createEventDate');
      if (createEventDate) {
          flatpickr(createEventDate, {
              mode: "range",
              dateFormat: "m/d/Y",
              onChange: function(selectedDates, dateStr, instance) {
                  if (selectedDates.length === 2) {
                      console.log('Event date range selected:', dateStr);
                  }
              }
          });
      }

      // Initialize Events Table Date Range Picker
      const eventsDateRange = document.getElementById('eventsDateRange');
      if (eventsDateRange) {
          flatpickr(eventsDateRange, {
              mode: "range",
              dateFormat: "m/d/Y",
              onChange: function(selectedDates, dateStr, instance) {
                  if (selectedDates.length === 2) {
                      console.log('Events table date range selected:', dateStr);
                      // Here you would typically filter the events table based on the selected date range
                      // You can add your filtering logic here
                  }
              }
          });
      }
      const priceInput = document.getElementById('eventPrice');
      const priceError = document.getElementById('priceError');
      const capacityInput = document.getElementById('eventCapacity');
      const capacityError = document.getElementById('capacityError');
      
      // Price field validation
      if (priceInput) {
        // Format input on blur (when user leaves the field)
        priceInput.addEventListener('blur', function() {
          let value = parseFloat(this.value);
          if (!isNaN(value) && value >= 0) {
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
            return;
          }
          
          if (isNaN(value) || value < 0 || value > 9999.99) {
            this.classList.add('is-invalid');
            priceError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            priceError.style.display = 'none';
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
      
      // Capacity field validation
      if (capacityInput) {
        // Real-time validation on input
        capacityInput.addEventListener('input', function() {
          let value = parseInt(this.value);
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            capacityError.style.display = 'none';
            return;
          }
          
          if (isNaN(value) || value < 0 || value > 1000) {
            this.classList.add('is-invalid');
            capacityError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            capacityError.style.display = 'none';
          }
        });

        // Prevent non-numeric characters
        capacityInput.addEventListener('keypress', function(e) {
          const char = String.fromCharCode(e.which);
          
          // Allow control keys (backspace, delete, tab, etc.)
          if (e.which < 32 || e.which === 127) return true;
          
          // Allow digits only
          if (/\d/.test(char)) return true;
          
          // Prevent all other characters
          e.preventDefault();
          return false;
        });
      }

      // Create Modal: Similar validation for create form
      const createPriceInput = document.getElementById('createEventPrice');
      const createPriceError = document.getElementById('createPriceError');
      const createCapacityInput = document.getElementById('createEventCapacity');
      const createCapacityError = document.getElementById('createCapacityError');
      
      // Create Price field validation
      if (createPriceInput) {
        createPriceInput.addEventListener('blur', function() {
          let value = parseFloat(this.value);
          if (!isNaN(value) && value >= 0) {
            this.value = value.toFixed(2);
            this.classList.remove('is-invalid');
            createPriceError.style.display = 'none';
          }
        });

        createPriceInput.addEventListener('input', function() {
          let value = parseFloat(this.value);
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            createPriceError.style.display = 'none';
            return;
          }
          
          if (isNaN(value) || value < 0 || value > 9999.99) {
            this.classList.add('is-invalid');
            createPriceError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            createPriceError.style.display = 'none';
          }
        });

        createPriceInput.addEventListener('keypress', function(e) {
          const char = String.fromCharCode(e.which);
          const currentValue = this.value;
          
          if (e.which < 32 || e.which === 127) return true;
          if (/\d/.test(char)) return true;
          if (char === '.' && currentValue.indexOf('.') === -1 && currentValue.length > 0) {
            return true;
          }
          
          e.preventDefault();
          return false;
        });
      }
      
      // Create Capacity field validation
      if (createCapacityInput) {
        createCapacityInput.addEventListener('input', function() {
          let value = parseInt(this.value);
          
          if (this.value === '') {
            this.classList.remove('is-invalid');
            createCapacityError.style.display = 'none';
            return;
          }
          
          if (isNaN(value) || value < 0 || value > 1000) {
            this.classList.add('is-invalid');
            createCapacityError.style.display = 'block';
          } else {
            this.classList.remove('is-invalid');
            createCapacityError.style.display = 'none';
          }
        });

        createCapacityInput.addEventListener('keypress', function(e) {
          const char = String.fromCharCode(e.which);
          
          if (e.which < 32 || e.which === 127) return true;
          if (/\d/.test(char)) return true;
          
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

    });
  </script> 
  <!-- Page Js --> 
  <script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>

<!-- Edit Event Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Edit Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-5 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Event Name</label>
          <input type="text" class="form-control" id="validationDefault01" value="Laser Tag Tournament" required>
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
              <h3>Upload Event Image</h3>
              <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Event Description</label>
            <!-- Quill Editors -->
            <div id="snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Laser Tag Tournament</span></h3>
              <p><br></p>
              <h3>Join us for an exciting laser tag tournament!</h3>
              <p><br></p>
              <ul>
                <li>Teams of up to 6 players</li>
                <li>Multiple rounds of competition</li>
                <li>Prizes for winning teams</li>
              </ul>
            </div>
          </div>
        </div>           
        
        <div class="row offset-md-1 mb-5">          
          <div class="col-md-3 mb-3">
            <label for="eventDate" class="form-label">Event Date Range</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bx bx-calendar"></i></span>
              <input type="text" class="form-control" id="eventDate" placeholder="Select date range" value="01/15/2025 to 01/15/2025" required>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="eventTime" class="form-label">Event Time</label>
            <input type="time" class="form-control" id="eventTime" value="18:00" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="eventPrice" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control spinner-field" id="eventPrice" 
                     min="0.00" max="9999.99" step="1.00" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 25.00)"
                     value="35.00">
            </div>
            <div class="invalid-feedback" id="priceError">
              Please enter a valid price between $0.00 and $9,999.99
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="eventCapacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="eventCapacity" 
                   min="0" max="1000" 
                   placeholder="50" 
                   title="Maximum number of participants"
                   value="50"
                   data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Capacity" data-bs-content="Maximum number of participants for this event. Leave 0 for unlimited.">
            <div class="invalid-feedback" id="capacityError">
              Please enter a valid capacity between 0 and 1,000
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="allowDiscountCodes" class="form-label">Allow Discount Codes</label>
            <div class="form-switch">
              <input class="form-check-input form-switch" type="checkbox" role="switch" id="allowDiscountCodes" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Codes" data-bs-content="Allow use of discount codes with purchase of this event">
            </div>
          </div>          
        </div>
        
        <div class="row offset-md-1 mb-3">
          <div class="col-md-8">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="addToParkPage" checked data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Add to GunzUp!" data-bs-content="This will display this event in the events list on your GunzUp! park page">
              <label class="form-check-label" for="addToParkPage">
                Add this event to your GunzUp park page.
              </label>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <div class="form-check form-switch">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable event registration" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="invalidCheck2">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Create Event Modal -->
<div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Create Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <div class="col-md-5 offset-md-1 mb-3">
          <label for="createValidationDefault01" class="form-label">Event Name</label>
          <input type="text" class="form-control" id="createValidationDefault01" value="" placeholder="Enter event name" required>
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
              <h3>Upload Event Image</h3>
              <span class="text-muted fs-13">Image Requirements: minimum size 500x500</span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Event Description</label>
            <!-- Quill Editors -->
            <div id="create-snow-editor" style="height: 300px;">
              <h3><span class="ql-size-large">Event Title</span></h3>
              <p><br></p>
              <h3>Enter event description</h3>
              <p><br></p>
              <ul>
                <li>Event details</li>
                <li>What to expect</li>
              </ul>
            </div>
          </div>
        </div>           
        
        <div class="row offset-md-1 mb-5">          
          <div class="col-md-3 mb-3">
            <label for="createEventDate" class="form-label">Event Date Range</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bx bx-calendar"></i></span>
              <input type="text" class="form-control" id="createEventDate" placeholder="Select date range" required>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="createEventTime" class="form-label">Event Time</label>
            <input type="time" class="form-control" id="createEventTime" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="createEventPrice" class="form-label">Price</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control spinner-field" id="createEventPrice" 
                     min="0.00" max="9999.99" step="1.00" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid price (e.g., 25.00)">
            </div>
            <div class="invalid-feedback" id="createPriceError">
              Please enter a valid price between $0.00 and $9,999.99
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="createEventCapacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="createEventCapacity" 
                   min="0" max="1000" 
                   placeholder="0" 
                   value="0"
                   title="Maximum number of participants"
                   data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Capacity" data-bs-content="Maximum number of participants for this event. Leave 0 for unlimited.">
            <div class="invalid-feedback" id="createCapacityError">
              Please enter a valid capacity between 0 and 1,000
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="createAllowDiscountCodes" class="form-label">Allow Discount Codes</label>
            <div class="form-switch">
              <input class="form-check-input form-switch" type="checkbox" role="switch" id="createAllowDiscountCodes" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Codes" data-bs-content="Allow use of discount codes with purchase of this event">
            </div>
          </div>          
        </div>
        
        <div class="row offset-md-1 mb-3">
          <div class="col-md-8">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="createAddToParkPage" checked data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Add to GunzUp!" data-bs-content="This will display this event in the events list on your GunzUp! park page">
              <label class="form-check-label" for="createAddToParkPage">
                Add this event to your GunzUp park page.
              </label>
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <div class="form-check form-switch">
          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable event registration" type="checkbox" role="switch" id="createFlexSwitchCheckChecked" checked>
          <label class="form-check-label" for="createFlexSwitchCheckChecked">Enabled</label>
        </div>
        <button type="button" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
