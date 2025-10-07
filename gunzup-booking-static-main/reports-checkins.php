<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Check-ins Report";
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
            <h4>Check-ins Report</h4>
          </div>
        </div>
      </div>



      <!-- Summary Stats -->
      <div class="row">
        <div class="col-xl-4 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar-sm">
                    <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                      <i class="bx bx-user-check fs-22"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-0">248</h4>
                  <p class="text-muted mb-0">Total Check-ins</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar-sm">
                    <div class="avatar-title bg-success-subtle text-success rounded-circle">
                      <i class="bx bx-check-circle fs-22"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-0">42</h4>
                  <p class="text-muted mb-0">Today's Check-ins</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar-sm">
                    <div class="avatar-title bg-warning-subtle text-warning rounded-circle">
                      <i class="bx bx-user-x fs-22"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-0">3</h4>
                  <p class="text-muted mb-0">No Shows</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Check-ins Table -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Check-ins</h4>
            </div>
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between gap-3">
                <div class="search-drop-bar">
                  <select class="form-control" id="checkins-search-dropdown" name="choices-single-no-sorting">
                    <option value="">All Check-ins</option>
                    <option value="">John Smith</option>
                    <option value="">Sarah Johnson</option>
                    <option value="">Mike Davis</option>
                    <option value="">Lisa Davis</option>
                    <option value="">Robert Wilson</option>
                    <option value="">Amanda Miller</option>
                    <option value="">Team Alpha</option>
                    <option value="">Birthday Party</option>
                    <option value="">Corporate Event</option>
                    <option value="">Teen Squad</option>
                    <option value="">Kids Birthday</option>
                    <option value="">Adult Group</option>
                  </select>
                </div>
                <div>
                  <select class="form-select" id="statusFilter">
                    <option value="">All Statuses</option>
                    <option value="checked-in">Checked In</option>
                    <option value="playing">Playing</option>
                    <option value="completed">Completed</option>
                    <option value="no-show">No Show</option>
                  </select>
                </div>
                <div>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                    <input type="text" class="form-control" id="dateRange" placeholder="2018-10-03 to 2018-10-10">
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <div>
              <div class="table-responsive">
                <table class="table table-centered text-nowrap mb-0" id="checkinsTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2">Attendee</th>
                      <th class="border-0 py-2">Group</th>
                      <th class="border-0 py-2">Booked Date</th>
                      <th class="border-0 py-2">Check-in Time</th>
                      <th class="border-0 py-2"><i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Waivers Signed" class='bx bx-pencil'></i> / <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Attendees" class='bx bxs-group'></i></th>
                      <th class="border-0 py-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div>
                          <div class="fw-medium">John Smith</div>
                          <small class="text-muted">john@email.com</small>
                        </div>
                      </td>
                      <td><span class="fw-medium">Team Alpha</span></td>
                      <td>Dec 15, 2024<br><small class="text-muted">9:00 AM</small></td>
                      <td class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <i class="bx bx-check-circle text-success me-2"></i>
                          <div>
                            <div class="fw-medium">8:45 AM</div>
                            <small class="text-muted">Today</small>
                          </div>
                        </div>
                      </td>
                      <td><a href="#waivers">8/8</a> <span class="badge badge-soft-success">All Present</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <div class="fw-medium">Sarah Johnson</div>
                          <small class="text-muted">sarah@email.com</small>
                        </div>
                      </td>
                      <td><span class="fw-medium">Birthday Party</span></td>
                      <td>Dec 15, 2024<br><small class="text-muted">10:30 AM</small></td>
                      <td class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <i class="bx bx-check-circle text-success me-2"></i>
                          <div>
                            <div class="fw-medium">10:15 AM</div>
                            <small class="text-muted">Today</small>
                          </div>
                        </div>
                      </td>
                      <td><a href="#waivers">10/12</a> <span class="badge badge-soft-warning">2 Pending</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <div class="fw-medium">Mike Davis</div>
                          <small class="text-muted">mike@company.com</small>
                        </div>
                      </td>
                      <td><span class="fw-medium">Corporate Event</span></td>
                      <td>Dec 15, 2024<br><small class="text-muted">1:00 PM</small></td>
                      <td class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <i class="bx bx-time text-info me-2"></i>
                          <div>
                            <div class="fw-medium">12:30 PM</div>
                            <small class="text-muted">Today</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#waivers">15/15</a> <span class="badge badge-soft-success">All Present</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <div class="fw-medium">Lisa Davis</div>
                          <small class="text-muted">lisa@email.com</small>
                        </div>
                      </td>
                      <td><span class="fw-medium">Teen Squad</span></td>
                      <td>Dec 14, 2024<br><small class="text-muted">4:00 PM</small></td>
                      <td class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <i class="bx bx-check-circle text-success me-2"></i>
                          <div>
                            <div class="fw-medium">3:45 PM</div>
                            <small class="text-muted">Yesterday</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#waivers">6/8</a> <span class="badge badge-soft-warning">2 No Shows</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <div class="fw-medium">Robert Wilson</div>
                          <small class="text-muted">robert@email.com</small>
                        </div>
                      </td>
                      <td><span class="fw-medium">Kids Birthday</span></td>
                      <td>Dec 14, 2024<br><small class="text-muted">11:15 AM</small></td>
                      <td class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <i class="bx bx-check-circle text-success me-2"></i>
                          <div>
                            <div class="fw-medium">11:00 AM</div>
                            <small class="text-muted">Yesterday</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#waivers">6/6</a> <span class="badge badge-soft-success">All Present</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <div class="fw-medium">Amanda Miller</div>
                          <small class="text-muted">amanda@email.com</small>
                        </div>
                      </td>
                      <td><span class="fw-medium">Adult Group</span></td>
                      <td>Dec 14, 2024<br><small class="text-muted">2:00 PM</small></td>
                      <td class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <i class="bx bx-x-circle text-danger me-2"></i>
                          <div>
                            <div class="fw-medium">2:00 PM</div>
                            <small class="text-muted">Yesterday</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="#waivers">0/12</a> <span class="badge badge-soft-danger">No Show</span>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Pagination -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="checkinsPagination">
                <div class="col-sm">
                  <div class="text-muted" id="checkinsShowingText">Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">6</span> Check-ins</div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="checkinsPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
                <div class="col-sm" style="text-align: right;">
                  <button class="btn btn-success me-2">
                    <i class="bx bx-export me-1"></i>Export to Excel
                  </button>
                  <button class="btn btn-primary">
                    <i class="bx bx-printer me-1"></i>Print Report
                  </button>
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

<script>
// Initialize Check-ins search dropdown
document.addEventListener('DOMContentLoaded', function() {
    const checkinsDropdown = document.getElementById('checkins-search-dropdown');
    
    if (checkinsDropdown) {
        new Choices(checkinsDropdown, {
            searchEnabled: true,
            searchPlaceholderValue: 'Search by name or group',
            shouldSort: false,
            itemSelectText: '',
            searchResultLimit: 50,
            renderChoiceLimit: 20,
            searchFloor: 1,
            searchChoices: true,
            position: 'auto',
            callbackOnCreateTemplates: function(template) {
                return {
                    choiceList: function(classNames) {
                        return template(`
                            <div class="${classNames.list}"></div>
                        `);
                    }
                };
            }
        });
    }
});

// Initialize Date Range Picker
document.getElementById('dateRange').flatpickr({
    mode: "range"
});

// Apply Filters
function applyFilters() {
    // Get filter values
    const dateRange = $('#dateRange').val();
    const statusFilter = $('#statusFilter').val();
    const searchDropdown = $('#checkins-search-dropdown').val();
    
    // Apply filters logic here
    console.log('Applying filters:', {
        dateRange: dateRange,
        status: statusFilter,
        search: searchDropdown
    });
    
    // In a real application, you would make an AJAX call here
    // to filter the data based on the selected criteria
}

// Clear Filters
function clearFilters() {
    $('#dateRange').val('');
    $('#statusFilter').val('');
    $('#checkins-search-dropdown').val('');
}

// Check-ins pagination functionality
const checkinsTable = document.querySelector('#checkinsTable tbody');
const checkinsPaginationContainer = document.querySelector('#checkinsPaginationContainer');
const itemsPerPage = 10;
let currentPage = 1;

if (checkinsTable && checkinsPaginationContainer) {
    const totalRows = checkinsTable.children.length;
    const totalPages = Math.ceil(totalRows / itemsPerPage);

    // Show/hide table rows based on page
    function showCheckinsPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        Array.from(checkinsTable.children).forEach((row, index) => {
            if (index >= startIndex && index < endIndex) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        // Update pagination display
        updateCheckinsPagination(page);
    }

    // Update pagination text (target only pagination area, not topbar)
    const checkinsShowingText = document.getElementById('checkinsShowingText');
    if (checkinsShowingText) {
        const startItem = totalRows > 0 ? ((page - 1) * itemsPerPage) + 1 : 0;
        const endItem = Math.min(page * itemsPerPage, totalRows);
        checkinsShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Check-ins`;
    }

    function updateCheckinsPagination(page) {
        if (!checkinsPaginationContainer) return;
        
        // Clear existing pagination
        checkinsPaginationContainer.innerHTML = '';
        
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
                showCheckinsPage(currentPage);
            }
        });
        prevLi.appendChild(prevLink);
        checkinsPaginationContainer.appendChild(prevLi);
        
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
                        showCheckinsPage(currentPage);
                    }
                });
                pageLi.appendChild(pageLink);
                checkinsPaginationContainer.appendChild(pageLi);
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
                showCheckinsPage(currentPage);
            }
        });
        nextLi.appendChild(nextLink);
        checkinsPaginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        checkinsPaginationContainer.className = 'pagination pagination-sm m-0';
    }

    // Initialize pagination
    showCheckinsPage(1);
}

// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>

</body>
</html> 