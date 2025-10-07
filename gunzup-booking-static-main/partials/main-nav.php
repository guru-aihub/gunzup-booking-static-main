<div class="main-nav"> 
  <!-- Sidebar Logo -->
  <div class="logo-box"> <a href="index.php" class="logo-dark"><img src="assets/images/logo-light.png" class="logo-lg" alt="logo dark"/></a> <a href="index.php" class="logo-light"><img src="assets/images/logo-dark.png" class="logo-lg" alt="logo light"/></a> </div>
  <!-- Menu Toggle Button (sm-hover) -->
  <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
  <iconify-icon icon="iconamoon:arrow-left-4-square-duotone" class="button-sm-hover-icon"></iconify-icon>
  </button>
  <div class="scrollbar" data-simplebar>
    <ul class="navbar-nav" id="navbar-nav">
      <!-- <li class="menu-title">General</li>-->
      <li class="nav-item"> <a class="nav-link" href="index.php"> <span class="nav-icon">
        <iconify-icon icon="iconamoon:calendar-1-duotone"></iconify-icon>
        </span> <span class="nav-text"> Dashboard </span> </a> </li>
     
      <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarPackages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPackages" > 
          <span class="nav-icon"><i class='bx bx-purchase-tag' ></i></span> <span class="nav-text"> Packages </span> 
          </a>
        <div class="collapse" id="sidebarPackages">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="packages.php">Packages</a> </li>            
            <li class="sub-nav-item"> <a class="sub-nav-link" href="package-addons.php">Add-ons</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="events.php"> <span class="nav-icon">
        <i class='bx bx-calendar-event'></i>
        </span> <span class="nav-text"> Events </span> </a> </li>
      <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarMembership" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMembership" > 
              <span class="nav-icon"><i class="bx bxs-group"></i></span> 
            <span class="nav-text"> Memberships </span> 
          </a>
        <div class="collapse" id="sidebarMembership">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="membership-packages.php">Membership Packages</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="group-discounts.php">Group Discounts</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="members.php">Members</a> </li>
            
            
          </ul>
        </div>
      </li>
        <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarPromo" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMembership" > 
              <span class="nav-icon"><iconify-icon icon="iconamoon:ticket-duotone"></iconify-icon></span> 
            <span class="nav-text"> Promo </span> 
          </a>
        <div class="collapse" id="sidebarPromo">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="promo-codes.php">Discount Codes</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="gift-certificates.php">Gift Certificates</a> </li>
          
            
          </ul>
        </div>
      </li>
      
      <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarWaivers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarWaivers"> 
          <span class="nav-icon"><i class='bx bx-select-multiple'></i></span> 
        <span class="nav-text"> Waivers </span> 
          </a>
        <div class="collapse" id="sidebarWaivers">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="/#waivers">Signed Waivers</a> </li>
            <li class="sub-nav-item"> <a data-bs-toggle="modal" data-bs-target="#editWaiverModal" class="sub-nav-link">Edit Waiver</a> </li>
            <li class="sub-nav-item"> <a data-bs-toggle="modal" data-bs-target="#liveWaiverModal" class="sub-nav-link"href="#">Live Waiver</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="examplewaiver.php">Example Waiver</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarEmails" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmails"> 
          <span class="nav-icon"><iconify-icon icon="iconamoon:email-duotone"></iconify-icon></span> 
          <span class="nav-text"> Emails </span> 
          </a>
        <div class="collapse" id="sidebarEmails">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="email-templates.php">Templates</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="email-manage-lists.php">Email Lists</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarReports" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarReports"> 
          <span class="nav-icon"><i class='bx bx-line-chart' ></i></span> 
          <span class="nav-text"> Reports </span> 
          </a>
        <div class="collapse" id="sidebarReports">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="reports-daily.php">Daily</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="reports-checkins.php">Check Ins</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="reports-registrations.php">Bookings</a> </li>
          </ul>
        </div>
      </li>
      <li class="nav-item"> 
          <a class="nav-link disabled" href="javascript:void(0);"> <span class="nav-icon">
        <iconify-icon icon="iconamoon:unavailable-duotone"></iconify-icon></span> 
              <span class="nav-text">POS (Coming Soon)</span> 
          </a> 
        </li>
      <li class="nav-item"> 
          <a class="nav-link menu-arrow" href="#sidebarSettings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSettings"> 
          <span class="nav-icon">
          <iconify-icon icon="iconamoon:settings-duotone" class="fs-24 align-middle"></iconify-icon></span> 
          <span class="nav-text"> Settings </span> 
          </a>
        <div class="collapse" id="sidebarSettings">
          <ul class="nav sub-navbar-nav">
            <li class="sub-nav-item"> <a class="sub-nav-link" href="settings.php">General</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="users.php">Staff</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="payment.php">Payment</a> </li>
            <li class="sub-nav-item"> <a class="sub-nav-link" href="embedding.php">Embedding</a> </li>            
          </ul>
        </div>
      </li>
        <!--<li class="menu-title">Apps</li>--> 
      <!--<li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                    <span class="nav-icon"><iconify-icon icon="iconamoon:invoice-duotone"></iconify-icon></span>
                    <span class="nav-text"> Invoices </span>
                </a>
                <div class="collapse" id="sidebarInvoice">
                    <ul class="nav sub-navbar-nav"><li class="sub-nav-item"><a class="sub-nav-link" href="">Invoices</a></li>
                        <li class="sub-nav-item"><aclass="sub-nav-link" href="">Invoice Details</a></li>
                    </ul>
                </div>
            </li>-->
      <!-- end Form Menu -->
    </ul>
  </div>
</div>
