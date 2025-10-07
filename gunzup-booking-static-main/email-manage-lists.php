<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$title = "Manage Email Lists";
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
            <h4>Manage Email Lists</h4>
            <div class="d-flex gap-2 mb-4">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#campaignSettingsModal">
                <i class="bx bx-mail-send me-1"></i>Send Email Campaign
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Statistics Cards -->
      <div class="row">
        <div class="col-xl-3 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar-sm">
                    <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                      <i class="bx bx-user-plus fs-22"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-0">2,847</h4>
                  <p class="text-muted mb-0">Total Subscribers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
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
                  <h4 class="mb-0">2,456</h4>
                  <p class="text-muted mb-0">Active Subscribers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
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
                  <h4 class="mb-0">391</h4>
                  <p class="text-muted mb-0">Unsubscribed</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avatar-sm">
                    <div class="avatar-title bg-info-subtle text-info rounded-circle">
                      <i class="bx bx-list-ul fs-22"></i>
                    </div>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h4 class="mb-0">8</h4>
                  <p class="text-muted mb-0">Email Lists</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Email Lists Overview -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Email Lists</h4>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#importModal">
                  <i class="bx bx-import me-1"></i>Import Contacts
                </button>
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createListModal">
                  <i class="bx bx-plus me-1"></i>Create List
                </button>
                <button class="btn btn-sm btn-success">
                  <i class="bx bx-export me-1"></i>Export All
                </button>               
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-centered text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2">List Name</th>
                      <th class="border-0 py-2">Description</th>
                      <th class="border-0 py-2">Subscribers</th>
                      <th class="border-0 py-2">Last Updated</th>
                      <th class="border-0 py-2 text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                              <i class="bx bx-user-check"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">All Customers</h6>
                            <small class="text-muted">Master list</small>
                          </div>
                        </div>
                      </td>
                      <td>All customers who have made bookings</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">2,456</span>
                          <span class="badge badge-soft-success">Active</span>
                        </div>
                      </td>
                      <td>Dec 15, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" onclick="exportList('all')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export">
                          <i class="bx bx-export fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-success" onclick="openListCampaign('all', 'All Customers')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Campaign">
                          <i class="bx bx-mail-send fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-success-subtle text-success rounded-circle">
                              <i class="bx bx-star"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Recent Customers</h6>
                            <small class="text-muted">Last 30 days</small>
                          </div>
                        </div>
                      </td>
                      <td>Customers who booked in the last 30 days</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">284</span>
                          <span class="badge badge-soft-info">Dynamic</span>
                        </div>
                      </td>
                      <td>Dec 15, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" onclick="exportList('recent')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export">
                          <i class="bx bx-export fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-success" onclick="openListCampaign('recent', 'Recent Customers')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Campaign">
                          <i class="bx bx-mail-send fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-warning-subtle text-warning rounded-circle">
                              <i class="bx bx-group"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Corporate Clients</h6>
                            <small class="text-muted">Business bookings</small>
                          </div>
                        </div>
                      </td>
                      <td>Corporate and business event customers</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">156</span>
                          <span class="badge badge-soft-success">Active</span>
                        </div>
                      </td>
                      <td>Dec 14, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" onclick="exportList('corporate')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export">
                          <i class="bx bx-export fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-success" onclick="openListCampaign('corporate', 'Corporate Clients')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Campaign">
                          <i class="bx bx-mail-send fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-info-subtle text-info rounded-circle">
                              <i class="bx bx-party"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Birthday Parties</h6>
                            <small class="text-muted">Party bookings</small>
                          </div>
                        </div>
                      </td>
                      <td>Customers who booked birthday parties</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">423</span>
                          <span class="badge badge-soft-success">Active</span>
                        </div>
                      </td>
                      <td>Dec 13, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" onclick="exportList('birthday')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export">
                          <i class="bx bx-export fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-success" onclick="openListCampaign('birthday', 'Birthday Parties')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Campaign">
                          <i class="bx bx-mail-send fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                              <i class="bx bx-crown"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">VIP Members</h6>
                            <small class="text-muted">Premium customers</small>
                          </div>
                        </div>
                      </td>
                      <td>High-value customers and members</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">89</span>
                          <span class="badge badge-soft-success">Active</span>
                        </div>
                      </td>
                      <td>Dec 12, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" onclick="exportList('vip')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export">
                          <i class="bx bx-export fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-success" onclick="openListCampaign('vip', 'VIP Members')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Campaign">
                          <i class="bx bx-mail-send fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-secondary-subtle text-secondary rounded-circle">
                              <i class="bx bx-time"></i>
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Inactive Customers</h6>
                            <small class="text-muted">6+ months</small>
                          </div>
                        </div>
                      </td>
                      <td>Customers who haven't booked in 6+ months</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="me-2">672</span>
                          <span class="badge badge-soft-warning">Inactive</span>
                        </div>
                      </td>
                      <td>Dec 10, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" onclick="exportList('inactive')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export">
                          <i class="bx bx-export fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-success" onclick="openListCampaign('inactive', 'Inactive Customers')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Send Campaign">
                          <i class="bx bx-mail-send fs-16"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Subscriber Management -->
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title">Recent Subscribers</h4>
              <div class="d-flex gap-2">
                <div class="search-bar">
                  <span><i class="bx bx-search-alt"></i></span>
                  <input type="search" class="form-control" placeholder="Search subscribers..." />
                </div>
                <button class="btn btn-sm btn-primary" onclick="refreshSubscribers()">
                  <i class="bx bx-refresh"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-centered text-nowrap mb-0" id="recentSubscribersTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="selectAll">
                        </div>
                      </th>
                      <th class="border-0 py-2">Subscriber</th>
                      <th class="border-0 py-2">Lists</th>
                      <th class="border-0 py-2">Joined</th>
                      <th class="border-0 py-2 text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle">
                              JS
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">John Smith</h6>
                            <small class="text-muted">john.smith@email.com</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1">
                          <span class="badge badge-soft-primary">All Customers</span>
                          <span class="badge badge-soft-success">Recent</span>
                        </div>
                      </td>
                      <td>Dec 15, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-primary me-1" onclick="openAddToListModal('john', 'John Smith')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to List">
                          <i class="bx bx-list-plus fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" onclick="unsubscribe('john')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Unsubscribe">
                          <i class="bx bx-user-minus fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-success-subtle text-success rounded-circle">
                              SJ
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Sarah Johnson</h6>
                            <small class="text-muted">sarah.johnson@email.com</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1">
                          <span class="badge badge-soft-primary">All Customers</span>
                          <span class="badge badge-soft-info">Birthday</span>
                        </div>
                      </td>
                      
                      <td>Dec 14, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-primary me-1" onclick="openAddToListModal('sarah', 'Sarah Johnson')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to List">
                          <i class="bx bx-list-plus fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" onclick="unsubscribe('sarah')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Unsubscribe">
                          <i class="bx bx-user-minus fs-16"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="avatar-sm me-2">
                            <div class="avatar-title bg-warning-subtle text-warning rounded-circle">
                              MD
                            </div>
                          </div>
                          <div>
                            <h6 class="mb-0">Mike Davis</h6>
                            <small class="text-muted">mike.davis@company.com</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1">
                          <span class="badge badge-soft-primary">All Customers</span>
                          <span class="badge badge-soft-warning">Corporate</span>
                        </div>
                      </td>
                     
                      <td>Dec 13, 2024</td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-primary me-1" onclick="openAddToListModal('mike', 'Mike Davis')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to List">
                          <i class="bx bx-list-plus fs-16"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-soft-danger" onclick="unsubscribe('mike')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Unsubscribe">
                          <i class="bx bx-user-minus fs-16"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Recent Subscribers Pagination -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top" id="recentSubscribersPagination">
                <div class="col-sm">
                  <div class="text-muted" id="recentSubscribersShowingText"> Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">6</span> Recent Subscribers </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-sm m-0" id="recentSubscribersPaginationContainer">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0">Subscription Analytics</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <span>Open Rate</span>
                  <span>24.5%</span>
                </div>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-primary" style="width: 24.5%"></div>
                </div>
              </div>
              
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <span>Click Rate</span>
                  <span>12.3%</span>
                </div>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-success" style="width: 12.3%"></div>
                </div>
              </div>
              
              <div class="mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <span>Bounce Rate</span>
                  <span>2.1%</span>
                </div>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-warning" style="width: 2.1%"></div>
                </div>
              </div>
              
              <div class="mb-0">
                <div class="d-flex justify-content-between mb-1">
                  <span>Unsubscribe Rate</span>
                  <span>0.8%</span>
                </div>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-danger" style="width: 0.8%"></div>
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

<!-- Create List Modal -->
<div class="modal fade" id="createListModal" tabindex="-1" aria-labelledby="createListModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createListModalLabel">Create New Email List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="listName" class="form-label">List Name</label>
            <input type="text" class="form-control" id="listName" placeholder="Enter list name">
          </div>
          <div class="mb-3">
            <label for="listDescription" class="form-label">Description</label>
            <textarea class="form-control" id="listDescription" rows="3" placeholder="Enter list description"></textarea>
          </div>
          <div class="mb-3">
            <label for="listType" class="form-label">List Type</label>
            <select class="form-select" id="listType">
              <option value="static">Static List</option>
              <option value="dynamic">Dynamic List</option>
            </select>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="enableDoubleOptIn">
            <label class="form-check-label" for="enableDoubleOptIn">
              Enable double opt-in
            </label>
          </div>
          <div class="mb-3">
            <label for="createImportFile" class="form-label">Upload Mailing List</label>
            <input type="file" class="form-control" id="createImportFile" accept=".csv,.xls,.xlsx">
            <small class="text-muted">Upload a CSV, XLS, or XLSX file with email addresses</small>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="createList()">Create List</button>
      </div>
    </div>
  </div>
</div>

<!-- Import Modal -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="importModalLabel">Import Subscribers</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="importFile" class="form-label">CSV, XLS, XLSX</label>
            <input type="file" class="form-control" id="importFile" accept=".csv,.xls,.xlsx">
            <small class="text-muted">Upload a CSV, XLS, or XLSX file with email addresses</small>
          </div>
          <div class="mb-3">
            <label for="targetList" class="form-label">Add to List</label>
            <select class="form-select" id="targetList">
              <option value="all">All Customers</option>
              <option value="recent">Recent Customers</option>
              <option value="corporate">Corporate Clients</option>
              <option value="birthday">Birthday Parties</option>
            </select>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="importSubscribers()">Import</button>
      </div>
    </div>
  </div>
</div>

<?php include 'partials/vendor-scripts.php' ?>

<script>
// Create List Function
function createList() {
  var listName = document.getElementById('listName').value;
  var listDescription = document.getElementById('listDescription').value;
  var listType = document.getElementById('listType').value;
  var doubleOptIn = document.getElementById('enableDoubleOptIn').checked;
  
  if (!listName) {
    alert('Please enter a list name');
    return;
  }
  
  console.log('Creating list:', {
    name: listName,
    description: listDescription,
    type: listType,
    doubleOptIn: doubleOptIn
  });
  
  // Close modal and show success message
  var modal = bootstrap.Modal.getInstance(document.getElementById('createListModal'));
  modal.hide();
  
  alert('Email list created successfully!');
}

// Import Subscribers Function
function importSubscribers() {
  var file = document.getElementById('importFile').files[0];
  var targetList = document.getElementById('targetList').value;
  var skipDuplicates = document.getElementById('skipDuplicates').checked;
  
  if (!file) {
    alert('Please select a CSV file');
    return;
  }
  
  console.log('Importing subscribers:', {
    file: file.name,
    targetList: targetList,
    skipDuplicates: skipDuplicates
  });
  
  // Close modal and show success message
  var modal = bootstrap.Modal.getInstance(document.getElementById('importModal'));
  modal.hide();
  
  alert('Subscribers imported successfully!');
}

// List Management Functions
function viewList(listId) {
  console.log('Viewing list:', listId);
  // In a real app, this would load the list details
}

function editList(listId) {
  console.log('Editing list:', listId);
  // In a real app, this would open an edit modal
}

function exportList(listId) {
  console.log('Exporting list:', listId);
  // In a real app, this would trigger a download
}

function sendCampaign(listId) {
  console.log('Sending campaign to list:', listId);
  // In a real app, this would open the campaign composer
}

// Subscriber Management Functions
function viewSubscriber(subscriberId) {
  console.log('Viewing subscriber:', subscriberId);
}

function editSubscriber(subscriberId) {
  console.log('Editing subscriber:', subscriberId);
}

function addToList(subscriberId) {
  console.log('Adding subscriber to list:', subscriberId);
}

function unsubscribe(subscriberId) {
  if (confirm('Are you sure you want to unsubscribe this user?')) {
    console.log('Unsubscribing:', subscriberId);
    alert('Subscriber has been unsubscribed');
  }
}

// Utility Functions
function refreshSubscribers() {
  console.log('Refreshing subscribers list');
  location.reload();
}

function exportAllLists() {
  console.log('Exporting all lists');
  alert('All lists exported successfully!');
}

// Select All Checkbox
document.getElementById('selectAll').addEventListener('change', function() {
  var checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
  checkboxes.forEach(function(checkbox) {
    checkbox.checked = this.checked;
  }, this);
});

// Campaign Settings Functions
function scheduleCampaign() {
  var selectedTemplate = document.getElementById('campaignTemplate').value;
  var emailList = document.getElementById('campaignEmailList').value;
  var scheduleDate = document.getElementById('campaignScheduleDate').value;
  
  if (!selectedTemplate) {
    alert('Please select a template');
    return;
  }
  
  if (!emailList) {
    alert('Please select an email list');
    return;
  }
  
  if (!scheduleDate) {
    alert('Please select a date and time');
    return;
  }
  
  console.log('Scheduling campaign:', {
    template: selectedTemplate,
    emailList: emailList,
    scheduleDate: scheduleDate
  });
  
  alert('Campaign has been scheduled successfully!');
  
  // Close modal
  var modal = bootstrap.Modal.getInstance(document.getElementById('campaignSettingsModal'));
  modal.hide();
}

function sendCampaignNow() {
  var selectedTemplate = document.getElementById('campaignTemplate').value;
  var emailList = document.getElementById('campaignEmailList').value;
  
  if (!selectedTemplate) {
    alert('Please select a template');
    return;
  }
  
  if (!emailList) {
    alert('Please select an email list');
    return;
  }
  
  if (confirm('Are you sure you want to send this campaign now?')) {
    console.log('Sending campaign now:', {
      template: selectedTemplate,
      emailList: emailList
    });
    
    alert('Campaign has been sent successfully!');
    
    // Close modal
    var modal = bootstrap.Modal.getInstance(document.getElementById('campaignSettingsModal'));
    modal.hide();
  }
}

// Store current list for List Campaign modal
var currentListId = null;
var currentListName = null;

// Function to open List Campaign modal
function openListCampaign(listId, listName) {
  currentListId = listId;
  currentListName = listName;
  
  // Update modal title to show which list
  document.getElementById('listCampaignModalLabel').textContent = 'List Campaign - ' + listName;
  
  // Show the modal
  var modal = new bootstrap.Modal(document.getElementById('listCampaignModal'));
  modal.show();
}

// List Campaign Functions
function scheduleListCampaign() {
  var selectedTemplate = document.getElementById('listCampaignTemplate').value;
  var scheduleDate = document.getElementById('listCampaignScheduleDate').value;
  
  if (!selectedTemplate) {
    alert('Please select a template');
    return;
  }
  
  if (!scheduleDate) {
    alert('Please select a date and time');
    return;
  }
  
  console.log('Scheduling list campaign:', {
    template: selectedTemplate,
    listId: currentListId,
    listName: currentListName,
    scheduleDate: scheduleDate
  });
  
  alert('Campaign has been scheduled successfully for ' + currentListName + '!');
  
  // Close modal
  var modal = bootstrap.Modal.getInstance(document.getElementById('listCampaignModal'));
  modal.hide();
}

function sendListCampaignNow() {
  var selectedTemplate = document.getElementById('listCampaignTemplate').value;
  
  if (!selectedTemplate) {
    alert('Please select a template');
    return;
  }
  
  if (confirm('Are you sure you want to send this campaign to ' + currentListName + ' now?')) {
    console.log('Sending list campaign now:', {
      template: selectedTemplate,
      listId: currentListId,
      listName: currentListName
    });
    
    alert('Campaign has been sent successfully to ' + currentListName + '!');
    
    // Close modal
    var modal = bootstrap.Modal.getInstance(document.getElementById('listCampaignModal'));
    modal.hide();
  }
}

// Initialize Flatpickr for date/time selection
document.addEventListener('DOMContentLoaded', function() {
  if (typeof flatpickr !== 'undefined') {
    flatpickr("#campaignScheduleDate", {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      minDate: "today",
      time_24hr: false
    });
    
    flatpickr("#listCampaignScheduleDate", {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      minDate: "today",
      time_24hr: false
    });
  }
  
  // Load email lists
  loadEmailLists();
});

function openAddToListModal(subscriberId, subscriberName) {
  // Set the subscriber name in the modal
  document.getElementById('selectedSubscriber').value = subscriberName;
  // Store the subscriber ID for later use
  document.getElementById('addToListModal').setAttribute('data-subscriber-id', subscriberId);
  // Reset the dropdown
  document.getElementById('emailListSelect').value = '';
  // Show the modal
  const modal = new bootstrap.Modal(document.getElementById('addToListModal'));
  modal.show();
}

function addSubscriberToList() {
  const subscriberId = document.getElementById('addToListModal').getAttribute('data-subscriber-id');
  const subscriberName = document.getElementById('selectedSubscriber').value;
  const selectedList = document.getElementById('emailListSelect').value;
  const selectedListText = document.getElementById('emailListSelect').options[document.getElementById('emailListSelect').selectedIndex].text;
  
  if (!selectedList) {
    alert('Please select an email list.');
    return;
  }
  
  // In a real app, this would make an API call
  console.log(`Adding ${subscriberName} (${subscriberId}) to list: ${selectedList}`);
  
  // Show success message
  alert(`${subscriberName} has been successfully added to the "${selectedListText}" list.`);
  
  // Close the modal
  const modal = bootstrap.Modal.getInstance(document.getElementById('addToListModal'));
  modal.hide();
}

function loadEmailLists() {
  // In a real app, this would fetch from an API
  const emailLists = [
    { id: 'all', name: 'All Customers (2,847 subscribers)' },
    { id: 'recent', name: 'Recent Customers (1,245 subscribers)' },
    { id: 'corporate', name: 'Corporate Clients (456 subscribers)' },
    { id: 'birthday', name: 'Birthday Parties (892 subscribers)' }
  ];
  
  const select = document.getElementById('campaignEmailList');
  select.innerHTML = '<option value="">Select email list...</option>';
  
  emailLists.forEach(list => {
    const option = document.createElement('option');
    option.value = list.id;
    option.textContent = list.name;
    select.appendChild(option);
  });
}

// Recent Subscribers pagination functionality
document.addEventListener('DOMContentLoaded', function() {
    const rowsPerPage = 10;
    const recentSubscribersTable = document.querySelector('#recentSubscribersTable tbody');
    
    // Check if table exists, if not, select by the table in the recent subscribers section
    const allTables = document.querySelectorAll('.table tbody');
    const subscribersTable = allTables[1]; // Second table is recent subscribers
    
    if (!subscribersTable) return; // Exit if table not found
    
    const tableRows = subscribersTable.querySelectorAll('tr');
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
        updateSubscribersDisplay(page);
        updateSubscribersPagination(page);
    }

    function updateSubscribersDisplay(page) {
        const startItem = totalRows > 0 ? ((page - 1) * rowsPerPage) + 1 : 0;
        const endItem = Math.min(page * rowsPerPage, totalRows);
        const recentSubscribersShowingText = document.getElementById('recentSubscribersShowingText');
        if (recentSubscribersShowingText) {
            recentSubscribersShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Recent Subscribers`;
        }
    }

    function updateSubscribersPagination(page) {
        const paginationContainer = document.getElementById('recentSubscribersPaginationContainer');
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

<!-- Campaign Settings Modal -->
<div class="modal fade" id="campaignSettingsModal" tabindex="-1" role="dialog" aria-labelledby="campaignSettingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="campaignSettingsModalLabel">Campaign Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="campaignTemplate" class="form-label">Choose Template</label>
              <select class="form-control" id="campaignTemplate">
                <option value="">Select template...</option>
                <option value="special-offers">Special Offers Template</option>
                <option value="holiday-promo">Holiday Promotion</option>
                <option value="birthday-special">Birthday Special</option>
                <option value="corporate-team">Corporate Team Building</option>
                <option value="summer-special">Summer Special</option>
              </select>
              <small class="text-muted">Select the email template to use for this campaign</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="campaignEmailList" class="form-label">Choose recipients</label>
              <select class="form-control" id="campaignEmailList">
                <option value="">Loading email lists...</option>
              </select>
              <small class="text-muted">Select which email list to send to</small>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="campaignScheduleDate" class="form-label">Select date and time</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                <input type="text" class="form-control" id="campaignScheduleDate" placeholder="Choose date and time" style="cursor: pointer;">
              </div>
              <small class="text-muted">Choose when to send this campaign</small>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <div class="mb-3">
              <button type="button" class="btn btn-primary" onclick="scheduleCampaign()">
                <i class="bx bx-calendar-plus me-1"></i> Schedule for Selected Date
              </button>
            </div>
          </div>
        </div>
        
        <div class="border-top pt-3">
          <div class="row">
            <div class="col-md-6">
              <p class="text-muted mb-3">Or send campaign now</p>
              <button type="button" class="btn btn-success" onclick="sendCampaignNow()">
                <i class="bx bx-send me-2"></i> Send Now
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- List Campaign Modal -->
<div class="modal fade" id="listCampaignModal" tabindex="-1" role="dialog" aria-labelledby="listCampaignModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="listCampaignModalLabel">List Campaign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label for="listCampaignTemplate" class="form-label">Choose Template</label>
              <select class="form-control" id="listCampaignTemplate">
                <option value="">Select template...</option>
                <option value="special-offers">Special Offers Template</option>
                <option value="holiday-promo">Holiday Promotion</option>
                <option value="birthday-special">Birthday Special</option>
                <option value="corporate-team">Corporate Team Building</option>
                <option value="summer-special">Summer Special</option>
              </select>
              <small class="text-muted">Select the email template to use for this campaign</small>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="listCampaignScheduleDate" class="form-label">Select date and time</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                <input type="text" class="form-control" id="listCampaignScheduleDate" placeholder="Choose date and time" style="cursor: pointer;">
              </div>
              <small class="text-muted">Choose when to send this campaign</small>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <div class="mb-3">
              <button type="button" class="btn btn-primary" onclick="scheduleListCampaign()">
                <i class="bx bx-calendar-plus me-1"></i> Schedule for Selected Date
              </button>
            </div>
          </div>
        </div>
        
        <div class="border-top pt-3">
          <div class="row">
            <div class="col-md-6">
              <p class="text-muted mb-3">Or send campaign now</p>
              <button type="button" class="btn btn-success" onclick="sendListCampaignNow()">
                <i class="bx bx-send me-2"></i> Send Now
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Add to List Modal -->
<div class="modal fade" id="addToListModal" tabindex="-1" aria-labelledby="addToListModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addToListModalLabel">Add Subscriber to List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="selectedSubscriber" class="form-label">Subscriber</label>
            <input type="text" class="form-control" id="selectedSubscriber" readonly>
          </div>
          <div class="mb-3">
            <label for="emailListSelect" class="form-label">Select Email List</label>
            <select class="form-select" id="emailListSelect">
              <option value="">Choose a list...</option>
              <option value="all">All Customers</option>
              <option value="recent">Recent Customers</option>
              <option value="corporate">Corporate Clients</option>
              <option value="birthday">Birthday Parties</option>
              <option value="vip">VIP Members</option>
              <option value="inactive">Inactive Customers</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="addSubscriberToList()">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- Flatpickr JS -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

</body>
</html> 