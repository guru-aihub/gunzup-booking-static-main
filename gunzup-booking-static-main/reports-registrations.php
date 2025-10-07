<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Booking Reports";
include 'partials/title-meta.php'
?>

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
            <h4>Booking Reports</h4>
            <div class="d-flex gap-2">
              <button class="btn btn-success">
                <i class="bx bx-download me-1"></i>Download Report
              </button>
              <button class="btn btn-primary">
                <i class="bx bx-share me-1"></i>Share Report
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Summary Cards -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar-lg d-inline-block">
                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                      <iconify-icon icon="iconamoon:calendar-add-duotone" class="fs-32"></iconify-icon>
                    </span>
                  </div>
                </div>
                <div class="row w-100">
                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="text-center">
                      <h3 class="mb-0 fw-bold mb-2">12</h3>
                      <p class="text-muted">Today's Registrations</p>
                      <span class="badge fs-12 badge-soft-success">
                        <i class="bx bx-up-arrow-alt"></i> +25%
                      </span>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="text-center">
                      <h3 class="mb-0 fw-bold mb-2">84</h3>
                      <p class="text-muted">This Week</p>
                      <span class="badge fs-12 badge-soft-info">
                        <i class="bx bx-up-arrow-alt"></i> +12%
                      </span>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="text-center">
                      <h3 class="mb-0 fw-bold mb-2">356</h3>
                      <p class="text-muted">This Month</p>
                      <span class="badge fs-12 badge-soft-warning">
                        <i class="bx bx-up-arrow-alt"></i> +8%
                      </span>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="text-center">
                      <h3 class="mb-0 fw-bold mb-2">4,289</h3>
                      <p class="text-muted">This Year</p>
                      <span class="badge fs-12 badge-soft-success">
                        <i class="bx bx-up-arrow-alt"></i> +15%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts Row -->
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Booking Trends</h4>
              <div>
                <button type="button" class="btn btn-sm btn-outline-light" onclick="updateChart('daily')">
                  Daily
                </button>
                <button type="button" class="btn btn-sm btn-outline-light active" onclick="updateChart('weekly')">
                  Weekly
                </button>
                <button type="button" class="btn btn-sm btn-outline-light" onclick="updateChart('monthly')">
                  Monthly
                </button>
                <button type="button" class="btn btn-sm btn-outline-light" onclick="updateChart('yearly')">
                  Yearly
                </button>
              </div>
            </div>
            <div class="card-body">
              <div dir="ltr">
                <div id="registrations-chart" class="apex-charts"></div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Registration by Package</h4>
            </div>
            <div class="card-body">
              <div dir="ltr">
                <div id="package-distribution-chart" class="apex-charts"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Detailed Tables -->
      <div class="row">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Daily Breakdown</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-centered mb-0" id="dailyBreakdownTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0">Date</th>
                      <th class="border-0">Registrations</th>
                      <th class="border-0">Revenue</th>
                      <th class="border-0">Trend</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Dec 15, 2024</td>
                      <td><span class="fw-medium">12</span></td>
                      <td>$2,845</td>
                      <td><span class="badge badge-soft-success">+25%</span></td>
                    </tr>
                    <tr>
                      <td>Dec 14, 2024</td>
                      <td><span class="fw-medium">18</span></td>
                      <td>$3,420</td>
                      <td><span class="badge badge-soft-success">+12%</span></td>
                    </tr>
                    <tr>
                      <td>Dec 13, 2024</td>
                      <td><span class="fw-medium">15</span></td>
                      <td>$2,980</td>
                      <td><span class="badge badge-soft-info">+5%</span></td>
                    </tr>
                    <tr>
                      <td>Dec 12, 2024</td>
                      <td><span class="fw-medium">21</span></td>
                      <td>$4,125</td>
                      <td><span class="badge badge-soft-success">+30%</span></td>
                    </tr>
                    <tr>
                      <td>Dec 11, 2024</td>
                      <td><span class="fw-medium">9</span></td>
                      <td>$1,890</td>
                      <td><span class="badge badge-soft-warning">-15%</span></td>
                    </tr>
                    <tr>
                      <td>Dec 10, 2024</td>
                      <td><span class="fw-medium">16</span></td>
                      <td>$3,240</td>
                      <td><span class="badge badge-soft-success">+8%</span></td>
                    </tr>
                    <tr>
                      <td>Dec 9, 2024</td>
                      <td><span class="fw-medium">14</span></td>
                      <td>$2,760</td>
                      <td><span class="badge badge-soft-info">+2%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Daily Breakdown Pagination -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="dailyBreakdownPagination">
                <div class="col-sm">
                  <div class="text-muted" id="dailyBreakdownShowingText"> Showing <span class="fw-semibold">7</span> of <span class="fw-semibold">7</span> Daily Records </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="dailyBreakdownPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Package Performance</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-centered mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0">Package</th>
                      <th class="border-0">Registrations</th>
                      <th class="border-0">Revenue</th>
                      <th class="border-0">Avg. Size</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                              <i class="bx bx-target-lock"></i>
                            </span>
                          </div>
                          <span class="fw-medium">Paintball Package 1</span>
                        </div>
                      </td>
                      <td><span class="fw-medium">142</span></td>
                      <td>$11,360</td>
                      <td>8.2 people</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <span class="avatar-title bg-success-subtle text-success rounded-circle">
                              <i class="bx bx-target-lock"></i>
                            </span>
                          </div>
                          <span class="fw-medium">Low Impact Paintball</span>
                        </div>
                      </td>
                      <td><span class="fw-medium">98</span></td>
                      <td>$7,840</td>
                      <td>6.5 people</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                              <i class="bx bx-target-lock"></i>
                            </span>
                          </div>
                          <span class="fw-medium">Paintball Package 2</span>
                        </div>
                      </td>
                      <td><span class="fw-medium">76</span></td>
                      <td>$9,120</td>
                      <td>12.1 people</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <span class="avatar-title bg-warning-subtle text-warning rounded-circle">
                              <i class="bx bx-target-lock"></i>
                            </span>
                          </div>
                          <span class="fw-medium">Bow Tag</span>
                        </div>
                      </td>
                      <td><span class="fw-medium">54</span></td>
                      <td>$4,320</td>
                      <td>7.8 people</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <span class="avatar-title bg-info-subtle text-info rounded-circle">
                              <i class="bx bx-target-lock"></i>
                            </span>
                          </div>
                          <span class="fw-medium">Nerf Under 12</span>
                        </div>
                      </td>
                      <td><span class="fw-medium">32</span></td>
                      <td>$1,920</td>
                      <td>5.2 people</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Comparison -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Monthly Comparison</h4>
            </div>
            <div class="card-body">
              <div dir="ltr">
                <div id="monthly-comparison-chart" class="apex-charts"></div>
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

<!-- ApexCharts -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

<script>
// Registration Trends Chart
var registrationTrendsOptions = {
    series: [{
        name: 'Registrations',
        data: [12, 18, 15, 21, 9, 16, 14, 24, 19, 13, 17, 22, 16, 20]
    }],
    chart: {
        type: 'area',
        height: 350
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    xaxis: {
        categories: ['Dec 2', 'Dec 3', 'Dec 4', 'Dec 5', 'Dec 6', 'Dec 7', 'Dec 8', 'Dec 9', 'Dec 10', 'Dec 11', 'Dec 12', 'Dec 13', 'Dec 14', 'Dec 15']
    },
    yaxis: {
        title: {
            text: 'Number of Registrations'
        }
    },
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100]
        }
    },
    colors: ['#3b82f6']
};

var registrationTrendsChart = new ApexCharts(document.querySelector("#registrations-chart"), registrationTrendsOptions);
registrationTrendsChart.render();

// Package Distribution Chart
var packageDistributionOptions = {
    series: [142, 98, 76, 54, 32],
    chart: {
        type: 'donut',
        height: 350
    },
    labels: ['Paintball Package 1', 'Low Impact', 'Paintball Package 2', 'Bow Tag', 'Nerf Under 12'],
    colors: ['#3b82f6', '#10b981', '#6366f1', '#f59e0b', '#06b6d4'],
    legend: {
        position: 'bottom'
    }
};

var packageDistributionChart = new ApexCharts(document.querySelector("#package-distribution-chart"), packageDistributionOptions);
packageDistributionChart.render();

// Monthly Comparison Chart
var monthlyComparisonOptions = {
    series: [{
        name: 'This Year',
        data: [285, 320, 378, 395, 412, 438, 465, 489, 512, 545, 578, 612]
    }, {
        name: 'Last Year',
        data: [245, 278, 312, 334, 356, 378, 398, 415, 432, 448, 465, 481]
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
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yaxis: {
        title: {
            text: 'Registrations'
        }
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " registrations"
            }
        }
    },
    colors: ['#3b82f6', '#10b981']
};

var monthlyComparisonChart = new ApexCharts(document.querySelector("#monthly-comparison-chart"), monthlyComparisonOptions);
monthlyComparisonChart.render();

// Update Chart Function
function updateChart(period) {
    // Remove active class from all buttons
    document.querySelectorAll('.btn-outline-light').forEach(btn => btn.classList.remove('active'));
    
    // Add active class to clicked button
    event.target.classList.add('active');
    
    // Update chart data based on period
    let newData, newCategories;
    
    switch(period) {
        case 'daily':
            newData = [12, 18, 15, 21, 9, 16, 14];
            newCategories = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
            break;
        case 'weekly':
            newData = [84, 92, 76, 88, 95, 72, 89];
            newCategories = ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6', 'Week 7'];
            break;
        case 'monthly':
            newData = [356, 298, 412, 378, 445, 523, 467, 398, 356, 421, 467, 512];
            newCategories = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            break;
        case 'yearly':
            newData = [4289, 3876, 4512, 4123, 4789];
            newCategories = ['2020', '2021', '2022', '2023', '2024'];
            break;
    }
    
    registrationTrendsChart.updateOptions({
        series: [{
            name: 'Registrations',
            data: newData
        }],
        xaxis: {
            categories: newCategories
        }
    });
}

// Daily Breakdown pagination functionality
document.addEventListener('DOMContentLoaded', function() {
    const rowsPerPage = 10;
    const dailyBreakdownTable = document.querySelector('#dailyBreakdownTable tbody');
    const tableRows = dailyBreakdownTable ? dailyBreakdownTable.querySelectorAll('tr') : [];
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
        updateDailyBreakdownDisplay(page);
        updateDailyBreakdownPagination(page);
    }

    function updateDailyBreakdownDisplay(page) {
        const startItem = totalRows > 0 ? ((page - 1) * rowsPerPage) + 1 : 0;
        const endItem = Math.min(page * rowsPerPage, totalRows);
        const dailyBreakdownShowingText = document.getElementById('dailyBreakdownShowingText');
        if (dailyBreakdownShowingText) {
            dailyBreakdownShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Daily Records`;
        }
    }

    function updateDailyBreakdownPagination(page) {
        const paginationContainer = document.getElementById('dailyBreakdownPaginationContainer');
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

    // Initialize pagination if table exists
    if (dailyBreakdownTable && totalRows > 0) {
        showPage(1);
    }
});
</script>

</body>
</html> 