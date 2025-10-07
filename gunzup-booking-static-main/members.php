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
          <h4>Members</h4>
          <div class="card">
            <div class="card-body">
              <div class="row">
                
                <div class="search-drop-bar">
                  <select class="form-control" id="members-search-dropdown" name="choices-single-no-sorting">
                    <option value="">All Members</option>
                    <option value="">Sean Kemper</option>
                    <option value="">Sophia Davis</option>
                    <option value="">Dave Mathews</option>
                    <option value="">Emma Johnson</option>
                    <option value="">Liam Martinez</option>
                    <option value="">Victoria Sullivan</option>
                    <option value="">Olivia Thompson</option>
                    <option value="">Noah Garcia</option>
                    <option value="">Isabella Lopez</option>
                    <option value="">Ava Wilson</option>
                    <option value="">Oliver Lee</option>
                    <option value="">James Anderson</option>
                    <option value="">Charlotte Brown</option>
                    <option value="">Michael Taylor</option>
                    <option value="">Emily Miller</option>
                    <option value="">Daniel Wilson</option>
                    <option value="">Sarah Davis</option>
                    <option value="">David Johnson</option>
                    <option value="">Jessica Martinez</option>
                  </select>
                </div>
                <div class="col-md-5">
                  <div class="row">                    
                    <div class="col-md-3 form-check form-check-inline">
                      <label class="form-check-label">Filter Results:</label>
                    </div>
                    <div class="col-md-4 form-check form-check-inline form-checkbox-warning">
                      <input type="checkbox" class="form-check-input" id="">
                      <label class="form-check-label" for="bookingsPaid">Include Expired</label>
                    </div>                    
                  </div>
                </div>
                
              </div>
              <!-- end row --> 
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-card">
                <table class="table text-nowrap mb-0" id="membersTable">
                  <thead class="bg-light bg-opacity-50">
                    <tr>                      
                      <th class="border-0 py-2"> Attendee <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Age <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Waiver <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Expires On: <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Total Check-ins <i class='bx bx-expand-vertical'></i> </th>
                      <th class="border-0 py-2"> Actions </th>
                    </tr>
                  </thead>
                  <!-- end thead-->
                  <tbody>
                    <tr>
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="{Member's Name}'s Contact" data-bs-content="Contact Email | Contact Phone" >Sean Kemper</span>
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#notesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span>
                            </h5>
                          </div>
                        </div></td>
                      <td>24</td>
                      <td>2025</td>
                      <td>02/24/2026 <i class="bx  bx-credit-card-alt" style="color:#22c55e;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Auto Renew On"/></td>
                        <td>17
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Manual Check-in">
                            <i class="bx bx-check-square" style="color:#22c55e; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#checkInModal" data-member-name="Sean Kemper"></i>
                          </span>
                        </td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMemberModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bx bx-trash fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr>                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="{Member's Name}'s Contact" data-bs-content="Contact Email | Contact Phone" >Sophia Davis </span>
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#notesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span>
                            </h5>
                          </div>
                        </div></td>
                      <td>18</td>
                      <td>2024</td>
                      <td>09/10/2026 <i class="bx  bx-credit-card-alt" style="color:#22c55e;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Auto Renew On"/></td>
                        <td>3
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Manual Check-in">
                            <i class="bx bx-check-square" style="color:#22c55e; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#checkInModal" data-member-name="Sophia Davis"></i>
                          </span>
                        </td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMemberModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bx bx-trash fs-16"></i>
                          </button>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      
                      <td><div class="d-flex align-items-center"> 
                          <!--<img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2" />-->
                          <div>
                            <h5 class="fs-14 mt-1 fw-normal"> <span  data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top"  data-bs-custom-class="primary-popover" title="{Member's Name}'s Contact" data-bs-content="Contact Email | Contact Phone" >Dave Mathews</span>
                              <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="primary-tooltip" data-bs-title="Notes">
                                <i data-bs-toggle="modal" data-bs-target="#notesModal" style="color:#22c55e;" class='bx bx-note'></i>
                              </span>
                            </h5>
                          </div>
                        </div></td>
                      <td>34</td>
                      <td>2025</td>
                      <td>012/31/2025 </td>
                        <td>5
                          <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Manual Check-in">
                            <i class="bx bx-check-square" style="color:#22c55e; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#checkInModal" data-member-name="Dave Mathews"></i>
                          </span>
                        </td>
                      <td>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                          <button type="button" class="btn btn-sm btn-soft-secondary me-1" data-bs-toggle="modal" data-bs-target="#editMemberModal">
                            <i class="bx bx-edit fs-16"></i>
                          </button>
                        </span>
                        <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                          <button type="button" class="btn btn-sm btn-soft-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bx bx-trash fs-16"></i>
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
            </div>
            <!-- end card body -->
            <div class="align-items-center justify-content-between row g-0 text-center text-sm-start border-top p-3" id="membersPagination">
              <div class="col-sm">
                <div class="text-muted" id="membersShowingText"> Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">52</span> Members </div>
              </div>
              <div class="col-sm-auto mt-3 mt-sm-0">
                <ul class="pagination pagination-sm m-0" id="membersPaginationContainer">
                  <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-left-arrow-alt"></i></a> </li>
                  <li class="page-item active"> <a href="#" class="page-link">1</a> </li>
                  <li class="page-item"> <a href="#" class="page-link">2</a> </li>
                  <li class="page-item"> <a href="#" class="page-link">3</a> </li>
                  <li class="page-item"> <a href="#" class="page-link"><i class="bx bx-right-arrow-alt"></i></a> </li>
                </ul>
              </div>
              <div class="col-sm" style="text-align: right;"> <a data-bs-toggle="modal" data-bs-target="#addMemberModal" href="#" class="btn btn-success"> <i class="bx bx-plus me-1"></i>Add Member</a> </div>
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

<script>
// Members pagination functionality
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Members search dropdown with same style as Bookings/Waivers
    const membersDropdown = document.getElementById('members-search-dropdown');
    
    if (membersDropdown) {
        new Choices(membersDropdown, {
            searchEnabled: true,
            searchPlaceholderValue: 'Search Name or Phone',
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
    
    // Pagination functionality for Members
    const rowsPerPage = 10;
    const membersTable = document.querySelector('#membersTable tbody');
    const tableRows = membersTable ? membersTable.querySelectorAll('tr') : [];
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
        const membersShowingText = document.getElementById('membersShowingText');
        if (membersShowingText) {
            membersShowingText.innerHTML = `Showing <span class="fw-semibold">${endItem - startItem + 1}</span> of <span class="fw-semibold">${totalRows}</span> Members`;
        }
    }

    function updatePaginationButtons(page) {
        const paginationContainer = document.getElementById('membersPaginationContainer');
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


<!-- Add Member Modal -->
<div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title h4" id="Label">Add Member</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">  
        
        
        <div class="row g-3">
          <div class="col-md-4 offset-md-1 mb-3">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Member's First Name}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" value="{Member's Last Name}" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="example-email" class="form-label">Email</label>
            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
            <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span> </div>
        </div>
        
        <!-- Credit Card Details Section -->
        <div class="row mb-3">
          <div class="col-md-10 offset-md-1">
            <h5 class="mb-3">Billing Details</h5>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="cardholderFirstName" class="form-label">First Name on Card</label>
            <input type="text" class="form-control" id="cardholderFirstName" placeholder="First name" required>
          </div>
          <div class="col-md-4">
            <label for="cardholderLastName" class="form-label">Last Name on Card</label>
            <input type="text" class="form-control" id="cardholderLastName" placeholder="Last name" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" required>
          </div>
          <div class="col-md-2">
            <label for="expiryDate" class="form-label">Expiry Date</label>
            <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" data-toggle="input-mask" data-mask-format="00/00" required>
          </div>
          <div class="col-md-2">
            <label for="cvvCode" class="form-label">CVV</label>
            <input type="text" class="form-control" id="cvvCode" placeholder="123" data-toggle="input-mask" data-mask-format="000" required>
          </div>
        </div>
        
        <!-- Billing Address Section -->
        <div class="row mb-3">
          <div class="col-md-10 offset-md-1">
            <h5 class="mb-3">Billing Address</h5>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-8 offset-md-1">
            <label for="billingAddress" class="form-label">Street Address</label>
            <input type="text" class="form-control" id="billingAddress" placeholder="123 Main Street" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-3 offset-md-1">
            <label for="billingCity" class="form-label">City</label>
            <input type="text" class="form-control" id="billingCity" placeholder="City" required>
          </div>
          <div class="col-md-2">
            <label for="billingState" class="form-label">State</label>
            <input type="text" class="form-control" id="billingState" placeholder="ST" required>
          </div>
          <div class="col-md-3">
            <label for="billingZip" class="form-label">ZIP Code</label>
            <input type="text" class="form-control" id="billingZip" placeholder="12345" data-toggle="input-mask" data-mask-format="00000" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="billingCountry" class="form-label">Country</label>
            <select class="form-select" id="billingCountry" required>
              <option value="">Select Country</option>
              <option value="US" selected>United States</option>
              <option value="CA">Canada</option>
              <option value="MX">Mexico</option>
              <option value="GB">United Kingdom</option>
              <option value="AU">Australia</option>
              <option value="DE">Germany</option>
              <option value="FR">France</option>
              <option value="IT">Italy</option>
              <option value="ES">Spain</option>
              <option value="JP">Japan</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>
        
        <div class="row g-3 mb-3">
          <div class="col-md-8 offset-md-1">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="addMemberAutoRenewCheck" checked>
              <label class="form-check-label" for="addMemberAutoRenewCheck">Auto Renew</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1" style="margin-top: 20px">
            <label class="form-label">Summary</label>
            <div class="table-responsive table-borderless text-nowrap mt-3 table-centered" style="overflow: visible;">
              <table class="table mb-0">
                <thead class="bg-light bg-opacity-50">
                  <tr>
                    <th class="border-0 py-2"> Membership Package </th>
                    <th class="border-0 py-2"> Date </th>
                    <th class="border-0 py-2"> Price </th>
           
                  </tr>
                </thead>
                <!-- end thead -->
                <tbody>
                  <tr>
                    <td>
                      <select class="form-control" name="package-select" data-choices data-choices-search-false data-choices-removeItem>
                        <option value="1-month">1 Month Membership</option>
                        <option value="3-month" selected>3 Month Membership</option>
                        <option value="6-month">6 Month Membership</option>
                        <option value="12-month">12 Month Membership</option>
                        <option value="team">Team Membership</option>
                      </select>
                    </td>
                    <td>06/14/2025</td>
                    
                    <td class="text-end">$226.65</td>
                  </tr>
                 
                </tbody>
                <!-- end tbody -->
              </table>
              <!-- end table --> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 offset-md-1">              
                
            </div>
          <div class="col-sm-5">
            <div class="float-end">
              <p> <span class="fw-medium">Total:</span> <span class="float-end">$226.65</span> </p>
              <p>
                <label for="validationDefault01" class="form-label">Discount Code</label>
                  <input type="text" class="form-control" id="validationDefault01" value="Discount Code" required>
                <span class="fw-medium float-end">Discount (10%):</span> </p>
              <h3>$226.65</h3>
            </div>
            <div class="clearfix"></div>
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
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print"> <i class='bx bx-printer fs-16'></i></button>
        <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Member Modal -->
<div class="modal fade" id="editMemberModal" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title h4" id="Label">{Member's Name} Membership Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">  
        
        
        <div class="row g-3">
          <div class="col-md-4 offset-md-1 mb-3">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationDefault01" value="{Member's First Name}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationDefault02" value="{Member's Last Name}" required>
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-4 offset-md-1">
            <label for="example-email" class="form-label">Email</label>
            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000">
            <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span> </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-8 offset-md-1">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="autoRenewCheck" checked>
              <label class="form-check-label" for="autoRenewCheck">Auto Renew - Renews on 12/31/2026</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 offset-md-1" style="margin-top: 20px">
            <label class="form-label">Summary</label>
            <div class="table-responsive table-borderless text-nowrap mt-3 table-centered" style="overflow: visible;">
              <table class="table mb-0">
                <thead class="bg-light bg-opacity-50">
                  <tr>
                    <th class="border-0 py-2"> Membership Package </th>
                    <th class="border-0 py-2"> Date </th>
                    <th class="border-0 py-2"> Price </th>
           
                  </tr>
                </thead>
                <!-- end thead -->
                <tbody>
                  <tr>
                    <td>
                      <select class="form-control" name="package-select" data-choices data-choices-search-false data-choices-removeItem>
                        <option value="1-month">1 Month Membership</option>
                        <option value="3-month" selected>3 Month Membership</option>
                        <option value="6-month">6 Month Membership</option>
                        <option value="12-month">12 Month Membership</option>
                        <option value="team">Team Membership</option>
                      </select>
                    </td>
                    <td>06/14/2025</td>
                    
                    <td class="text-end">$226.65</td>
                  </tr>
                 
                </tbody>
                <!-- end tbody -->
              </table>
              <!-- end table --> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 offset-md-1">              
                <label for="validationDefault01" class="form-label mt-3">Total check-ins to date:</label> 
              <h3>17</h3>
            </div>
          <div class="col-sm-5">
            <div class="float-end">
              <p> <span class="fw-medium">Total:</span> <span class="float-end">$226.65</span> </p>
              <p>
                <label for="validationDefault01" class="form-label">Discount Code</label>
                  <input type="text" class="form-control" id="validationDefault01" value="Discount Code" required>
                <span class="fw-medium">Discount (10%):</span> <span class="float-end"> &nbsp;&nbsp;&nbsp;
                  <span class="fw-medium">Card Ending in (2344) Charged:</span> <span class="float-end"></span> </p>
              <h3>$226.65</h3>
            </div>
            <div class="clearfix"></div>
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
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Resend Booking Confirmation Email">Resend Confirmation</button>  
        <button type="button" class="btn  btn-soft-secondary" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="Print"> <i class='bx bx-printer fs-16'></i></button>
        <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>