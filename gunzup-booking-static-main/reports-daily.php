<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Daily Reports";
include 'partials/title-meta.php'
?>

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
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-between">
            <h4>Online</h4>
            <div class="d-flex gap-2">
              <div class="input-group">
                <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                <input type="text" class="form-control" id="datePicker" placeholder="Select Date" value="<?php echo date('Y-m-d'); ?>">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Statistics Cards -->
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h3 class="mb-0 fw-bold mb-2">$2,845</h3>
                  <p class="text-muted">Booking Revenue Today</p>
                  <span class="badge fs-12 badge-soft-success">
                    <i class="bx bx-dollar-circle"></i> +8.2%
                  </span>
                </div>
                <div>
                  <div class="avatar-lg d-inline-block me-1">
                    <span class="avatar-title bg-success-subtle text-success rounded-circle">
                      <iconify-icon icon="iconamoon:credit-card-duotone" class="fs-32"></iconify-icon>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h3 class="mb-0 fw-bold mb-2">34</h3>
                  <p class="text-muted">Waivers Signed</p>
                  <span class="badge fs-12 badge-soft-warning">
                    <i class="bx bx-edit"></i> 81% Rate
                  </span>
                </div>
                <div>
                  <div class="avatar-lg d-inline-block me-1">
                    <span class="avatar-title bg-warning-subtle text-warning rounded-circle">
                      <iconify-icon icon="iconamoon:file-document-duotone" class="fs-32"></iconify-icon>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Package Breakdown -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Packages Booked Today</h4>
              <div>
                <button type="button" class="btn btn-sm btn-outline-light">
                  Today
                </button>
                <button type="button" class="btn btn-sm btn-outline-light">
                  Week
                </button>
                <button type="button" class="btn btn-sm btn-outline-light">
                  Month
                </button>
              </div>
            </div>
            <div class="card-body">
              <div dir="ltr">
                <div id="daily-package-chart" class="apex-charts"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- On-site Section -->
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center justify-content-between">
            <h4>On-site</h4>
            <div class="d-flex gap-2">
              <div class="input-group">
                <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                <input type="text" class="form-control" id="datePicker2" placeholder="Select Date" value="<?php echo date('Y-m-d'); ?>">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- On-site Statistics Cards -->
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h3 class="mb-0 fw-bold mb-2">42</h3>
                  <p class="text-muted">Total Check-ins</p>
                  <span class="badge fs-12 badge-soft-success">
                    <i class="bx bx-up-arrow-alt"></i> 12.5%
                  </span>
                </div>
                <div>
                  <div class="avatar-lg d-inline-block me-1">
                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                      <iconify-icon icon="iconamoon:profile-duotone" class="fs-32"></iconify-icon>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h3 class="mb-0 fw-bold mb-2">8</h3>
                  <p class="text-muted">Groups Today</p>
                  <span class="badge fs-12 badge-soft-info">
                    <i class="bx bx-group"></i> Active
                  </span>
                </div>
                <div>
                  <div class="avatar-lg d-inline-block me-1">
                    <span class="avatar-title bg-info-subtle text-info rounded-circle">
                      <iconify-icon icon="iconamoon:3d-duotone" class="fs-32"></iconify-icon>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Attendee List -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Today's Attendees</h4>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-success">
                  <i class="bx bx-export me-1"></i>Export
                </button>
                <button class="btn btn-sm btn-primary">
                  <i class="bx bx-printer me-1"></i>Print
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-centered text-nowrap mb-0" id="attendeesTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2">Time</th>
                      <th class="border-0 py-2">Group</th>
                      <th class="border-0 py-2">Customer</th>
                      <th class="border-0 py-2">Package</th>
                      <th class="border-0 py-2">Attendees</th>
                      <th class="border-0 py-2">Status</th>
                      <th class="border-0 py-2">Revenue</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>9:00 AM</td>
                      <td><span class="fw-medium">Team Alpha</span></td>
                      <td>John Smith</td>
                      <td>Paintball Package 1</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">8</span>
                          <span class="badge badge-soft-success">Checked In</span>
                        </div>
                      </td>
                      <td><span class="badge badge-soft-success">Completed</span></td>
                      <td>$640.00</td>
                    </tr>
                    <tr>
                      <td>10:30 AM</td>
                      <td><span class="fw-medium">Birthday Party</span></td>
                      <td>Sarah Johnson</td>
                      <td>Low Impact Paintball</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">12</span>
                          <span class="badge badge-soft-success">Checked In</span>
                        </div>
                      </td>
                      <td><span class="badge badge-soft-success">Completed</span></td>
                      <td>$480.00</td>
                    </tr>
                    <tr>
                      <td>1:00 PM</td>
                      <td><span class="fw-medium">Corporate Event</span></td>
                      <td>Mike Davis</td>
                      <td>Paintball Package 2</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">15</span>
                          <span class="badge badge-soft-info">Playing</span>
                        </div>
                      </td>
                      <td><span class="badge badge-soft-info">In Progress</span></td>
                      <td>$1,200.00</td>
                    </tr>
                    <tr>
                      <td>2:30 PM</td>
                      <td><span class="fw-medium">Kid's Party</span></td>
                      <td>Emma Wilson</td>
                      <td>Nerf Under 12</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">6</span>
                          <span class="badge badge-soft-warning">Waiting</span>
                        </div>
                      </td>
                      <td><span class="badge badge-soft-warning">Scheduled</span></td>
                      <td>$180.00</td>
                    </tr>
                    <tr>
                      <td>4:00 PM</td>
                      <td><span class="fw-medium">Group Challenge</span></td>
                      <td>Ryan Martinez</td>
                      <td>Bow Tag</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">10</span>
                          <span class="badge badge-soft-warning">Waiting</span>
                        </div>
                      </td>
                      <td><span class="badge badge-soft-warning">Scheduled</span></td>
                      <td>$345.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Pagination -->
              <div class="card-footer bg-transparent border-top p-3" id="attendeesPagination">
                <div class="row g-3">
                  <div class="col-sm">
                    <div class="text-muted" id="attendeesShowingText">
                      Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">5</span> Attendees
                    </div>
                  </div>
                  <div class="col-sm-auto">
                    <ul class="pagination pagination-sm m-0" id="attendeesPaginationContainer">
                      <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                      <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                      <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                    </ul>
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

<!-- Date Picker -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

<!-- ApexCharts -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

<script>
// Initialize Date Pickers
flatpickr("#datePicker", {
    dateFormat: "Y-m-d",
    defaultDate: new Date(),
    maxDate: new Date()
});

flatpickr("#datePicker2", {
    dateFormat: "Y-m-d",
    defaultDate: new Date(),
    maxDate: new Date()
});

// Attendees pagination functionality
const attendeesTable = document.querySelector('#attendeesTable tbody');
const attendeesPaginationContainer = document.querySelector('#attendeesPaginationContainer');
const itemsPerPage = 10;
let currentPage = 1;

if (attendeesTable && attendeesPaginationContainer) {
    const totalRows = attendeesTable.children.length;
    const totalPages = Math.ceil(totalRows / itemsPerPage);

    // Show/hide table rows based on page
    function showAttendeesPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        Array.from(attendeesTable.children).forEach((row, index) => {
            if (index >= startIndex && index < endIndex) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        // Update pagination display
        updateAttendeesPagination(page);
    }

    // Update pagination text (target only pagination area, not topbar)
    const attendeesShowingText = document.getElementById('attendeesShowingText');
    if (attendeesShowingText) {
        const startItem = totalRows > 0 ? ((currentPage - 1) * itemsPerPage) + 1 : 0;
        const endItem = Math.min(currentPage * itemsPerPage, totalRows);
        attendeesShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Attendees`;
    }

    function updateAttendeesPagination(page) {
        if (!attendeesPaginationContainer) return;
        
        // Clear existing pagination
        attendeesPaginationContainer.innerHTML = '';
        
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
                showAttendeesPage(currentPage);
            }
        });
        prevLi.appendChild(prevLink);
        attendeesPaginationContainer.appendChild(prevLi);
        
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
                        showAttendeesPage(currentPage);
                    }
                });
                pageLi.appendChild(pageLink);
                attendeesPaginationContainer.appendChild(pageLi);
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
                showAttendeesPage(currentPage);
            }
        });
        nextLi.appendChild(nextLink);
        attendeesPaginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        attendeesPaginationContainer.className = 'pagination pagination-sm m-0';
    }

    // Initialize pagination
    showAttendeesPage(1);
}

// Daily Package Chart
var dailyPackageOptions = {
    series: [{
        name: 'Bookings',
        data: [18, 12, 8, 4]
    }],
    chart: {
        type: 'bar',
        height: 350
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Paintball Package 1', 'Low Impact', 'Bow Tag', 'Nerf Under 12'],
    },
    yaxis: {
        title: {
            text: 'Number of Bookings'
        }
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " bookings"
            }
        }
    },
    colors: ['#3b82f6', '#10b981', '#f59e0b', '#06b6d4']
};

var dailyPackageChart = new ApexCharts(document.querySelector("#daily-package-chart"), dailyPackageOptions);
dailyPackageChart.render();


</script>

</body>
</html> 