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
          <h4>Booking Calendar</h4>
          <div class="card">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-xl-3">
                  <div class="d-grid">
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#registerBookingModal"><i class="bx bx-plus fs-18 me-2"></i>Register a Booking </button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#quickBookingModal"><i class="bx bx-zap fs-18 me-2"></i>Quick Book </button>
                  </div>
                  <div id="external-events"> <br />
                    <p class="text-muted"> Drag and drop packages to available days</p>
                    <div class="external-event bg-soft-primary text-primary" data-class="bg-primary"> <i class="bx bxs-circle me-2 vertical-middle"></i>Paintball Package 1 <i class='bx bx-edit'></i></div>
                    <div class="external-event bg-soft-info text-info" data-class="bg-info"> <i class="bx bxs-circle me-2 vertical-middle"></i>Nerf Under 12<i class='bx bx-edit'></i></div>
                    <div class="external-event bg-soft-success text-success" data-class="bg-success"> <i class="bx bxs-circle me-2 vertical-middle"></i>Low Impact Paintball <i class='bx bx-edit'></i></div>
                    <div class="external-event bg-soft-danger text-danger" data-class="bg-danger"> <i class="bx bxs-circle me-2 vertical-middle"></i>Paintball Package 2  <i class='bx bx-edit'></i></div>
                    <div class="external-event bg-soft-warning text-warning" data-class="bg-warning"> <i class="bx bxs-circle me-2 vertical-middle"></i>Bow Tag  <i class='bx bx-edit'></i></div>
                  </div> 
                </div>
                <!-- end col-->
                
                <div class="col-xl-9">
                  <div class="mt-4 mt-lg-0">
                    <div id="calendar"></div>
                  </div>
                </div>
                <!-- end col --> 
              </div>
              <!-- end row --> 
                
              <div class="row" style="text-align: right;">
                <div class="col-md-12">
                    <!--<div class="form-check form-check-inline form-checkbox-success">
                    <input type="checkbox" class="form-check-input" id="" checked>
                    <label class="form-check-label" for="bookingsPaid">Paid</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-warning">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="bookingsUnpaid">Unpaid</label>
                  </div>-->
                  <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="bookingsCanceled">Duplicate this Month Forever</label>
                  </div>
                    <button type="button" class="btn btn-sm btn-primary me-1">Save</button>
                    
                  </div>
                
                </div>      
                
                
                
            </div>
            <!-- end card body--> 
          </div>
          <!-- end card --> 
          
          
          <!-- end modal--> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- End Container --> 
    <!-- Start Container -->
    <div class="container-xxl">
      <div class="row">
        <div class="col">
          <h4>Bookings</h4>
          <div class="card overflow-hidden">
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between gap-3">
                <div class="search-drop-bar">
                  <select class="form-control" id="bookings-search-dropdown" name="choices-single-no-sorting">
                    <option value="">All</option>
                    <option value="">Group Name</option>
                    <option value="">Group Name</option>
                    <option value="">Group Name</option>
                  </select>
                </div>
                <div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">Filter Results:</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-success">
                    <input type="checkbox" class="form-check-input" id="" checked>
                    <label class="form-check-label" for="bookingsPaid">Paid</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-warning">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="bookingsUnpaid">Unpaid</label>
                  </div>
                  <div class="form-check form-check-inline form-checkbox-danger">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="bookingsCanceled">Canceled</label>
                  </div>
                </div>
                <div>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                    <input type="text" class="form-control" id="bookingsDateRange" placeholder="Show date range" style="cursor: pointer;">
                  </div>
                </div>
              </div>
              <!-- end row --> 
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-card">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2 menu-arrow"> Group ID <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Customer <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Event Date <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Booked On <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Total <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Package <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Waivers Signed"  class='bx bx-pencil'></i> / <i data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Attendees"  class='bx bxs-group'></i> <!-- Waiver/Attendees--><i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2 text-end"> Edit/Print </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking">
                          <a data-bs-toggle="modal" data-bs-target="#bookingModal" class="fw-medium">Group Name</a>
                        </span>
                      </td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="{Booker's Name}'s Contact" data-bs-content="Booker Email      Booker Phone">Sean Kemper</span> 
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span> 
                            </h5>
                          </div>
                        </div></td>
                      <td> 4/30/24 <small>05:00 PM</small></td>
                      <td>4/23/24 <small>02:21 PM</small></td>
                      <td>$852.25</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">6 /10</a> <a href="#"><span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check Out" class="badge badge-soft-success check-in-btn">Checked In</span></a></td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking">
                          <a data-bs-toggle="modal" data-bs-target="#bookingModal" class="fw-medium">Group Name</a>
                        </span>
                      </td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Victoria
                              Sullivan </h5>
                          </div>
                        </div></td>
                      <td> 14 May, 2024 <small>10:51 AM</small></td>
                      <td>25 Aug, 2024</td>
                      <td>$953.00</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">6/10</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end">
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking">
                          <a data-bs-toggle="modal" data-bs-target="#bookingModal" class="fw-medium">Group Name</a>
                        </span>
                      </td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Liam Martinez 
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span> 
                            </h5>
                          </div>
                        </div></td>
                      <td> 12 April, 2024 <small>12:09 PM</small></td>
                      <td>28 April, 2024</td>
                      <td>$99.00</td>
                      <td>{Package Title} </td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">5/5</a> <a href="#"><span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check Out" class="badge badge-soft-success check-in-btn">Checked In</span></a></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Emma Johnson </h5>
                          </div>
                        </div></td>
                      <td> 10 April, 2024 <small>10:09 PM</small></td>
                      <td>15 April, 2024</td>
                      <td>$1250.00</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">6/10</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Olivia
                              Thompson <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes" style="color:#22c55e;" class='bx bx-note'></i> </h5>
                          </div>
                        </div></td>
                      <td> 22 May, 2024 <small>03:41 PM</small></td>
                      <td>05 July, 2024</td>
                      <td>$500.00</td>
                      <td>{Package Title}</td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">8/9</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Noah Garcia </h5>
                          </div>
                        </div></td>
                      <td> 18 May, 2024 <small>09:09 AM</small></td>
                      <td>30 May, 2024</td>
                      <td>$250.00</td>
                      <td>{Package Title}</td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">4/11</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Sophia Davis <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes" style="color:#22c55e;" class='bx bx-note'></i> </h5>
                          </div>
                        </div></td>
                      <td> 05 April, 2024 <small>08:50 AM</small></td>
                      <td>22 April, 2024</td>
                      <td>$29.00</td>
                      <td>{Package Title}</td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">6/10</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Isabella
                              Lopez </h5>
                          </div>
                        </div></td>
                      <td> 15 Jun, 2024 <small>11:09 PM</small></td>
                      <td>01 Aug, 2024</td>
                      <td>$24.99</td>
                      <td>{Package Title}</td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">3/4</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Ava Wilson </h5>
                          </div>
                        </div></td>
                      <td> 22 April, 2024 <small>05:09 PM</small></td>
                      <td>30 April, 2024</td>
                      <td>$1000.00</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">8/9</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Oliver Lee <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes" style="color:#22c55e;" class='bx bx-note'></i> </h5>
                          </div>
                        </div></td>
                      <td> 23 April, 2024 <small>12:09 PM</small></td>
                      <td>30 April, 2024</td>
                      <td>$1999.00</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">3/12</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button>                        
                        </td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> James Anderson </h5>
                          </div>
                        </div></td>
                      <td> 15 May, 2024 <small>02:30 PM</small></td>
                      <td>22 May, 2024</td>
                      <td>$675.00</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">7/8</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Charlotte Brown 
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span> 
                            </h5>
                          </div>
                        </div></td>
                      <td> 08 June, 2024 <small>11:15 AM</small></td>
                      <td>12 June, 2024</td>
                      <td>$450.00</td>
                      <td>{Package Title}</td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">4/6</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Michael Taylor </h5>
                          </div>
                        </div></td>
                      <td> 20 June, 2024 <small>04:45 PM</small></td>
                      <td>25 June, 2024</td>
                      <td>$325.00</td>
                      <td>{Package Title}</td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">9/10</a> <a href="#"><span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check Out" class="badge badge-soft-success check-in-btn">Checked In</span></a></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Emily Miller 
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span> 
                            </h5>
                          </div>
                        </div></td>
                      <td> 02 July, 2024 <small>01:20 PM</small></td>
                      <td>08 July, 2024</td>
                      <td>$875.50</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">12/15</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Daniel Wilson </h5>
                          </div>
                        </div></td>
                      <td> 14 July, 2024 <small>10:30 AM</small></td>
                      <td>18 July, 2024</td>
                      <td>$175.00</td>
                      <td>{Package Title}</td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">3/4</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Sarah Davis </h5>
                          </div>
                        </div></td>
                      <td> 28 July, 2024 <small>03:15 PM</small></td>
                      <td>02 August, 2024</td>
                      <td>$1250.75</td>
                      <td>{Package Title} <i data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="Add-ons" data-bs-content="{List of Addons Associated with this Booking}" style="color:#22c55e;" class='bx bx-cart-add'></i></td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">8/10</a> <a href="#"><span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check Out" class="badge badge-soft-success check-in-btn">Checked In</span></a></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> David Johnson 
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#bookingNotesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span> 
                            </h5>
                          </div>
                        </div></td>
                      <td> 10 August, 2024 <small>09:45 AM</small></td>
                      <td>15 August, 2024</td>
                      <td>$595.25</td>
                      <td>{Package Title}</td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Send abandoned cart reminder" href="#"><span class="badge badge-soft-warning">Unpaid</span></a></td>
                      <td><a href="#waivers">6/8</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                    <tr>
                      <td><a data-bs-toggle="modal" data-bs-target="#bookingModal"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="View/Edit Booking"  class="fw-medium">Group Name</a></td>
                      <td><div class="d-flex align-items-center">
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> Jessica Martinez </h5>
                          </div>
                        </div></td>
                      <td> 25 August, 2024 <small>02:00 PM</small></td>
                      <td>30 August, 2024</td>
                      <td>$425.00</td>
                      <td>{Package Title}</td>
                      <td><span class="badge badge-soft-success">Paid</span></td>
                      <td><a href="#waivers">5/7</a> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#bookingModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="bx bx-edit fs-16"></i> </button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
            </div>
            <!-- end card body -->
            <div class="align-items-center justify-content-between row g-0 text-center text-sm-start border-top p-3" id="bookingsPagination">
              <div class="col-sm">
                <div class="text-muted" id="bookingsShowingText"> Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">18</span> Bookings </div>
              </div>
              <div class="col-sm-auto mt-3 mt-sm-0">
                <ul class="pagination pagination-sm m-0" id="bookingsPaginationContainer">
                  <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                  <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                  <li class="page-item"> <a href="#" class="page-link">2</a> </li>
                  <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                  <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                </ul>
              </div>
              <div class="col-sm" style="text-align: right;"> <a data-bs-toggle="modal" data-bs-target="#registerBookingModal" href="#" class="btn btn-success"> <i class="bx bx-plus me-1"></i>Register a Booking </a> </div>
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
          <h4>Waivers</h4>
          <a name="waivers" id="waivers"></a>
          <div class="card overflow-hidden">
            <div class="card-body">
              <div class="d-flex flex-wrap justify-content-between gap-3">
               
                <div class="search-drop-bar">
                  <select class="form-control" id="waivers-search-dropdown" name="choices-single-no-sorting">
                    <option value="">All</option>
                    <option value="">Group Name</option>
                    <option value="">Group Name</option>
                    <option value="">Group Name</option>
                  </select>
                </div>                
                <div>
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
                </div>
                <div>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                    <input type="text" class="form-control" id="waiversDateRange" placeholder="Show date range" style="cursor: pointer;">
                  </div>
                </div>
              </div>
              <!-- end row --> 
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-card">
                <table class="table text-nowrap mb-0">
                  <thead class="bg-light bg-opacity-50">
                    <tr>
                      <th class="border-0 py-2 menu-arrow"><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></th>
                      <th class="border-0 py-2"> Group <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Attendee <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Age <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Status <i class='bx bx-expand-vertical'></i> </th>
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
                      <td>24</td>
                      <td><a href="#"><span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check Out" class="badge badge-soft-success check-in-btn">Checked In</span></a></td>
                      <td class="text-end">
                        <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#userWaiverModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View / Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button>
                        </td>
                    </tr>
                    <tr>
                      <td><div class="form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1">
                        </div></td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Assign to a Group">
                          <span class="badge badge-soft-warning" data-bs-toggle="modal" data-bs-target="#groupAssignModal">Assign to a Group</span>
                        </span>
                      </td>
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Booker Email | Booker Phone" >Sophia Davis </span></h5>
                          </div>
                        </div></td>
                      <td>18</td>
                      <td><span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Click to Check In"><span class="badge badge-soft-warning check-in-btn" style="cursor: pointer;">Check in</span></span></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#userWaiverModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View / Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button></td>
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
                      <td>34</td>
                      <td><a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="success-tooltip" data-bs-title="Check in group members" href="#"><span class="badge badge-soft-success check-in-btn">Checked In</span></a></td>
                      <td class="text-end"><button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#userWaiverModal" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View / Edit">
                        <i class="bx bx-edit fs-16"></i>
                        </button></td>
                    </tr>
                  </tbody>
                  <!-- end tbody -->
                </table>
                <!-- end table --> 
              </div>
              <!-- table responsive -->
            </div>
            <!-- end card body -->
            <div class="align-items-center justify-content-between row g-0 text-center text-sm-start border-top p-3" id="waiversPagination">
              <div class="col-sm">
                <div class="text-muted" id="waiversShowingText"> Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">52</span> Signed Waivers </div>
              </div>
              <div class="col-sm-auto mt-3 mt-sm-0">
                <ul class="pagination pagination-sm m-0" id="waiversPaginationContainer">
                  <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                  <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                  <li class="page-item"> <a href="#" class="page-link">2</a> </li>
                  <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                  <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                </ul>
              </div>
              <div class="col-sm" style="text-align: right;">
                <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Assign Selected to Group">
                  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#groupAssignModal"><i class='bx bxs-group'></i></a>
                </span>
                <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Check In Selected">
                  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkInModal"><i class='bx bx-check-square'></i></a>
                </span>
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
      <!-- end row -->
      
        </div>
    <!-- End Container -->

<!-- Quick Booking Modal -->
<div class="modal fade" id="quickBookingModal" tabindex="-1" aria-labelledby="quickBookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="quickBookingModalLabel">Quick Book - Today</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="row">
            <p>This takes items out of inventory for onsite booking.</p>
            <div class="col-12">
              <div class="mb-3">
                <label for="quickBookPackage" class="form-label">Select Package</label>
                <select class="form-control" id="quickBookPackage" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem required>
                  <option value="">Choose a package...</option>
                  <option value="paintball-package-1">Paintball Package 1</option>
                  <option value="nerf-under-12">Nerf Under 12</option>
                  <option value="low-impact-paintball">Low Impact Paintball</option>
                  <option value="paintball-package-2">Paintball Package 2</option>
                  <option value="bow-tag">Bow Tag</option>
                </select>
                <div class="invalid-feedback">
                  Please select a package.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label class="form-label">Booking Time</label>
                <div class="d-flex align-items-center gap-2">
                  <div class="col" style="z-index: 100;">
                    <select class="form-control" id="quickBookStartTime" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem required>
                      <option value="">Start Time</option>
                      <option value="12:00am">12:00 AM</option>
                      <option value="12:30am">12:30 AM</option>
                      <option value="1:00am">1:00 AM</option>
                      <option value="1:30am">1:30 AM</option>
                      <option value="2:00am">2:00 AM</option>
                      <option value="2:30am">2:30 AM</option>
                      <option value="3:00am">3:00 AM</option>
                      <option value="3:30am">3:30 AM</option>
                      <option value="4:00am">4:00 AM</option>
                      <option value="4:30am">4:30 AM</option>
                      <option value="5:00am">5:00 AM</option>
                      <option value="5:30am">5:30 AM</option>
                      <option value="6:00am">6:00 AM</option>
                      <option value="6:30am">6:30 AM</option>
                      <option value="7:00am">7:00 AM</option>
                      <option value="7:30am">7:30 AM</option>
                      <option value="8:00am" selected>8:00 AM</option>
                      <option value="8:30am">8:30 AM</option>
                      <option value="9:00am">9:00 AM</option>
                      <option value="9:30am">9:30 AM</option>
                      <option value="10:00am">10:00 AM</option>
                      <option value="10:30am">10:30 AM</option>
                      <option value="11:00am">11:00 AM</option>
                      <option value="11:30am">11:30 AM</option>
                      <option value="12:00pm">12:00 PM</option>
                      <option value="12:30pm">12:30 PM</option>
                      <option value="1:00pm">1:00 PM</option>
                      <option value="1:30pm">1:30 PM</option>
                      <option value="2:00pm">2:00 PM</option>
                      <option value="2:30pm">2:30 PM</option>
                      <option value="3:00pm">3:00 PM</option>
                      <option value="3:30pm">3:30 PM</option>
                      <option value="4:00pm">4:00 PM</option>
                      <option value="4:30pm">4:30 PM</option>
                      <option value="5:00pm">5:00 PM</option>
                      <option value="5:30pm">5:30 PM</option>
                      <option value="6:00pm">6:00 PM</option>
                      <option value="6:30pm">6:30 PM</option>
                      <option value="7:00pm">7:00 PM</option>
                      <option value="7:30pm">7:30 PM</option>
                      <option value="8:00pm">8:00 PM</option>
                      <option value="8:30pm">8:30 PM</option>
                      <option value="9:00pm">9:00 PM</option>
                      <option value="9:30pm">9:30 PM</option>
                      <option value="10:00pm">10:00 PM</option>
                      <option value="10:30pm">10:30 PM</option>
                      <option value="11:00pm">11:00 PM</option>
                      <option value="11:30pm">11:30 PM</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a start time.
                    </div>
                  </div>
                  <span class="text-muted fw-medium">to</span>
                  <div class="col" style="z-index: 100;">
                    <select class="form-control" id="quickBookEndTime" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem required>
                      <option value="">End Time</option>
                      <option value="12:00am">12:00 AM</option>
                      <option value="12:30am">12:30 AM</option>
                      <option value="1:00am">1:00 AM</option>
                      <option value="1:30am">1:30 AM</option>
                      <option value="2:00am">2:00 AM</option>
                      <option value="2:30am">2:30 AM</option>
                      <option value="3:00am">3:00 AM</option>
                      <option value="3:30am">3:30 AM</option>
                      <option value="4:00am">4:00 AM</option>
                      <option value="4:30am">4:30 AM</option>
                      <option value="5:00am">5:00 AM</option>
                      <option value="5:30am">5:30 AM</option>
                      <option value="6:00am">6:00 AM</option>
                      <option value="6:30am">6:30 AM</option>
                      <option value="7:00am">7:00 AM</option>
                      <option value="7:30am">7:30 AM</option>
                      <option value="8:00am">8:00 AM</option>
                      <option value="8:30am">8:30 AM</option>
                      <option value="9:00am">9:00 AM</option>
                      <option value="9:30am">9:30 AM</option>
                      <option value="10:00am">10:00 AM</option>
                      <option value="10:30am">10:30 AM</option>
                      <option value="11:00am">11:00 AM</option>
                      <option value="11:30am">11:30 AM</option>
                      <option value="12:00pm">12:00 PM</option>
                      <option value="12:30pm">12:30 PM</option>
                      <option value="1:00pm">1:00 PM</option>
                      <option value="1:30pm">1:30 PM</option>
                      <option value="2:00pm">2:00 PM</option>
                      <option value="2:30pm">2:30 PM</option>
                      <option value="3:00pm">3:00 PM</option>
                      <option value="3:30pm">3:30 PM</option>
                      <option value="4:00pm">4:00 PM</option>
                      <option value="4:30pm">4:30 PM</option>
                      <option value="5:00pm">5:00 PM</option>
                      <option value="5:30pm">5:30 PM</option>
                      <option value="6:00pm" selected>6:00 PM</option>
                      <option value="6:30pm">6:30 PM</option>
                      <option value="7:00pm">7:00 PM</option>
                      <option value="7:30pm">7:30 PM</option>
                      <option value="8:00pm">8:00 PM</option>
                      <option value="8:30pm">8:30 PM</option>
                      <option value="9:00pm">9:00 PM</option>
                      <option value="9:30pm">9:30 PM</option>
                      <option value="10:00pm">10:00 PM</option>
                      <option value="10:30pm">10:30 PM</option>
                      <option value="11:00pm">11:00 PM</option>
                      <option value="11:30pm">11:30 PM</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select an end time.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="alert alert-info" role="alert">
                <i class="bx bx-info-circle me-2"></i>
                <strong>Today's Date:</strong> <span id="todaysDate"></span>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="quickBookBtn">Book</button>
      </div>
    </div>
  </div>
</div>

<script>
// Quick Booking Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    // Set today's date when modal opens
    const quickBookingModal = document.getElementById('quickBookingModal');
    const todaysDateSpan = document.getElementById('todaysDate');
    const quickBookBtn = document.getElementById('quickBookBtn');
    
    if (quickBookingModal) {
        quickBookingModal.addEventListener('shown.bs.modal', function() {
            // Display today's date
            const today = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            };
            todaysDateSpan.textContent = today.toLocaleDateString('en-US', options);
        });
    }
    
    // Handle quick booking submission
    if (quickBookBtn) {
        quickBookBtn.addEventListener('click', function() {
            const form = quickBookingModal.querySelector('form');
            const packageSelect = document.getElementById('quickBookPackage');
            const startTimeSelect = document.getElementById('quickBookStartTime');
            const endTimeSelect = document.getElementById('quickBookEndTime');
            
            // Validate form
            if (form.checkValidity()) {
                const selectedPackage = packageSelect.value;
                const startTime = startTimeSelect.value;
                const endTime = endTimeSelect.value;
                
                // Here you would normally send the data to your backend
                // For now, we'll just show a success message
                alert(`Quick booking created!\nPackage: ${packageSelect.options[packageSelect.selectedIndex].text}\nTime: ${startTime} to ${endTime}\nDate: ${todaysDateSpan.textContent}`);
                
                // Close the modal
                const modal = bootstrap.Modal.getInstance(quickBookingModal);
                modal.hide();
                
                // Reset form
                form.reset();
                form.classList.remove('was-validated');
            } else {
                // Show validation errors
                form.classList.add('was-validated');
            }
        });
    }
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
<!-- Flatpickr -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
<script>
// Bubble theme and Snow theme editors are initialized in assets/js/components/form-quilljs.js

// Initialize Date Range Pickers
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bookings Date Range Picker
    const bookingsDateRange = document.getElementById('bookingsDateRange');
    if (bookingsDateRange) {
        flatpickr(bookingsDateRange, {
            mode: "range",
            dateFormat: "m/d/Y",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length === 2) {
                    console.log('Bookings date range selected:', dateStr);
                    // Here you would typically filter the bookings table based on the selected date range
                    // You can add your filtering logic here
                }
            }
        });
    }

    // Initialize Waivers Date Range Picker
    const waiversDateRange = document.getElementById('waiversDateRange');
    if (waiversDateRange) {
        flatpickr(waiversDateRange, {
            mode: "range",
            dateFormat: "m/d/Y",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length === 2) {
                    console.log('Waivers date range selected:', dateStr);
                    // Here you would typically filter the waivers table based on the selected date range
                    // You can add your filtering logic here
                }
            }
        });
    }
});

// Initialize Choices.js with search placeholder
document.addEventListener('DOMContentLoaded', function() {
    const bookingsDropdown = document.getElementById('bookings-search-dropdown');
    const waiversDropdown = document.getElementById('waivers-search-dropdown');
    
    if (bookingsDropdown) {
        new Choices(bookingsDropdown, {
            searchEnabled: true,
            searchPlaceholderValue: 'Search Name or Group',
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
    
    if (waiversDropdown) {
        new Choices(waiversDropdown, {
            searchEnabled: true,
            searchPlaceholderValue: 'Search Name or Group',
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

// Bookings table pagination functionality
document.addEventListener('DOMContentLoaded', function() {
    const bookingsTable = document.querySelector('.table');
    const bookingsTableBody = bookingsTable.querySelector('tbody');
    const allBookingRows = Array.from(bookingsTableBody.querySelectorAll('tr'));
    const itemsPerPage = 10;
    const totalItems = allBookingRows.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    let currentPage = 1;

    // Get pagination elements
    const paginationContainer = document.getElementById('bookingsPaginationContainer');
    const showingText = document.getElementById('bookingsShowingText');
    
    // Generate dynamic pagination buttons
    function generatePagination() {
        paginationContainer.innerHTML = '';
        
        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = 'page-item';
        prevLi.innerHTML = '<a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>';
        paginationContainer.appendChild(prevLi);
        
        // Page number buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = 'page-item';
            if (i === 1) pageLi.classList.add('active');
            pageLi.innerHTML = `<a href="#" class="page-link">${i}</a>`;
            paginationContainer.appendChild(pageLi);
        }
        
        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = 'page-item';
        nextLi.innerHTML = '<a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>';
        paginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        paginationContainer.className = 'pagination pagination-sm m-0';
    }
    
    function showPage(page) {
        // Hide all rows first
        allBookingRows.forEach(row => {
            row.style.display = 'none';
        });
        
        // Calculate which rows to show
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, totalItems);
        
        // Show rows for current page
        for (let i = startIndex; i < endIndex; i++) {
            if (allBookingRows[i]) {
                allBookingRows[i].style.display = '';
            }
        }
        
        // Update showing text
        const itemsShown = endIndex - startIndex;
        showingText.innerHTML = `Showing <span class="fw-semibold">${itemsShown}</span> of <span class="fw-semibold">${totalItems}</span> Bookings`;
        
        // Update pagination active state
        updatePaginationState(page);
        
        currentPage = page;
    }
    
    function updatePaginationState(activePage) {
        const pageItems = paginationContainer.querySelectorAll('.page-item');
        
        pageItems.forEach((item, index) => {
            item.classList.remove('active');
            
            // Skip first (previous arrow) and last (next arrow) items
            if (index > 0 && index < pageItems.length - 1) {
                const pageNum = parseInt(item.querySelector('.page-link').textContent);
                if (pageNum === activePage) {
                    item.classList.add('active');
                }
            }
        });
        
        // Enable/disable navigation arrows
        const prevButton = pageItems[0];
        const nextButton = pageItems[pageItems.length - 1];
        
        if (activePage === 1) {
            prevButton.classList.add('disabled');
        } else {
            prevButton.classList.remove('disabled');
        }
        
        if (activePage === totalPages) {
            nextButton.classList.add('disabled');
        } else {
            nextButton.classList.remove('disabled');
        }
    }
    
    // Add click handlers to pagination links
    paginationContainer.addEventListener('click', function(e) {
        e.preventDefault();
        
        const clickedLink = e.target.closest('.page-link');
        if (!clickedLink) return;
        
        const parentItem = clickedLink.closest('.page-item');
        if (parentItem.classList.contains('disabled')) return;
        
        const linkContent = clickedLink.innerHTML.trim();
        
        if (linkContent.includes('bx-left-arrow-alt')) {
            // Previous button
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
        } else if (linkContent.includes('bx-right-arrow-alt')) {
            // Next button
            if (currentPage < totalPages) {
                showPage(currentPage + 1);
            }
        } else {
            // Page number button
            const pageNum = parseInt(linkContent);
            if (pageNum && pageNum !== currentPage) {
                showPage(pageNum);
            }
        }
    });
    
    // Initialize pagination and first page
    generatePagination();
    showPage(1);
});

// Waivers table pagination functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get all tables and identify the waivers table (second table)
    const allTables = document.querySelectorAll('.table');
    const waiversTable = allTables[1]; // Second table is waivers
    
    if (!waiversTable) return; // Exit if waivers table not found
    
    const waiversTableBody = waiversTable.querySelector('tbody');
    const allWaiverRows = Array.from(waiversTableBody.querySelectorAll('tr'));
    const itemsPerPage = 10;
    const totalWaiverItems = allWaiverRows.length;
    const totalWaiverPages = Math.ceil(totalWaiverItems / itemsPerPage);
    let currentWaiverPage = 1;

    // Get waivers pagination elements using the IDs we added
    const waiversPaginationContainer = document.getElementById('waiversPaginationContainer');
    const waiversShowingTextElement = document.getElementById('waiversShowingText');
    
    // Generate dynamic pagination buttons for waivers
    function generateWaiversPagination() {
        if (!waiversPaginationContainer) return;
        
        waiversPaginationContainer.innerHTML = '';
        
        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = 'page-item';
        prevLi.innerHTML = '<a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a>';
        waiversPaginationContainer.appendChild(prevLi);
        
        // Page number buttons
        for (let i = 1; i <= totalWaiverPages; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = 'page-item';
            if (i === 1) pageLi.classList.add('active');
            pageLi.innerHTML = `<a href="#" class="page-link">${i}</a>`;
            waiversPaginationContainer.appendChild(pageLi);
        }
        
        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = 'page-item';
        nextLi.innerHTML = '<a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a>';
        waiversPaginationContainer.appendChild(nextLi);
        
        // Ensure the container has the correct classes
        waiversPaginationContainer.className = 'pagination pagination-sm m-0';
    }
    
    function showWaiverPage(page) {
        // Hide all waiver rows first
        allWaiverRows.forEach(row => {
            row.style.display = 'none';
        });
        
        // Calculate which rows to show
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, totalWaiverItems);
        
        // Show rows for current page
        for (let i = startIndex; i < endIndex; i++) {
            if (allWaiverRows[i]) {
                allWaiverRows[i].style.display = '';
            }
        }
        
        // Update showing text
        if (waiversShowingTextElement) {
            const itemsShown = endIndex - startIndex;
            waiversShowingTextElement.innerHTML = `Showing <span class="fw-semibold">${itemsShown}</span> of <span class="fw-semibold">${totalWaiverItems}</span> Signed Waivers`;
        }
        
        // Update pagination active state
        updateWaiverPaginationState(page);
        
        currentWaiverPage = page;
    }
    
    function updateWaiverPaginationState(activePage) {
        if (!waiversPaginationContainer) return;
        
        const pageItems = waiversPaginationContainer.querySelectorAll('.page-item');
        
        pageItems.forEach((item, index) => {
            item.classList.remove('active');
            
            // Skip first (previous arrow) and last (next arrow) items
            if (index > 0 && index < pageItems.length - 1) {
                const pageNum = parseInt(item.querySelector('.page-link').textContent);
                if (pageNum === activePage) {
                    item.classList.add('active');
                }
            }
        });
        
        // Enable/disable navigation arrows
        const prevButton = pageItems[0];
        const nextButton = pageItems[pageItems.length - 1];
        
        if (activePage === 1) {
            prevButton.classList.add('disabled');
        } else {
            prevButton.classList.remove('disabled');
        }
        
        if (activePage === totalWaiverPages) {
            nextButton.classList.add('disabled');
        } else {
            nextButton.classList.remove('disabled');
        }
    }
    
    // Add click handlers to waivers pagination links
    if (waiversPaginationContainer) {
        waiversPaginationContainer.addEventListener('click', function(e) {
            e.preventDefault();
            
            const clickedLink = e.target.closest('.page-link');
            if (!clickedLink) return;
            
            const parentItem = clickedLink.closest('.page-item');
            if (parentItem.classList.contains('disabled')) return;
            
            const linkContent = clickedLink.innerHTML.trim();
            
            if (linkContent.includes('bx-left-arrow-alt')) {
                // Previous button
                if (currentWaiverPage > 1) {
                    showWaiverPage(currentWaiverPage - 1);
                }
            } else if (linkContent.includes('bx-right-arrow-alt')) {
                // Next button
                if (currentWaiverPage < totalWaiverPages) {
                    showWaiverPage(currentWaiverPage + 1);
                }
            } else {
                // Page number button
                const pageNum = parseInt(linkContent);
                if (pageNum && pageNum !== currentWaiverPage) {
                    showWaiverPage(pageNum);
                }
            }
        });
    }
    
    // Initialize waivers pagination and first page
    generateWaiversPagination();
    showWaiverPage(1);
});

// Check-in toggle functionality with modal integration
document.addEventListener('DOMContentLoaded', function() {
    const checkInButtons = document.querySelectorAll('.check-in-btn');
    
    checkInButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Check current state and toggle
            if (this.innerHTML.trim() === 'Check in') {
                // Change to "Checked In" state
                this.className = 'badge badge-soft-success check-in-btn';
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
                
                // Trigger the check-in modal
                const checkInModal = new bootstrap.Modal(document.getElementById('checkInModal'));
                checkInModal.show();
                
                console.log('Check in clicked - toggled to Checked In and opened modal');
            } else {
                // Change back to "Check in" state
                this.className = 'badge badge-soft-warning check-in-btn';
                this.innerHTML = 'Check in';
                this.setAttribute('data-bs-toggle', 'tooltip');
                this.setAttribute('data-bs-placement', 'top');
                this.setAttribute('data-bs-custom-class', 'primary-tooltip');
                this.setAttribute('data-bs-title', 'Click to Check In');
                
                // Dispose of existing tooltip and create new one
                if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
                    const existingTooltip = bootstrap.Tooltip.getInstance(this);
                    if (existingTooltip) {
                        existingTooltip.dispose();
                    }
                    new bootstrap.Tooltip(this);
                }
                
                console.log('Checked In clicked - toggled back to Check in (no modal)');
            }
        });
    });
});
    </script> 
<!-- Page Js --> 
<script src="assets/js/pages/app-calendar.js"></script>
</body>
</html>