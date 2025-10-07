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
          <h4>Groups</h4>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2"><a name="waivers" id="waivers"></a>
                  <select style="width:80%;" class="form-control" id="booked-package" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
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
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2 menu-arrow"><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></th>
                      <th class="border-0 py-2"> Group <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Captain <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Members <i class='bx bx-expand-vertical'></i> </th>                      
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                        <th class="border-0 py-2"> Date <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2 text-end"> Edit/Print </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      <td><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></td>
                      <td>Group Name</td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sean Kemper</span></h5>
                          </div>
                        </div></td>
                      <td>7</td>
                      <td>4/23/00</td>
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button><button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print List"> <i class='bx bx-printer fs-16'></i></button></td>
                    </tr>
                    <tr>
                      <td><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></td>
                      <td><span class="badge badge-soft-warning" data-bs-toggle="modal" data-bs-target="#groupAssignModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Assign to a Group">Assign to a Group</span></td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sophia Davis </span></h5>
                          </div>
                        </div></td>
                      <td>11</td>
                      <td>4/23/00</td>
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button><button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print List"> <i class='bx bx-printer fs-16'></i></button></td>
                    </tr>
                    <tr>
                      <td><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></td>
                      <td>Group Name</td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Dave Mathews</span></h5>
                          </div>
                        </div></td>
                      <td>5</td>
                      <td>4/23/00</td>
                      <td><div class="form-switch"><input class="form-check-input form-switch" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Enable / Disable" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked></div></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editBookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button><button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print List"> <i class='bx bx-printer fs-16'></i></button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
              <div class="align-items-center justify-content-between row g-0 text-center text-sm-start p-3 border-top">
                <div class="col-sm">
                  <div class="text-muted"> Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">52</span> Signed Waivers </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                  <ul class="pagination pagination-rounded m-0">
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                    <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                    <li class="page-item"> <a href="#" class="page-link">2</a> </li>
                    <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                    <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                  </ul>
                </div>
                <div class="col-sm" style="text-align: right;"><a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#groupAssignModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Assign Selected to Group" > <i class='bx bxs-group'></i></a> <a href="#" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Check In Selected" > <i class='bx bx-check-square'></i> </a> </div>
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
    
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>