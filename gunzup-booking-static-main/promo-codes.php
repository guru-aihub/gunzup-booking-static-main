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
          <h4>Discount Codes</h4>
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between gap-3">
                <div class="search-bar"> <span><i class="bx bx-search-alt"></i></span>
                  <input type="search" class="form-control" id="search" placeholder="Search codes..." />
                </div>
                <div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">Filter Results:</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-success">
                    <input type="checkbox" class="form-check-input" id="" checked>
                    <label class="form-check-label" for="bookingsPaid">Valid Only</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-warning">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="bookingsUnpaid">Unlimited Only</label>
                  </div>
                 <!-- <div class="form-check form-check-inline form-checkbox-danger">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="bookingsCanceled">Canceled</label>
                  </div>-->
                </div>
              </div>
              <!-- end row --> 
            </div>
            <div>
              <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0" id="promoCodesTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2 menu-arrow"><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></th>
                        <th class="border-0 py-2 menu-arrow">ID <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Code <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Valid Date <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> End Date <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Discount <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Applies To <i class='bx bx-expand-vertical'></i> </th>                      
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Used <i class='bx bx-expand-vertical'></i> </th>
                      
                      <th class="border-0 py-2 text-end"> Action </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      <td><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></td>
                        <td>00001</td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            EXMPL20 <i style="color:#ccc" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Copy Code to Clipboard" class='bx bx-copy'></i>
                          </div>
                        </div></td>
                      <td> 4/30/24</td>
                      <td>4/23/24</td>
                      <td>20%</td>
                      <td>Entire Order</td>
                      
                        <td><div class="form-check form-switch">
                          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable discount code" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                          <label class="form-check-label" for="invalidCheck2"></label>
                        </div></td>  
                        <td>34x</td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editCouponModal">
                            <i class="bx bx-edit"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy'></i></button>
                        </span>                        
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bx-trash'></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></td>
                        <td>00002</td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            EXMPL199 <i style="color:#ccc" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Copy Code to Clipboard" class='bx bx-copy'></i>
                          </div>
                        </div></td>
                      <td></td>
                      <td></td>
                      <td>$199</td>
                      <td>Add-ons Only</td>
                      
                        <td><div class="form-check form-switch">
                          <input class="form-check-input" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Enabled" data-bs-content="Enable / disable discount code" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                          <label class="form-check-label" for="invalidCheck2"></label>
                        </div></td>  
                        <td>{Used Date}</td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editCouponModal">
                            <i class="bx bx-edit"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Copy to New">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-copy'></i></button>
                        </span>                        
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bx-trash'></i>
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
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="promoCodesPagination">
                <div class="col-sm">
                  <div class="text-muted" id="promoCodesShowingText"> Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">52</span> Discount Codes </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="promoCodesPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link">2</a> </li>
                    <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
                <div class="col-sm" style="text-align: right;">
                  <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Selected">
                    <a href="#" class="btn btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class='bx bx-trash'></i></a>
                  </span>
                  <a data-bs-toggle="modal" data-bs-target="#newCouponModal" href="#" class="btn btn-success"><i class="bx bx-plus me-1"></i>Create Promo Code</a>
                </div>
              </div>
            </div>
            <!-- end card body --> 
            
          </div>
          <!-- end card --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row -->
      
      <!-- Discount Code Usage Table -->
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-3">Discount Code Usage</h5>
              <div class="d-flex flex-wrap justify-content-between gap-3 mb-3">
                <div class="search-bar">
                  <span><i class="bx bx-search-alt"></i></span>
                  <input type="search" class="form-control" id="search-usage" placeholder="Search usage..." />
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">Filter:</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="filterAllUsage" name="usageFilter" checked>
                    <label class="form-check-label" for="filterAllUsage">All</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-success">
                    <input type="radio" class="form-check-input" id="filterUsed" name="usageFilter">
                    <label class="form-check-label" for="filterUsed">Used</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-warning">
                    <input type="radio" class="form-check-input" id="filterUnused" name="usageFilter">
                    <label class="form-check-label" for="filterUnused">Unused</label>
                  </div>
                </div>
              </div>
              <!-- end search and filters -->
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-card">
                <table class="table text-nowrap mb-0" id="promoUsageTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2">Code <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Customer <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Used <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2">Check in <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2 text-end">Discount <i class='bx bx-expand-vertical'></i></th>
                      <th class="border-0 py-2 text-end">Order Total <i class='bx bx-expand-vertical'></i></th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      <td class="fw-medium">SAVE20</td>
                      <td>mike.wilson@email.com</td>
                      <td>Dec 22, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$85.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$425.00</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">HOLIDAY25</td>
                      <td>sarah.jones@email.com</td>
                      <td>Dec 20, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$45.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$180.00</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">NEWCUSTOMER</td>
                      <td>emily.davis@email.com</td>
                      <td>Dec 18, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$50.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$350.00</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">84J478fI4X</td>
                      <td><span class="text-muted">—</span></td>
                      <td><span class="text-muted">Not used</span></td>
                      <td><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></td>
                      <td class="text-end"><span class="text-muted">—</span></td>
                      <td class="text-end"><span class="text-muted">—</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">SAVE20</td>
                      <td>john.smith@email.com</td>
                      <td>Dec 15, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$90.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$720.00</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">GROUP10</td>
                      <td>david.johnson@email.com</td>
                      <td>Dec 12, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$30.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$295.00</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">OW32H8JFf2</td>
                      <td><span class="text-muted">—</span></td>
                      <td><span class="text-muted">Not used</span></td>
                      <td><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></td>
                      <td class="text-end"><span class="text-muted">—</span></td>
                      <td class="text-end"><span class="text-muted">—</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">HOLIDAY25</td>
                      <td>chris.martin@email.com</td>
                      <td>Dec 08, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$75.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$445.00</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">STUDENT15</td>
                      <td><span class="text-muted">—</span></td>
                      <td><span class="text-muted">Not used</span></td>
                      <td></td>
                      <td class="text-end"><span class="text-muted">—</span></td>
                      <td class="text-end"><span class="text-muted">—</span></td>
                    </tr>
                    <tr>
                      <td class="fw-medium">SAVE20</td>
                      <td>lisa.brown@email.com</td>
                      <td>Dec 05, 2024</td>
                      <td></td>
                      <td class="text-end"><span class="fw-semibold text-success">-$76.00</span></td>
                      <td class="text-end"><span class="fw-semibold">$380.00</span></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="promoUsagePagination">
                <div class="col-sm">
                  <div class="text-muted" id="promoUsageShowingText"> 
                    Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">47</span> Code Uses 
                  </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="promoUsagePaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link">2</a> </li>
                    <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
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
      <!-- end usage row -->
      
        </div>
    <!-- End Container -->

<script>
// Check-in toggle functionality for discount code usage
document.addEventListener('DOMContentLoaded', function() {
    // Add click event listeners to all check-in buttons
    const checkInButtons = document.querySelectorAll('.check-in-btn');
    
    checkInButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Check current state and toggle
            if (this.innerHTML.trim() === 'Check in') {
                // Change to "Checked In" state
                this.className = 'badge badge-soft-success';
                this.innerHTML = 'Checked In';
                this.setAttribute('data-bs-toggle', 'tooltip');
                this.setAttribute('data-bs-placement', 'top');
                this.setAttribute('data-bs-custom-class', 'primary-tooltip');
                this.setAttribute('data-bs-title', 'Click to Check Out');
                
                // Dispose of any existing tooltip and create new one
                if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
                    const existingTooltip = bootstrap.Tooltip.getInstance(this);
                    if (existingTooltip) {
                        existingTooltip.dispose();
                    }
                    new bootstrap.Tooltip(this);
                }
                
                console.log('Discount code usage checked in');
            } else {
                // Change back to "Check in" state
                this.className = 'badge badge-soft-warning check-in-btn';
                this.innerHTML = 'Check in';
                this.removeAttribute('data-bs-toggle');
                this.removeAttribute('data-bs-placement');
                this.removeAttribute('data-bs-custom-class');
                this.removeAttribute('data-bs-title');
                
                // Dispose of existing tooltip
                if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
                    const existingTooltip = bootstrap.Tooltip.getInstance(this);
                    if (existingTooltip) {
                        existingTooltip.dispose();
                    }
                }
                
                console.log('Discount code usage checked out');
            }
        });
    });

    // Pagination functionality for Promo Codes Tables
    const rowsPerPage = 10;
    
    // Main Promo Codes Table
    const promoCodesTable = document.querySelector('#promoCodesTable tbody');
    const promoCodesRows = promoCodesTable ? promoCodesTable.querySelectorAll('tr') : [];
    const promoCodesTotalRows = promoCodesRows.length;
    const promoCodesTotalPages = Math.ceil(promoCodesTotalRows / rowsPerPage) || 1;
    let promoCodesCurrentPage = 1;

    // Promo Usage Table  
    const promoUsageTable = document.querySelector('#promoUsageTable tbody');
    const promoUsageRows = promoUsageTable ? promoUsageTable.querySelectorAll('tr') : [];
    const promoUsageTotalRows = promoUsageRows.length;
    const promoUsageTotalPages = Math.ceil(promoUsageTotalRows / rowsPerPage) || 1;
    let promoUsageCurrentPage = 1;

    function showPromoCodesPage(page) {
        // Hide all rows
        promoCodesRows.forEach(row => row.style.display = 'none');
        
        // Show rows for current page
        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = startIndex + rowsPerPage;
        
        for (let i = startIndex; i < endIndex && i < promoCodesTotalRows; i++) {
            if (promoCodesRows[i]) {
                promoCodesRows[i].style.display = '';
            }
        }
        
        // Update pagination display
        updatePromoCodesDisplay(page);
        updatePromoCodesPagination(page);
    }

    function updatePromoCodesDisplay(page) {
        const startItem = promoCodesTotalRows > 0 ? ((page - 1) * rowsPerPage) + 1 : 0;
        const endItem = Math.min(page * rowsPerPage, promoCodesTotalRows);
        const promoCodesShowingText = document.getElementById('promoCodesShowingText');
        if (promoCodesShowingText) {
            promoCodesShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${promoCodesTotalRows}</span> Discount Codes`;
        }
    }

    function updatePromoCodesPagination(page) {
        const paginationContainer = document.getElementById('promoCodesPaginationContainer');
        if (!paginationContainer) return;
        
        // Clear existing pagination
        paginationContainer.innerHTML = '';
        
        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${page === 1 || promoCodesTotalPages === 1 ? 'disabled' : ''}`;
        const prevLink = document.createElement('a');
        prevLink.href = '#';
        prevLink.className = 'page-link';
        prevLink.innerHTML = '<i class="bx bx-left-arrow-alt"></i>';
        prevLink.addEventListener('click', function(e) {
            e.preventDefault();
            if (page > 1 && promoCodesTotalPages > 1) {
                promoCodesCurrentPage = page - 1;
                showPromoCodesPage(promoCodesCurrentPage);
            }
        });
        prevLi.appendChild(prevLink);
        paginationContainer.appendChild(prevLi);
        
        // Page number buttons
        if (promoCodesTotalPages > 0) {
            for (let i = 1; i <= promoCodesTotalPages; i++) {
                const pageLi = document.createElement('li');
                pageLi.className = `page-item ${i === page ? 'active' : ''}`;
                const pageLink = document.createElement('a');
                pageLink.href = '#';
                pageLink.className = 'page-link';
                pageLink.textContent = i;
                pageLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (promoCodesTotalPages > 1) {
                        promoCodesCurrentPage = i;
                        showPromoCodesPage(promoCodesCurrentPage);
                    }
                });
                pageLi.appendChild(pageLink);
                paginationContainer.appendChild(pageLi);
            }
        }
        
        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${page === promoCodesTotalPages || promoCodesTotalPages === 1 ? 'disabled' : ''}`;
        const nextLink = document.createElement('a');
        nextLink.href = '#';
        nextLink.className = 'page-link';
        nextLink.innerHTML = '<i class="bx bx-right-arrow-alt"></i>';
        nextLink.addEventListener('click', function(e) {
            e.preventDefault();
            if (page < promoCodesTotalPages && promoCodesTotalPages > 1) {
                promoCodesCurrentPage = page + 1;
                showPromoCodesPage(promoCodesCurrentPage);
            }
        });
        nextLi.appendChild(nextLink);
        paginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        paginationContainer.className = 'pagination pagination-sm m-0';
    }

    function showPromoUsagePage(page) {
        // Hide all rows
        promoUsageRows.forEach(row => row.style.display = 'none');
        
        // Show rows for current page
        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = startIndex + rowsPerPage;
        
        for (let i = startIndex; i < endIndex && i < promoUsageTotalRows; i++) {
            if (promoUsageRows[i]) {
                promoUsageRows[i].style.display = '';
            }
        }
        
        // Update pagination display
        updatePromoUsageDisplay(page);
        updatePromoUsagePagination(page);
    }

    function updatePromoUsageDisplay(page) {
        const startItem = promoUsageTotalRows > 0 ? ((page - 1) * rowsPerPage) + 1 : 0;
        const endItem = Math.min(page * rowsPerPage, promoUsageTotalRows);
        const promoUsageShowingText = document.getElementById('promoUsageShowingText');
        if (promoUsageShowingText) {
            promoUsageShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${promoUsageTotalRows}</span> Code Uses`;
        }
    }

    function updatePromoUsagePagination(page) {
        const paginationContainer = document.getElementById('promoUsagePaginationContainer');
        if (!paginationContainer) return;
        
        // Clear existing pagination
        paginationContainer.innerHTML = '';
        
        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${page === 1 || promoUsageTotalPages === 1 ? 'disabled' : ''}`;
        const prevLink = document.createElement('a');
        prevLink.href = '#';
        prevLink.className = 'page-link';
        prevLink.innerHTML = '<i class="bx bx-left-arrow-alt"></i>';
        prevLink.addEventListener('click', function(e) {
            e.preventDefault();
            if (page > 1 && promoUsageTotalPages > 1) {
                promoUsageCurrentPage = page - 1;
                showPromoUsagePage(promoUsageCurrentPage);
            }
        });
        prevLi.appendChild(prevLink);
        paginationContainer.appendChild(prevLi);
        
        // Page number buttons
        if (promoUsageTotalPages > 0) {
            for (let i = 1; i <= promoUsageTotalPages; i++) {
                const pageLi = document.createElement('li');
                pageLi.className = `page-item ${i === page ? 'active' : ''}`;
                const pageLink = document.createElement('a');
                pageLink.href = '#';
                pageLink.className = 'page-link';
                pageLink.textContent = i;
                pageLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (promoUsageTotalPages > 1) {
                        promoUsageCurrentPage = i;
                        showPromoUsagePage(promoUsageCurrentPage);
                    }
                });
                pageLi.appendChild(pageLink);
                paginationContainer.appendChild(pageLi);
            }
        }
        
        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${page === promoUsageTotalPages || promoUsageTotalPages === 1 ? 'disabled' : ''}`;
        const nextLink = document.createElement('a');
        nextLink.href = '#';
        nextLink.className = 'page-link';
        nextLink.innerHTML = '<i class="bx bx-right-arrow-alt"></i>';
        nextLink.addEventListener('click', function(e) {
            e.preventDefault();
            if (page < promoUsageTotalPages && promoUsageTotalPages > 1) {
                promoUsageCurrentPage = page + 1;
                showPromoUsagePage(promoUsageCurrentPage);
            }
        });
        nextLi.appendChild(nextLink);
        paginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        paginationContainer.className = 'pagination pagination-sm m-0';
    }

    // Initialize both paginations
    showPromoCodesPage(1);
    showPromoUsagePage(1);
});
</script>

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

  // Mutually exclusive discount fields functionality for Create modal
  const percentDiscountField = document.getElementById('promoDiscountPercent');
  const dollarDiscountField = document.getElementById('promoDiscountAmount');
  
  if (percentDiscountField && dollarDiscountField) {
    // When % field gets input, clear $ field and enforce 100% cap
    percentDiscountField.addEventListener('input', function() {
      if (this.value !== '') {
        // Enforce 100% maximum
        if (parseFloat(this.value) > 100) {
          this.value = '100';
        }
        dollarDiscountField.value = '';
        dollarDiscountField.classList.remove('is-invalid');
      }
    });
    
    // When $ field gets input, clear % field
    dollarDiscountField.addEventListener('input', function() {
      if (this.value !== '') {
        percentDiscountField.value = '';
        percentDiscountField.classList.remove('is-invalid');
      }
    });
  }

  // Mutually exclusive discount fields functionality for Edit modal
  const editPercentDiscountField = document.getElementById('editPromoDiscountPercent');
  const editDollarDiscountField = document.getElementById('editPromoDiscountAmount');
  
  if (editPercentDiscountField && editDollarDiscountField) {
    // When % field gets input, clear $ field and enforce 100% cap
    editPercentDiscountField.addEventListener('input', function() {
      if (this.value !== '') {
        // Enforce 100% maximum
        if (parseFloat(this.value) > 100) {
          this.value = '100';
        }
        editDollarDiscountField.value = '';
        editDollarDiscountField.classList.remove('is-invalid');
      }
    });
    
    // When $ field gets input, clear % field
    editDollarDiscountField.addEventListener('input', function() {
      if (this.value !== '') {
        editPercentDiscountField.value = '';
        editPercentDiscountField.classList.remove('is-invalid');
      }
    });
  }
});
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>
<!-- Create PromoCode Modal -->
<div class="modal fade" id="newCouponModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Create Promo Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
          <div class="row g-3 mb-3">
              <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Code Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Code Identifier" required>
        </div>
              <div class="col-md-3 mb-3">
          <label for="validationDefault01" class="form-label">Code</label>
          <input type="text" class="form-control" id="validationDefault01" value="{Code}" required>
        </div>
          </div>
           <div class="row g-3 mb-5">
          <div class="col-md-2 offset-md-1 mb-3 mt-5">
            <div class="form-check form-switch" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Valid for one use.">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckUnChecked">
              <label class="form-check-label" for="invalidCheck2">One Time Use</label>
            </div>
          </div>
           <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Limits uses for multiple users. Enter zero for infinite.">
            <label for="validationDefault01" class="form-label">Total Uses Per User</label>
            <input type="number" class="form-control" id="validationDefault01" placeholder="000" min="0" max="999" value="1" style="max-width: 100px;" required>
          </div>
          <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Total Users" data-bs-content="Use this to limit the total number of users, ie: First 100 users get this discount! Leave zero for infinite.">
            <label for="totalUsersCreate" class="form-label">Total Users</label>
            <input type="number" class="form-control" id="totalUsersCreate" placeholder="000" min="0" max="999999" value="" style="max-width: 120px;">
          </div>  
               
        </div>
          
        <div class="row g-3 mb-5">
          <div class="col-md-4 form-group offset-md-1">
            <label for="payment-status" class="form-label">Beginning Date</label>            
            <input type="text" id="basic-datepicker" class="form-control" placeholder="Valid From Date">
          </div>
         
          <div class="col-md-4 form-group" >
            <label for="payment-status" class="form-label">End Date</label>            
            <input type="text" id="basic-datepicker" class="form-control" placeholder="Valid To Date">

          </div>
         
        </div>
        <div class="row mb-5">          
          <div class="col-md-3 offset-md-1 form-group mb-3">
            <label for="payment-status" class="form-label">Applies to:</label>
            <select class="form-control" id="payment-status" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
              <option value="">Entire Order</option>
              <option value="">Package Only</option>
              <option value="">Add-ons Only</option>
            </select>
          </div>  
          <div class="col-md-2 form-group mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this promo code">
            <label for="promoDiscountPercent" class="form-label">% Discount</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="promoDiscountPercent" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Please enter a valid discount percentage (e.g., 10)" 
                     required>
            </div>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount dollar amount for this promo code">  
            <label for="promoDiscountAmount" class="form-label">$ Discount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="promoDiscountAmount" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid discount amount (e.g., 10.00)" 
                     required>
            </div> 
          </div>
            <div class="col-md-2 mb-3 mt-3">
            <div class="form-check form-switch" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Allows this discount code to be used with others.">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckUnChecked">
              <label class="form-check-label" for="invalidCheck2">Allow Combined</label>
            </div>
          </div>
          </div>          
           
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Notes</label>
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
<!-- Edit PromoCode Modal -->
<div class="modal fade" id="editCouponModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Promo Code}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
          <div class="row g-3 mb-3">
              <div class="col-md-3 offset-md-1 mb-3">
          <label for="validationDefault01" class="form-label">Code Title</label>
          <input type="text" class="form-control" id="validationDefault01" value="Code Identifier" required>
        </div>
              <div class="col-md-3 mb-3">
          <label for="validationDefault01" class="form-label">Code</label>
          <input type="text" class="form-control" id="validationDefault01" value="{Code}" required>
        </div>
          </div>
           <div class="row g-3 mb-5">
          <div class="col-md-2 offset-md-1 mb-3 mt-5">
            <div class="form-check form-switch" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Valid for one use.">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckUnChecked">
              <label class="form-check-label" for="invalidCheck2">One Time Use</label>
            </div>
          </div>
           <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Limits uses for multiple users. Enter zero for infinite.">
            <label for="validationDefault01" class="form-label">Total Uses Per User</label>
            <input type="number" class="form-control" id="validationDefault01" placeholder="000" min="0" max="999" value="1" style="max-width: 100px;" required>
          </div>
          <div class="col-md-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Total Users" data-bs-content="Use this to limit the total number of user, ie: First 100 users get this discount! Leave zero for infinite.">
            <label for="totalUsersEdit" class="form-label">Total Users</label>
            <input type="number" class="form-control" id="totalUsersEdit" placeholder="000" min="0" max="999999" value="" style="max-width: 120px;">
          </div>  
               
        </div>
          
        <div class="row g-3 mb-5">
          <div class="col-md-4 form-group offset-md-1">
            <label for="payment-status" class="form-label">Beginning Date</label>            
            <input type="text" id="basic-datepicker" class="form-control" placeholder="Valid From Date">
          </div>
         
          <div class="col-md-4 form-group" >
            <label for="payment-status" class="form-label">End Date</label>            
            <input type="text" id="basic-datepicker" class="form-control" placeholder="Valid To Date">

          </div>
         
        </div>
        <div class="row mb-5">          
          <div class="col-md-3 offset-md-1 form-group mb-3">
            <label for="payment-status" class="form-label">Applies to:</label>
            <select class="form-control" id="payment-status" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
              <option value="">Entire Order</option>
              <option value="">Package Only</option>
              <option value="">Add-ons Only</option>
            </select>
          </div>  
          <div class="col-md-2 form-group mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount percentage for this promo code">
            <label for="editPromoDiscountPercent" class="form-label">% Discount</label>
            <div class="input-group">
              <span class="input-group-text">%</span>
              <input type="number" class="form-control" id="editPromoDiscountPercent" 
                     min="0" max="100" step="1" 
                     placeholder="0" 
                     title="Please enter a valid discount percentage (e.g., 10)" 
                     required>
            </div>
          </div>
          <div class="col-md-2 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Discount Percentage" data-bs-content="Discount dollar amount for this promo code">  
            <label for="editPromoDiscountAmount" class="form-label">$ Discount</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" class="form-control price-field" id="editPromoDiscountAmount" 
                     min="0.01" max="999.99" step="0.01" 
                     placeholder="0.00" 
                     pattern="^\d+(\.\d{1,2})?$" 
                     title="Please enter a valid discount amount (e.g., 10.00)" 
                     required>
            </div> 
          </div>
            <div class="col-md-2 mb-3 mt-3">
            <div class="form-check form-switch" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Allows this discount code to be used with others.">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckUnChecked">
              <label class="form-check-label" for="invalidCheck2">Allow Combined</label>
            </div>
          </div>
          </div>          
           
        <div class="row">
          <div class="col-md-10 mb-3 offset-md-1">
            <label for="example-textarea" class="form-label">Admin Notes</label>
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