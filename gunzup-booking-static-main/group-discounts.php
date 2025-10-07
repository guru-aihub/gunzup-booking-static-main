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
          <h4>Group Discounts</h4>
            <p>Good for Team sponsorships and/ or large group incentive. Keep your onsite onbording staff in the know about teams and groups that are privileged with loyalty discounts.</p>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <select class="form-control" id="booked-package" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                    <option value="">All</option>
                    <option value="">{Group Name}</option>
                    <option value="">{Group Name}</option>
                    <option value="">{Group Name}</option>
                    <option value="">{Group Name}</option>
                  </select>
                </div>
                <div class="col-md-2 search-bar"> <span><i class="bx bx-search-alt"></i></span>
                  <input type="search" class="form-control" id="search" placeholder="Search Name or Group" />
                </div>
                <div class="col-md-5">
                  <!--<div class="row">
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
                  </div>-->
                </div>
                <div class="col-md-3">
                  <!--<button type="button" class="btn btn-soft-secondary">Select Date: 01/02/2025</button>-->
                </div>
              </div>
              <!-- end row --> 
            </div>
            <div>
              <div class="table-responsive table-centered">
                <table class="table text-nowrap mb-0" id="groupDiscountsTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>                      
                      <th class="border-0 py-2"> Group <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Contact <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Waivers Signed"  class='bx bx-pencil'></i> / <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Members"  class='bx bxs-group'></i> <!-- Waiver/Attendees--><i class='bx bx-expand-vertical'></i> </th>                      
                      
                        <th class="border-0 py-2"> Discount <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Created <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Check In <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2 text-end"> Actions </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                     
                      <td>Group Name 
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                          <i data-bs-toggle="modal" data-bs-target="#notesModal" style="color:#22c55e;" class='bx bx-note'></i>
                        </span>
                      </td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span  data-bs-toggle="popover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="{Contact's Name}'s Contact" data-bs-content="Contact Email | Contact Phone">Sean Kemper</span></h5>
                          </div>
                        </div></td>
                      <td>3/7</td>
                      <td data-bs-toggle="modal" data-bs-target="#editDiscountModal">20%</td>
                        <td>4/23/00</td>
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                      <td>42<i class="bx bx-check-square" style="color:#22c55e; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#checkInModal" data-member-name="Sean Kemper's Group"></i></td>
                        <td class="text-end">
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGoupModal">
                              <i class="bx bx-edit fs-16"></i>
                            </button>
                          </span>
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Print List">
                            <button type="button" class="btn btn-sm btn-soft-secondary me-1"><i class='bx bx-printer fs-16'></i></button>
                          </span>
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                              <i class='bx bx-trash fs-16'></i>
                            </button>
                          </span>
                        </td>
                    </tr>
                    <tr>
                      
                      <td>Group Name <i data-bs-toggle="modal" data-bs-target="#notesModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes" style="color:#22c55e;" class='bx bx-note'></i></td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span  data-bs-toggle="popover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="{Contact's Name}'s Contact" data-bs-content="Contact Email | Contact Phone">Sophia Davis </span></h5>
                          </div>
                        </div></td>
                      <td>8/11</td>
                       <td data-bs-toggle="modal" data-bs-target="#editDiscountModal">$5 Off Per</td>
                        <td>4/23/00</td>
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                      <td>89<i class="bx bx-check-square" style="color:#22c55e; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#checkInModal" data-member-name="Sophia Davis' Group"></i></td>
                        <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGoupModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button><button type="button" class="btn btn-sm  btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print List"> <i class='bx bx-printer fs-16'></i></button><button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                        <i class="bx bx-trash fs-16"></i>
                        </button></td>
                    </tr>
                    <tr>
                      
                      <td>Group Name <i data-bs-toggle="modal" data-bs-target="#notesModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes" style="color:#22c55e;" class='bx bx-note'></i></td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span  data-bs-toggle="popover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="{Contact's Name}'s Contact" data-bs-content="Contact Email | Contact Phone">Dave Mathews</span></h5>
                          </div>
                        </div></td>
                      <td>5/5</td>
                       <td data-bs-toggle="modal" data-bs-target="#editDiscountModal">15%</td>
                        <td>4/23/00</td>
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                        <td>63<i class="bx bx-check-square" style="color:#22c55e; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#checkInModal" data-member-name="Dave Mathews' Group"></i></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editGoupModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print List"> <i class='bx bx-printer fs-16'></i></button><button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                        <i class="bx bx-trash fs-16"></i>
                        </button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="groupDiscountsPagination">
                <div class="col-sm">
                  <div class="text-muted" id="groupDiscountsShowingText"> Showing <span class="fw-semibold">3</span> of <span class="fw-semibold">3</span>Discount Groups</div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="groupDiscountsPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
                <div class="col-sm" style="text-align: right;">
                  <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Create Group">
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createGoupModal">Create Discount Group</a>
                  </span>
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
    
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-md-3"><h4>Send out Waiver Request</h4>
                <small>Enter emails (separated by commas)</small></div>
                  
                <div class="col-md-6">
                  <label for="example-textarea" class="form-label"></label>
                  <textarea class="form-control" id="example-textarea" placeholder="example1@domain.com, example2@domain.com, example3@domain.com" rows="1"></textarea>
                    
                </div>
                  <div class="col-md-2 d-flex align-items-center justify-content-center email-waiver-btn-col"><a href="#" class="btn btn-primary email-waiver-send-btn">Send</a></div>
              </div>
            </div>
          </div>
          <!-- end card --> 
        </div>
        <!-- end col --> 
      </div>
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

<script>
// Check-in Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Flatpickr for check-in date
    const checkInDatePicker = flatpickr("#checkInDate", {
        dateFormat: "Y-m-d",
        defaultDate: new Date(),
        maxDate: new Date(), // Can't check in for future dates
        allowInput: true
    });

    // Handle modal show event to populate group name
    document.getElementById('checkInModal').addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const groupName = button.getAttribute('data-member-name');
        document.getElementById('groupNameDisplay').textContent = groupName;
        
        // Reset date picker to today
        checkInDatePicker.setDate(new Date());
    });

    // Handle "Check-in Today" button
    document.getElementById('checkInToday').addEventListener('click', function() {
        const groupName = document.getElementById('groupNameDisplay').textContent;
        const today = new Date().toISOString().split('T')[0];
        
        // Here you would typically send this data to your backend
        alert(`${groupName} has been checked in for today (${today})`);
        
        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('checkInModal'));
        modal.hide();
    });

    // Handle "Check-in Selected Date" button
    document.getElementById('checkInSelected').addEventListener('click', function() {
        const groupName = document.getElementById('groupNameDisplay').textContent;
        const selectedDate = document.getElementById('checkInDate').value;
        
        if (!selectedDate) {
            alert('Please select a date first');
            return;
        }
        
        // Here you would typically send this data to your backend
        alert(`${groupName} has been checked in for ${selectedDate}`);
        
        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('checkInModal'));
        modal.hide();
    });

    // Pagination functionality for Group Discounts
    const rowsPerPage = 10;
    const groupDiscountsTable = document.querySelector('#groupDiscountsTable tbody');
    const tableRows = groupDiscountsTable ? groupDiscountsTable.querySelectorAll('tr') : [];
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
        const groupDiscountsShowingText = document.getElementById('groupDiscountsShowingText');
        if (groupDiscountsShowingText) {
            groupDiscountsShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Discount Groups`;
        }
    }

    function updatePaginationButtons(page) {
        const paginationContainer = document.getElementById('groupDiscountsPaginationContainer');
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

</body>
</html>

<!-- Check-in Modal -->
<div class="modal fade" id="checkInModal" tabindex="-1" aria-labelledby="checkInModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkInModalLabel">Manual Check-in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Group Name:</label>
          <p><strong><span id="groupNameDisplay"></span></strong></p>
        </div>
        <div class="mb-3">
          <label for="checkInDate" class="form-label">Select Check-in Date:</label>
          <input type="text" class="form-control" id="checkInDate" placeholder="Select date">
        </div>
        <div class="mb-3">
          <p class="text-muted">Select a date to manually check in this group. You can choose today's date or a past date.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="checkInToday">Check-in Today</button>
        <button type="button" class="btn btn-success" id="checkInSelected">Check-in Selected Date</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>