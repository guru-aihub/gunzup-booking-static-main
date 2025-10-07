<?php include 'partials/main.php' ?>

<head>
    <?php $title = "Book Your Experience";
    include 'partials/title-meta.php' ?>

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

                <?php
                $subTitle = "Booking";
                $pageTitle = "Book Your Experience";
                include 'partials/page-title.php' ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title anchor" id="basic-wizard">
                                    Book Your Experience<a class="anchor-link" href="#horizontal-wizard">#</a>
                                </h5>
                            </div>
                            <!-- end card-header -->
                            <div class="card-body">
                                <div class="mb-5">
                                    <form>
                                        <div id="horizontalwizard">
                                            <ul class="nav nav-pills nav-justified icon-wizard form-wizard-header bg-light p-1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2 active" aria-selected="true" role="tab">
                                                        <i class="bx bx-calendar fs-26"></i>
                                                        Booking Details </a><!-- end nav-link -->
                                                </li>
                                                <!-- end nav-item -->
                                                <li class="nav-item" role="presentation">
                                                    <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" role="tab" tabindex="-1">
                                                        <iconify-icon icon="iconamoon:shopping-bag-duotone" class="fs-26"></iconify-icon>
                                                        Add-ons & Notes </a><!-- end nav-link -->
                                                </li>
                                                <!-- end nav-item -->
                                                <li class="nav-item" role="presentation">
                                                    <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                                        <iconify-icon icon="iconamoon:profile-duotone" class="fs-26"></iconify-icon>
                                                        Customer Info </a><!-- end nav-link -->
                                                </li>
                                                <!-- end nav-item -->
                                                <li class="nav-item" role="presentation">
                                                    <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                                        <iconify-icon icon="iconamoon:credit-card-duotone" class="fs-26"></iconify-icon>
                                                        Payment </a><!-- end nav-link -->
                                                </li>
                                                <!-- end nav-item -->
                                                <li class="nav-item" role="presentation">
                                                    <a href="#basictab5" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 py-2" aria-selected="false" tabindex="-1" role="tab">
                                                        <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-26"></iconify-icon>
                                                        Review & Receipt </a><!-- end nav-link -->
                                                </li>
                                                <!-- end nav-item -->
                                            </ul>

                                            <div class="tab-content mb-0">
                                                <!-- Step 1: Booking Details -->
                                                <div class="tab-pane active show" id="basictab1" role="tabpanel">
                                                    <h4 class="fs-16 fw-semibold mb-1">
                                                        Booking Details
                                                    </h4>
                                                    <p class="text-muted">
                                                        Select your package, group size, and preferred date & time
                                                    </p>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="groupId" class="form-label">Group Name/ID *</label>
                                                                <input id="groupId" type="text" class="form-control" placeholder="Enter Group Name" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Group Name" data-bs-content="Please specify a name for your group ie: Johnny's Birthday" />
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Please specify the total number of guests in your group. Self equipped guests will not be calculated as requiring a package.">
                                                                <label for="totalGuests" class="form-label">Total Guests *</label>
                                                                <input id="totalGuests" type="number" class="form-control" placeholder="Enter number of attendees" min="1" max="999" />
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-4">
                                                            <div class="mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Attention!" data-bs-content="Self equipped guests are assumed to have all gear, including required safety gear to participate.">
                                                                <label for="selfEquippedGuests" class="form-label">Self Equipped Guests</label>
                                                                <input id="selfEquippedGuests" type="number" class="form-control" placeholder="0" min="0" max="999" />
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="bookedPackage" class="form-label">Package / Game Type *</label>
                                                                <select class="form-control" id="bookedPackage" data-choices data-choices-search-false data-choices-removeItem>
                                                                    <option value="">Select Package</option>
                                                                    <option value="paintball1">Paintball Package 1</option>
                                                                    <option value="paintball2">Paintball Package 2</option>
                                                                    <option value="lowimpact">Low Impact Paintball</option>
                                                                    <option value="bowtag">Bow Tag</option>
                                                                    <option value="nerf">Nerf Under 12</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->

                                                    <!-- Package Display Section -->
                                                    <div class="row mt-4" id="package-display-section" style="display: none;">
                                                        <div class="col-12">
                                                            <h5 class="mb-3">Selected Package</h5>
                                                            
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-md-3 text-center mb-3 mb-md-0">
                                                                            <img src="assets/images/placeholder-img.png" alt="Package Image" class="img-fluid rounded" id="package-featured-image" style="max-height: 150px; width: auto;">
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <h4 class="mb-2" id="package-title">Package Title</h4>
                                                                            <p class="text-muted mb-0" id="package-description">Package description will appear here when you select a package above.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end package display row -->

                                                    <!-- Calendar Section -->
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                            <h5 class="mb-3">Select Your Date</h5>
                                                            
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div id="booking-calendar"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end calendar row -->

                                                    <!-- Time Slots Section -->
                                                    <div class="row mt-4" id="time-slots-section" style="display: none;">
                                                        <div class="col-12">
                                                            <h5 class="mb-3">Select Your Time Slot</h5>
                                                            <p class="text-muted mb-3" id="selected-date-display">Please select a date above to view available time slots</p>
                                                            
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="row" id="time-slots-container">
                                                                        <!-- Time slot buttons -->
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="8:00 AM" onclick="selectTimeSlot(this)">8:00 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="8:30 AM" onclick="selectTimeSlot(this)">8:30 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="9:00 AM" onclick="selectTimeSlot(this)">9:00 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="9:30 AM" onclick="selectTimeSlot(this)">9:30 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="10:00 AM" onclick="selectTimeSlot(this)">10:00 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="10:30 AM" onclick="selectTimeSlot(this)">10:30 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="11:00 AM" onclick="selectTimeSlot(this)">11:00 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="11:30 AM" onclick="selectTimeSlot(this)">11:30 AM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="12:00 PM" onclick="selectTimeSlot(this)">12:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="12:30 PM" onclick="selectTimeSlot(this)">12:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="1:00 PM" onclick="selectTimeSlot(this)">1:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="1:30 PM" onclick="selectTimeSlot(this)">1:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="2:00 PM" onclick="selectTimeSlot(this)">2:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="2:30 PM" onclick="selectTimeSlot(this)">2:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="3:00 PM" onclick="selectTimeSlot(this)">3:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="3:30 PM" onclick="selectTimeSlot(this)">3:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="4:00 PM" onclick="selectTimeSlot(this)">4:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="4:30 PM" onclick="selectTimeSlot(this)">4:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="5:00 PM" onclick="selectTimeSlot(this)">5:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="5:30 PM" onclick="selectTimeSlot(this)">5:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="6:00 PM" onclick="selectTimeSlot(this)">6:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="6:30 PM" onclick="selectTimeSlot(this)">6:30 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="7:00 PM" onclick="selectTimeSlot(this)">7:00 PM</button>
                                                                        </div>
                                                                        <div class="col-2 mb-3">
                                                                            <button type="button" class="time-slot w-100" data-time="7:30 PM" onclick="selectTimeSlot(this)">7:30 PM</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end time slots row -->
                                                </div>
                                                <!-- end tab-pane -->

                                                <!-- Step 2: Add-ons & Notes -->
                                                <div class="tab-pane" id="basictab2" role="tabpanel">
                                                    <h4 class="fs-16 fw-semibold mb-1">
                                                        Add-ons & Notes
                                                    </h4>
                                                    <p class="text-muted">
                                                        Select additional equipment and add any special notes
                                                    </p>

                                                    <div id="available-addons-container">
                                                        <div class="row g-3 mb-3 available-addon-row">
                                                            <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
                                                                <label for="payment-status" class="form-label">Assign Available Add-ons</label>
                                                                <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                                                                    <option value="">None</option>
                                                                    <option value="">Grenade + $12.00</option>
                                                                    <option value="">Upgraded Gun package+ $100.00</option>
                                                                    <option value="">Add-ons selected available for chosen package</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1 d-flex align-items-end align-items-center">
                                                                <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRow(this)" title="Remove this add-on"></i>
                                                                <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRow()" title="Add another add-on"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                            <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="bookingNotes" class="form-label">Booking Notes</label>
                                                            <textarea class="form-control" id="bookingNotes" rows="4" placeholder="Any special requests or notes for your booking..."></textarea>
                                                                    </div>
                                                                </div>

                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="discountCode" class="form-label">Discount Code (Optional)</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="discountCode" placeholder="Enter discount code">
                                                                <button class="btn btn-outline-secondary" type="button" id="applyDiscount">Apply</button>
                                                                    </div>
                                                                </div>
                                                                    </div>
                                                </div>
                                                <!-- end tab-pane -->

                                                <!-- Step 3: Customer Information -->
                                                <div class="tab-pane" id="basictab3" role="tabpanel">
                                                    <h4 class="fs-16 fw-semibold mb-1">
                                                        Customer Information
                                                    </h4>
                                                    <p class="text-muted">
                                                        Enter your contact details for the booking
                                                    </p>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="firstName" class="form-label">First Name *</label>
                                                                <input id="firstName" type="text" class="form-control" placeholder="Enter First Name" required />
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="lastName" class="form-label">Last Name *</label>
                                                                <input id="lastName" type="text" class="form-control" placeholder="Enter Last Name" required />
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="customerEmail" class="form-label">Email *</label>
                                                                <input id="customerEmail" type="email" class="form-control" placeholder="Enter Email Address" required />
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="customerPhone" class="form-label">Phone</label>
                                                                <input id="customerPhone" type="text" class="form-control" data-toggle="input-mask" data-mask-format="(000) 000-0000" placeholder="(xxx) xxx-xxxx" />
                                                                <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                        <div class="col-12">
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="checkbox" id="mailingListCheckbox" name="mailingListCheckbox" checked data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Marketing Mailing List" data-bs-content="This will add you to any marketing mailing lists.">
                                                                <label class="form-check-label" for="mailingListCheckbox">
                                                                    Sign me up for the mailing list
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- end col -->
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                                <!-- end tab-pane -->

                                                                                                <!-- Step 4: Payment Information -->
                                                <div class="tab-pane" id="basictab4" role="tabpanel">
                                                    <h4 class="fs-16 fw-semibold mb-1">
                                                        Payment Information
                                                    </h4>
                                                    <p class="text-muted">
                                                        Choose your payment method and complete the transaction
                                                    </p>

                                                    <!-- Payment Method Selection -->
                                                    <div class="row mb-4" id="payment-method-selection">
                                                        <div class="col-12">
                                                            <div class="d-flex flex-column align-items-center gap-3">
                                                                <button type="button" class="btn btn-primary btn-lg w-50" id="credit-card-btn">
                                                                    <i class="bx bx-credit-card me-2"></i>Pay with Credit Card
                                                                </button>
                                                                <button type="button" class="btn btn-outline-primary btn-lg w-50" id="paypal-btn">
                                                                    <i class="bx bxl-paypal me-2"></i>Pay with PayPal
                                                                </button>
                                                    </div>
                                                        </div>
                                </div>

                                                    <!-- Credit Card Form (initially hidden) -->
                                                    <div id="credit-card-form" style="display: none;">
                                                        <div class="row mb-3">
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <button type="button" class="btn btn-link p-0 me-2" id="back-to-payment-methods">
                                                                        <i class="bx bx-arrow-back"></i>
                                        </button>
                                                                    <h5 class="mb-0">Credit Card Information</h5>
                                    </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                        <div class="col-12">
                                                                <div class="mb-3">
                                                                <label for="cardholderName" class="form-label">Cardholder Name *</label>
                                                                <input id="cardholderName" type="text" class="form-control" placeholder="Enter Cardholder Name" required />
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                        <div class="col-12">
                                                                <div class="mb-3">
                                                                <label for="cardNumber" class="form-label">Card Number *</label>
                                                                <input id="cardNumber" type="text" class="form-control" placeholder="1234 5678 9012 3456" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" required />
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="expiryDate" class="form-label">Expiry Date *</label>
                                                                <input id="expiryDate" type="text" class="form-control" placeholder="MM/YY" data-toggle="input-mask" data-mask-format="00/00" required />
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                <label for="cvvCode" class="form-label">CVV *</label>
                                                                <input id="cvvCode" type="text" class="form-control" placeholder="123" data-toggle="input-mask" data-mask-format="000" required />
                                                                </div>
                                                            </div>
                                                            <!-- end col -->
                                                        </div>

                                                    <!-- Billing Address -->
                                                    <h5 class="mb-3 mt-4">Billing Address</h5>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                        <div class="mb-3">
                                                                <label for="billingAddress" class="form-label">Street Address *</label>
                                                                <input id="billingAddress" type="text" class="form-control" placeholder="Enter Street Address" required />
                                                                        </div>
                                                                    </div>
                                                                    <!-- end col -->
                                                        <div class="col-lg-6">
                                                                        <div class="mb-3">
                                                                <label for="billingCity" class="form-label">City *</label>
                                                                <input id="billingCity" type="text" class="form-control" placeholder="Enter City" required />
                                                                        </div>
                                                                    </div>
                                                                    <!-- end col -->
                                                        <div class="col-lg-3">
                                                                        <div class="mb-3">
                                                                <label for="billingState" class="form-label">State *</label>
                                                                <select class="form-control" id="billingState" data-choices data-choices-search-false required>
                                                                    <option value="">Select State</option>
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="CA">California</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end col -->
                                                        <div class="col-lg-3">
                                                                        <div class="mb-3">
                                                                <label for="billingZip" class="form-label">ZIP Code *</label>
                                                                <input id="billingZip" type="text" class="form-control" placeholder="12345" data-toggle="input-mask" data-mask-format="00000" required />
                                                                        </div>
                                                                    </div>
                                                                    <!-- end col -->
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                    <!-- end credit card form -->

                                                    <!-- PayPal Section (initially hidden) -->
                                                    <div id="paypal-section" style="display: none;">
                                                        <div class="row mb-3">
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <button type="button" class="btn btn-link p-0 me-2" id="back-to-payment-methods-paypal">
                                                                        <i class="bx bx-arrow-back"></i>
                                                                    </button>
                                                                    <h5 class="mb-0">PayPal Payment</h5>
                                                        </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="text-center py-5">
                                                                    <div class="mb-4">
                                                                        <i class="bx bxl-paypal text-primary" style="font-size: 4rem;"></i>
                                                                    </div>
                                                                    <h5 class="mb-3">Secure PayPal Payment</h5>
                                                                    <p class="text-muted mb-4">You will be redirected to PayPal to complete your payment securely.</p>
                                                                    
                                                                    <!-- PayPal Button Placeholder -->
                                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                                        <button type="button" class="btn btn-warning btn-lg" id="paypal-checkout-btn" disabled>
                                                                            <i class="bx bxl-paypal me-2"></i>Continue with PayPal
                                                                        </button>
                                                                        <small class="text-muted">PayPal integration coming soon</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end paypal section -->
                                                    </div>
                                                    <!-- end tab-pane -->

                                                <!-- Step 5: Review & Receipt -->
                                                <div class="tab-pane" id="basictab5" role="tabpanel">
                                                        <h4 class="fs-16 fw-semibold mb-1">
                                                        Review & Receipt
                                                        </h4>
                                                        <p class="text-muted">
                                                        Review your booking details and complete the purchase
                                                    </p>

                                                    <!-- Booking Summary -->
                                                    <div class="row mb-4">
                                                        <div class="col-12">
                                                            <h5 class="mb-3">Booking Summary</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead class="bg-light">
                                                                        <tr>
                                                                            <th>Item</th>
                                                                            <th>Quantity</th>
                                                                            <th>Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="booking-summary-tbody">
                                                                        <tr>
                                                                            <td>Package</td>
                                                                            <td>1</td>
                                                                            <td>$80.00</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                            </div>
                                                                </div>

                                                    <!-- Totals -->
                                                    <div class="row mb-4">
                                                        <div class="col-sm-6 offset-sm-6">
                                                            <div class="float-end">
                                                                <p><span class="fw-medium">Sub-total:</span> <span class="float-end">$80.00</span></p>
                                                                <p><span class="fw-medium">Discount:</span> <span class="float-end">$0.00</span></p>
                                                                <h4><span class="fw-medium">Total:</span> <span class="float-end">$80.00</span></h4>
                                                            </div>
                                                                </div>
                                                            </div>

                                                    <!-- Terms and Conditions -->
                                                    <div class="row mb-4">
                                                        <div class="col-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="termsConditions" required />
                                                                <label class="form-check-label" for="termsConditions">
                                                                    I agree with the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Waiver Agreement</a>
                                                                </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <!-- Success Message (hidden initially) -->
                                                    <div class="row" id="booking-success" style="display: none;">
                                                            <div class="col-12">
                                                                <div class="text-center">
                                                                    <div class="avatar-md mx-auto mb-3">
                                                                    <div class="avatar-title bg-success bg-opacity-10 text-success rounded-circle">
                                                                        <iconify-icon icon="iconamoon:check-circle-1-duotone" class="fs-36"></iconify-icon>
                                                                        </div>
                                                                    </div>
                                                                <h3 class="mt-0 text-success">Booking Confirmed!</h3>
                                                                <p class="w-75 mb-2 mx-auto">Your booking has been successfully processed. You will receive a confirmation email shortly.</p>
                                                                <p class="mb-3"><strong>Booking Reference:</strong> <span id="booking-reference">#BK-2024-001</span></p>
                                                                <div class="d-grid gap-2 d-md-block">
                                                                    <button class="btn btn-primary" type="button">Download Receipt</button>
                                                                    <button class="btn btn-outline-primary" type="button">Send Receipt via Email</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <!-- end tab-pane -->

                                                                                                    <div class="d-flex justify-content-between gap-3 mt-3">
                                                            <div class="previous">
                                                                <a href="javascript:void(0);" class="btn btn-primary disabled">
                                                            <i class="bx bx-left-arrow-alt me-2"></i>Previous
                                                                </a>
                                                            </div>
                                                            <div class="next">
                                                                <a href="javascript:void(0);" class="btn btn-primary">
                                                            Next<i class="bx bx-right-arrow-alt ms-2"></i>
                                                                </a>
                                                            </div>
                                                    <div class="complete" style="display: none;">
                                                        <a href="javascript:void(0);" class="btn btn-primary">
                                                            Complete Booking
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tab-content -->
                                            </div>
                                        <!-- end #horizontal wizard-->
                                    </form>
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

<!-- Calendar Custom Styles -->
<style>
    /* Available dates - green */
    #booking-calendar .fc-day.available-date,
    #booking-calendar .fc-daygrid-day.available-date {
        background-color: #8cb43d !important;
        cursor: pointer !important;
    }
    
    /* Booked out dates - gray-green */
    #booking-calendar .fc-day.booked-out-date,
    #booking-calendar .fc-daygrid-day.booked-out-date {
        background-color: #9ba588 !important;
        cursor: not-allowed !important;
        opacity: 0.8 !important;
    }
    
    /* Selected available date - add border */
    #booking-calendar .fc-day.available-date.selected-date {
        background-color: #8cb43d !important;
        border: 3px solid #ffffff !important;
        box-sizing: border-box;
    }
    
    #booking-calendar .fc-day.available-date.selected-date .fc-daygrid-day-number {
        font-weight: bold;
    }
    
    /* Hover effects - subtle without scaling */
    #booking-calendar .fc-day.available-date:hover {
        background-color: #7ba235 !important;
    }
    
    #booking-calendar .fc-day.booked-out-date:hover {
        background-color: #9ba588 !important;
        cursor: not-allowed;
    }
    
    /* Past dates */
    #booking-calendar .fc-day-past {
        background-color: #f8f9fa !important;
        color: #6c757d !important;
        cursor: not-allowed;
        opacity: 0.5;
    }
    
    /* Default future dates (no specific status) */
    #booking-calendar .fc-day-future:not(.available-date):not(.booked-out-date) {
        background-color: #f8f9fa;
        cursor: pointer;
    }
    
    #booking-calendar .fc-day-future:not(.available-date):not(.booked-out-date):hover {
        background-color: #e9ecef;
    }
    
    /* Add light grey border to all calendar days for grid appearance */
    #booking-calendar .fc-daygrid-day {
        border: 3px solid #dee2e6 !important;
        box-sizing: border-box !important;
    }
    
    /* Calendar header layout */
    #booking-calendar .fc-toolbar {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
    }
    
    /* Style the legend button to look like content, not a button */
    #booking-calendar .fc-legend-button {
        background: none !important;
        border: none !important;
        box-shadow: none !important;
        padding: 0 !important;
        margin: 0 !important;
        cursor: default !important;
        color: inherit !important;
    }
    
    #booking-calendar .fc-legend-button:hover,
    #booking-calendar .fc-legend-button:focus,
    #booking-calendar .fc-legend-button:active {
        background: none !important;
        border: none !important;
        box-shadow: none !important;
        color: inherit !important;
    }
    
    /* Let legend text inherit theme colors */
    #booking-calendar .fc-legend-button small {
        color: inherit !important;
    }
    
    /* Time slot styles */
    .time-slot {
        background-color: #f8f9fa;
        border: 2px solid #dee2e6;
        border-radius: 8px;
        padding: 12px 16px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
        font-weight: 500;
        width: 100%;
        display: block;
        font-size: 14px;
    }
    
    .time-slot:hover {
        background-color: #e9ecef;
        border-color: #adb5bd;
    }
    
    .time-slot.selected {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    
    .time-slot.unavailable {
        background-color: #6c757d;
        border-color: #6c757d;
        color: white;
        cursor: not-allowed;
        opacity: 0.6;
    }
    
    .time-slot.unavailable:hover {
        background-color: #6c757d;
        border-color: #6c757d;
    }
</style>



    <!-- Dynamic Available Add-ons functionality (GLOBAL SCOPE) -->
    <script>
        // Dynamic Available Add-ons functionality 
        function addAvailableAddonRow() {
            const container = document.getElementById('available-addons-container');
            const newRow = document.createElement('div');
            newRow.className = 'row g-3 mb-3 available-addon-row';
            
            newRow.innerHTML = `
                <div class="col-md-4 form-group offset-md-1 mb-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-custom-class="primary-popover" title="Note" data-bs-content="Makes add-ons available in checkout for this booking.">
                    <label for="payment-status" class="form-label">Assign Available Add-ons</label>
                    <select class="form-control available-addon-select" name="choices-single-no-search" data-choices data-choices-search-false data-choices-removeItem>
                        <option value="">None</option>
                        <option value="">Grenade + $12.00</option>
                        <option value="">Upgraded Gun package+ $100.00</option>
                        <option value="">Add-ons selected available for chosen package</option>
                    </select>
                </div>
                <div class="col-md-1 d-flex align-items-end align-items-center">
                    <i style="font-size:1.8em; color:#dc3545; cursor:pointer; margin-right:10px;" class='bx bx-x-circle' onclick="removeAvailableAddonRow(this)" title="Remove this add-on"></i>
                    <i style="font-size:2em; color:#28a745; cursor:pointer;" class='bx bxs-plus-circle' onclick="addAvailableAddonRow()" title="Add another add-on"></i>
                </div>
            `;
            
            container.appendChild(newRow);
            
            // Hide plus buttons from all other rows
            const rows = container.querySelectorAll('.available-addon-row');
            rows.forEach((row, index) => {
                const plusButton = row.querySelector('.bxs-plus-circle');
                if (plusButton && index < rows.length - 1) {
                    plusButton.style.display = 'none';
                }
            });
            
            // Initialize Choices.js for the new select element
            const newSelect = newRow.querySelector('.available-addon-select');
            if (newSelect && typeof Choices !== 'undefined') {
                new Choices(newSelect, {
                    searchEnabled: false,
                    removeItemButton: true
                });
            }
        }

        function removeAvailableAddonRow(element) {
            const row = element.closest('.available-addon-row');
            const container = document.getElementById('available-addons-container');
            
            // Don't remove if it's the only row
            if (container.children.length <= 1) {
                return;
            }
            
            // Remove the row
            row.remove();
            
            // Make sure the last row has the plus button visible
            const remainingRows = container.querySelectorAll('.available-addon-row');
            if (remainingRows.length > 0) {
                const lastRow = remainingRows[remainingRows.length - 1];
                const plusButton = lastRow.querySelector('.bxs-plus-circle');
                if (plusButton) {
                    plusButton.style.display = 'inline';
                }
                
                // Hide plus buttons from all other rows
                remainingRows.forEach((row, index) => {
                    const plusButton = row.querySelector('.bxs-plus-circle');
                    if (plusButton && index < remainingRows.length - 1) {
                        plusButton.style.display = 'none';
                    }
                });
            }
        }
    </script>

    <!-- Booking Form Functions -->
    <script>
        let currentStep = 1;
        const totalSteps = 5;
        let selectedDate = null;
        let selectedTime = null;

        // Validation functions for each step
        function validateStep1() {
            const groupId = document.getElementById('groupId');
            const bookedPackage = document.getElementById('bookedPackage');
            const totalGuests = document.getElementById('totalGuests');
            
            const groupIdValue = groupId ? groupId.value.trim() : '';
            const bookedPackageValue = bookedPackage ? bookedPackage.value : '';
            const totalGuestsValue = totalGuests ? totalGuests.value : '';
            
            console.log('Step 1 values:', {
                groupId: groupIdValue,
                bookedPackage: bookedPackageValue,
                totalGuests: totalGuestsValue,
                selectedDate: selectedDate,
                selectedTime: selectedTime
            });
            
            return groupIdValue !== '' && bookedPackageValue !== '' && totalGuestsValue !== '' && selectedDate !== null && selectedTime !== null;
        }

        function validateStep2() {
            // Step 2 has no required fields, so always valid
            return true;
        }

        function validateStep3() {
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const customerEmail = document.getElementById('customerEmail').value.trim();
            
            return firstName !== '' && lastName !== '' && customerEmail !== '';
        }

        function validateStep4() {
            const creditCardForm = document.getElementById('credit-card-form');
            const paypalSection = document.getElementById('paypal-section');
            const paymentSelection = document.getElementById('payment-method-selection');
            
            // If payment method not selected yet, invalid
            if (paymentSelection.style.display !== 'none') {
                return false;
            }
            
            // If credit card form is visible, validate credit card fields
            if (creditCardForm.style.display !== 'none') {
                const cardholderName = document.getElementById('cardholderName').value.trim();
                const cardNumber = document.getElementById('cardNumber').value.trim();
                const expiryDate = document.getElementById('expiryDate').value.trim();
                const cvvCode = document.getElementById('cvvCode').value.trim();
                const billingAddress = document.getElementById('billingAddress').value.trim();
                const billingCity = document.getElementById('billingCity').value.trim();
                const billingState = document.getElementById('billingState').value;
                const billingZip = document.getElementById('billingZip').value.trim();
                
                return cardholderName !== '' && cardNumber !== '' && expiryDate !== '' && 
                       cvvCode !== '' && billingAddress !== '' && billingCity !== '' && 
                       billingState !== '' && billingZip !== '';
            }
            
            // If PayPal section is visible, it's always valid (no form to fill)
            if (paypalSection.style.display !== 'none') {
                return true;
            }
            
            return false;
        }

        function validateStep5() {
            const termsCheckbox = document.getElementById('termsConditions');
            return termsCheckbox && termsCheckbox.checked;
        }

        // Time slot management functions
        function generateTimeSlots() {
            const timeSlots = [
                '8:00 AM', '8:30 AM', '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM',
                '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM', '1:00 PM', '1:30 PM',
                '2:00 PM', '2:30 PM', '3:00 PM', '3:30 PM', '4:00 PM', '4:30 PM',
                '5:00 PM', '5:30 PM', '6:00 PM', '6:30 PM', '7:00 PM', '7:30 PM'
            ];
            return timeSlots;
        }

        function getUnavailableTimeSlots(dateStr) {
            // Sample unavailable slots - in real implementation, this would come from backend
            const unavailableSlots = {
                // Some dates have booked time slots
                '2024-12-14': ['10:00 AM', '2:00 PM', '6:00 PM'],
                '2024-12-15': ['9:00 AM', '1:00 PM', '5:00 PM'],
                '2025-01-04': ['11:00 AM', '3:00 PM'],
                '2025-01-05': ['12:00 PM', '4:00 PM', '7:00 PM']
            };
            return unavailableSlots[dateStr] || [];
        }

        function displayTimeSlots(dateStr) {
            const timeSlotsSection = document.getElementById('time-slots-section');
            const selectedDateDisplay = document.getElementById('selected-date-display');
            
            // Show the time slots section
            timeSlotsSection.style.display = 'block';
            
            // Update the selected date display
            const formattedDate = new Date(dateStr).toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            selectedDateDisplay.textContent = `Available time slots for ${formattedDate}`;
            
            // Get unavailable slots for this date
            const unavailableSlots = getUnavailableTimeSlots(dateStr);
            
            // Update existing time slot buttons
            const timeSlotButtons = document.querySelectorAll('.time-slot');
            timeSlotButtons.forEach(button => {
                const timeValue = button.getAttribute('data-time');
                
                // Reset all buttons to available state first
                button.classList.remove('unavailable', 'selected');
                button.disabled = false;
                
                // Mark unavailable slots
                if (unavailableSlots.includes(timeValue)) {
                    button.classList.add('unavailable');
                    button.disabled = true;
                } else {
                    button.disabled = false;
                }
            });
            
            // Clear any previous time selection when switching dates
            selectedTime = null;
        }

        function selectTimeSlot(element) {
            if (element.classList.contains('unavailable')) return;
            
            // Remove previous selections
            document.querySelectorAll('.time-slot.selected').forEach(slot => {
                slot.classList.remove('selected');
            });
            
            // Select current slot
            element.classList.add('selected');
            selectedTime = element.getAttribute('data-time');
            
            console.log('Time slot selected:', selectedTime);
            
            // Update button states
            updateButtonStates();
        }

        // Update button states based on validation
        function updateButtonStates() {
            const nextBtn = document.querySelector('.next a');
            const prevBtn = document.querySelector('.previous a');
            const completeBtn = document.querySelector('.complete a');
            
            console.log('Updating button states for step:', currentStep);
            
            // Update Previous button
            if (currentStep === 1) {
                prevBtn.classList.add('disabled');
                prevBtn.style.pointerEvents = 'none';
            } else {
                prevBtn.classList.remove('disabled');
                prevBtn.style.pointerEvents = 'auto';
            }

            // Validate current step and update Next button
            let isCurrentStepValid = false;
            switch(currentStep) {
                case 1: 
                    isCurrentStepValid = validateStep1(); 
                    console.log('Step 1 valid:', isCurrentStepValid);
                    break;
                case 2: 
                    isCurrentStepValid = validateStep2(); 
                    console.log('Step 2 valid:', isCurrentStepValid);
                    break;
                case 3: 
                    isCurrentStepValid = validateStep3(); 
                    console.log('Step 3 valid:', isCurrentStepValid);
                    break;
                case 4: 
                    isCurrentStepValid = validateStep4(); 
                    console.log('Step 4 valid:', isCurrentStepValid);
                    break;
                case 5: 
                    isCurrentStepValid = validateStep5(); 
                    console.log('Step 5 valid:', isCurrentStepValid);
                    break;
            }

            // Update Next button visibility and Complete button
            if (currentStep === totalSteps) {
                nextBtn.style.display = 'none';
                document.querySelector('.complete').style.display = 'block';
                
                // Update Complete Booking button
                if (isCurrentStepValid) {
                    completeBtn.classList.remove('disabled', 'btn-secondary');
                    completeBtn.classList.add('btn-primary');
                    completeBtn.style.pointerEvents = 'auto';
                } else {
                    completeBtn.classList.add('disabled', 'btn-secondary');
                    completeBtn.classList.remove('btn-primary');
                    completeBtn.style.pointerEvents = 'none';
                }
            } else {
                nextBtn.style.display = 'block';
                document.querySelector('.complete').style.display = 'none';
                
                // Update Next button
                if (isCurrentStepValid) {
                    nextBtn.classList.remove('disabled', 'btn-secondary');
                    nextBtn.classList.add('btn-primary');
                    nextBtn.style.pointerEvents = 'auto';
                } else {
                    nextBtn.classList.add('disabled', 'btn-secondary');
                    nextBtn.classList.remove('btn-primary');
                    nextBtn.style.pointerEvents = 'none';
                }
            }

            // Update tab navigation states
            updateTabStates();
        }

        // Update tab navigation based on validation
        function updateTabStates() {
            const wizardTabs = document.querySelectorAll('#horizontalwizard .nav-link');
            
            wizardTabs.forEach((tab, index) => {
                const step = index + 1;
                const canAccess = canAccessStep(step);
                
                if (canAccess) {
                    tab.style.pointerEvents = 'auto';
                    tab.style.opacity = '1';
                } else {
                    tab.style.pointerEvents = 'none';
                    tab.style.opacity = '0.5';
                }
            });
        }

        // Check if user can access a specific step
        function canAccessStep(targetStep) {
            if (targetStep <= currentStep) return true;
            
            // Check if all previous steps are valid
            for (let step = 1; step < targetStep; step++) {
                let isValid = false;
                switch(step) {
                    case 1: isValid = validateStep1(); break;
                    case 2: isValid = validateStep2(); break;
                    case 3: isValid = validateStep3(); break;
                    case 4: isValid = validateStep4(); break;
                    case 5: isValid = validateStep5(); break;
                }
                if (!isValid && step !== 2) { // Step 2 has no required fields
                    return false;
                }
            }
            return true;
        }

        // Navigate to specific step
        function goToStep(step) {
            if (step < 1 || step > totalSteps) return;
            
            // Hide current tab
            document.querySelector('.tab-pane.active.show').classList.remove('active', 'show');
            document.querySelector('.nav-link.active').classList.remove('active');
            
            // Show new tab
            document.getElementById(`basictab${step}`).classList.add('active', 'show');
            document.querySelector(`a[href="#basictab${step}"]`).classList.add('active');
            
            // Special handling for payment step - show payment method selection
            if (step === 4) {
                window.showPaymentSelection();
            }
            
            currentStep = step;
            updateButtonStates();
        }

        // Calendar functionality
        let bookingCalendar = null;

        function initializeBookingCalendar() {
            const calendarEl = document.getElementById('booking-calendar');
            if (!calendarEl) return;

            // Generate current and future available dates dynamically
            const today = new Date();
            const availableDates = [];
            const bookedDates = [];
            
            // Generate dates for next 3 months
            for (let monthOffset = 0; monthOffset < 3; monthOffset++) {
                const targetDate = new Date(today.getFullYear(), today.getMonth() + monthOffset, 1);
                const year = targetDate.getFullYear();
                const month = targetDate.getMonth();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                
                for (let day = 1; day <= daysInMonth; day++) {
                    const date = new Date(year, month, day);
                    const dayOfWeek = date.getDay(); // 0 = Sunday, 6 = Saturday
                    const dateStr = date.toISOString().split('T')[0];
                    
                    // Skip past dates
                    if (date < today) continue;
                    
                    // Make weekends (Saturday=6, Sunday=0) available
                    if (dayOfWeek === 0 || dayOfWeek === 6) {
                        // Make some weekends booked out (every 4th weekend)
                        if (day % 28 === 7 || day % 28 === 8) {
                            bookedDates.push(dateStr);
                        } else {
                            availableDates.push(dateStr);
                        }
                    }
                    
                    // Make some Thursdays (4) available
                    if (dayOfWeek === 4 && day % 14 === 5) {
                        availableDates.push(dateStr);
                    }
                    
                    // Special handling for Fridays in August
                    if (dayOfWeek === 5 && month === 7) { // month 7 = August (0-based)
                        // Make Fridays 1st, 8th, 22nd available
                        if (day === 1 || day === 8 || day === 22) {
                            availableDates.push(dateStr);
                        }
                        // Make Fridays 15th, 29th booked out
                        else if (day === 15 || day === 29) {
                            bookedDates.push(dateStr);
                        }
                    }
                }
            }
            
            console.log('Available dates:', availableDates);
            console.log('Booked dates:', bookedDates);

            bookingCalendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'legend'
                },
                customButtons: {
                    legend: {
                        text: '',
                        click: function() {
                            // Do nothing - this is just for display
                        }
                    }
                },
                height: 'auto',
                selectable: true,
                selectMirror: true,
                dayMaxEvents: true,
                validRange: {
                    start: new Date() // Prevent selection of past dates
                },
                datesSet: function(info) {
                    // Apply styles after calendar has rendered
                    console.log('Calendar view changed, applying styles...');
                    setTimeout(() => {
                        applyDateStyles();
                        addLegendContent();
                    }, 200);
                },
                dayCellDidMount: function(info) {
                    const dateStr = info.date.toISOString().split('T')[0];
                    const dayEl = info.el;
                    
                    console.log('Processing date:', dateStr, 'Element:', dayEl);
                    
                    // Apply styling based on availability
                    if (availableDates.includes(dateStr)) {
                        console.log('Adding available-date class to:', dateStr);
                        dayEl.classList.add('available-date');
                        dayEl.style.backgroundColor = '#8cb43d';
                        dayEl.style.cursor = 'pointer';
                    } else if (bookedDates.includes(dateStr)) {
                        console.log('Adding booked-out-date class to:', dateStr);
                        dayEl.classList.add('booked-out-date');
                        dayEl.style.backgroundColor = '#9ba588';
                        dayEl.style.cursor = 'not-allowed';
                        dayEl.style.opacity = '0.8';
                    }
                },
                dateClick: function(info) {
                    const dateStr = info.date.toISOString().split('T')[0];
                    
                    // Only allow selection of available dates
                    if (!availableDates.includes(dateStr)) {
                        if (bookedDates.includes(dateStr)) {
                            // Show message for booked dates
                            alert('This date is fully booked. Please select another date.');
                        } else {
                            // Show message for unavailable dates
                            alert('This date is not available for booking. Please select a highlighted date.');
                        }
                        return;
                    }
                    
                    // Update selected date and reset selected time
                    selectedDate = dateStr;
                    selectedTime = null;
                    
                    // Remove previous date selections
                    calendarEl.querySelectorAll('.fc-day').forEach(day => {
                        day.classList.remove('selected-date');
                    });
                    
                    // Add selection styling to clicked date (only if available)
                    if (info.dayEl.classList.contains('available-date')) {
                        info.dayEl.classList.add('selected-date');
                    }
                    
                    // Display time slots for selected date
                    displayTimeSlots(dateStr);
                    
                    // Update form validation
                    updateButtonStates();
                    
                    console.log('Available date selected:', dateStr);
                }
            });

            bookingCalendar.render();
            
            // Apply styles after initial render
            setTimeout(() => {
                console.log('Initial render complete, applying styles...');
                applyDateStyles();
                addLegendContent();
            }, 500);
            
            // Backup function to apply styles
            function applyDateStyles() {
                console.log('Applying backup date styles...');
                const allDayCells = calendarEl.querySelectorAll('.fc-daygrid-day');
                
                allDayCells.forEach(dayCell => {
                    const dateAttr = dayCell.getAttribute('data-date');
                    if (!dateAttr) return;
                    
                    if (availableDates.includes(dateAttr)) {
                        console.log('Styling available date:', dateAttr);
                        dayCell.classList.add('available-date');
                        dayCell.style.backgroundColor = '#8cb43d';
                        dayCell.style.cursor = 'pointer';
                    } else if (bookedDates.includes(dateAttr)) {
                        console.log('Styling booked date:', dateAttr);
                        dayCell.classList.add('booked-out-date');
                        dayCell.style.backgroundColor = '#9ba588';
                        dayCell.style.cursor = 'not-allowed';
                        dayCell.style.opacity = '0.8';
                    }
                });
            }
            
            // Add legend content to the header
            function addLegendContent() {
                const legendButton = calendarEl.querySelector('.fc-legend-button');
                if (legendButton) {
                    legendButton.innerHTML = `
                        <div style="line-height: 1.2; text-align: left;">
                            <div style="margin-bottom: 2px;">
                                <div style="width: 10px; height: 10px; background-color: #8cb43d; display: inline-block; margin-right: 5px; vertical-align: middle;"></div>
                                <small>Available</small>
                            </div>
                            <div style="margin-bottom: 2px;">
                                <div style="width: 10px; height: 10px; background-color: #9ba588; display: inline-block; margin-right: 5px; vertical-align: middle;"></div>
                                <small>Fully Booked</small>
                            </div>
                            <div>
                                <div style="width: 10px; height: 10px; background-color: #f8f9fa; border: 1px solid #dee2e6; display: inline-block; margin-right: 5px; vertical-align: middle;"></div>
                                <small>Not Available</small>
                            </div>
                        </div>
                    `;
                }
            }
        }

        // Make selectTimeSlot function globally available
        window.selectTimeSlot = selectTimeSlot;

        // Package display functionality
        function updatePackageDisplay() {
            const packageSelect = document.getElementById('bookedPackage');
            const packageDisplaySection = document.getElementById('package-display-section');
            const packageTitle = document.getElementById('package-title');
            const packageDescription = document.getElementById('package-description');
            
            if (!packageSelect || !packageDisplaySection) return;
            
            const selectedValue = packageSelect.value;
            
            // Package data - in a real implementation, this would come from a database
            const packageData = {
                'paintball1': {
                    title: 'Paintball Package 1',
                    description: 'Our standard paintball experience includes all basic equipment, protective gear, and ammunition for an exciting battle simulation. Perfect for beginners and groups looking for action-packed fun.'
                },
                'paintball2': {
                    title: 'Paintball Package 2', 
                    description: 'Enhanced paintball experience with upgraded equipment, additional ammunition, and extended game time. Includes premium protective gear and special game scenarios for maximum excitement.'
                },
                'lowimpact': {
                    title: 'Low Impact Paintball',
                    description: 'Perfect for younger players or those new to paintball. Features lower velocity markers and softer paintballs while maintaining all the excitement of traditional paintball games.'
                },
                'bowtag': {
                    title: 'Bow Tag',
                    description: 'Unique archery-based combat game using foam-tipped arrows and protective gear. Combines the skill of archery with tactical team gameplay for an unforgettable experience.'
                },
                'nerf': {
                    title: 'Nerf Under 12',
                    description: 'Safe and fun Nerf battle experience designed specifically for children under 12. Includes all Nerf equipment, protective eyewear, and age-appropriate game scenarios.'
                }
            };
            
            if (selectedValue && packageData[selectedValue]) {
                // Show the section and update content
                packageDisplaySection.style.display = 'block';
                packageTitle.textContent = packageData[selectedValue].title;
                packageDescription.textContent = packageData[selectedValue].description;
            } else {
                // Hide the section if no package selected
                packageDisplaySection.style.display = 'none';
                packageTitle.textContent = 'Package Title';
                packageDescription.textContent = 'Package description will appear here when you select a package above.';
            }
        }

                    // Apply discount code functionality
        document.getElementById('applyDiscount').addEventListener('click', function() {
            const discountCode = document.getElementById('discountCode').value;
            if (discountCode) {
                alert('Discount code "' + discountCode + '" applied! This would update pricing in a real implementation.');
            }
        });

        // Initialize wizard functionality
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, initializing wizard...');
            
            // Set initial state
            const nextBtn = document.querySelector('.next a');
            const prevBtn = document.querySelector('.previous a');
            const lastBtn = document.querySelector('.last a');
            
            // Start with disabled next button
            nextBtn.classList.add('disabled', 'btn-secondary');
            nextBtn.classList.remove('btn-primary');
            nextBtn.style.pointerEvents = 'none';

            // Payment method selection functionality
            function showPaymentMethod(method) {
                const paymentSelection = document.getElementById('payment-method-selection');
                const creditCardForm = document.getElementById('credit-card-form');
                const paypalSection = document.getElementById('paypal-section');
                
                paymentSelection.style.display = 'none';
                
                if (method === 'credit-card') {
                    creditCardForm.style.display = 'block';
                    paypalSection.style.display = 'none';
                } else if (method === 'paypal') {
                    creditCardForm.style.display = 'none';
                    paypalSection.style.display = 'block';
                }
                
                updateButtonStates();
            }

            function showPaymentSelection() {
                const paymentSelection = document.getElementById('payment-method-selection');
                const creditCardForm = document.getElementById('credit-card-form');
                const paypalSection = document.getElementById('paypal-section');
                
                paymentSelection.style.display = 'block';
                creditCardForm.style.display = 'none';
                paypalSection.style.display = 'none';
                
                updateButtonStates();
            }

            // Make functions globally available for goToStep
            window.showPaymentSelection = showPaymentSelection;

            // Payment method button event listeners
            document.getElementById('credit-card-btn').addEventListener('click', function() {
                showPaymentMethod('credit-card');
            });

            document.getElementById('paypal-btn').addEventListener('click', function() {
                showPaymentMethod('paypal');
            });

            document.getElementById('back-to-payment-methods').addEventListener('click', function() {
                showPaymentSelection();
            });

            document.getElementById('back-to-payment-methods-paypal').addEventListener('click', function() {
                showPaymentSelection();
            });
            
            // Add event listeners to ALL form fields
            const allFields = document.querySelectorAll('input, select, textarea');
            allFields.forEach(field => {
                field.addEventListener('input', function() {
                    console.log('Field changed:', field.id, field.value);
                    updateButtonStates();
                });
                field.addEventListener('change', function() {
                    console.log('Field changed:', field.id, field.value);
                    updateButtonStates();
                });
            });

            // Add specific event listener for package dropdown to update package display
            const packageSelect = document.getElementById('bookedPackage');
            if (packageSelect) {
                packageSelect.addEventListener('change', function() {
                    updatePackageDisplay();
                });
            }

            // Navigation button event listeners
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Next button clicked, disabled?', this.classList.contains('disabled'));
                if (!this.classList.contains('disabled') && currentStep < totalSteps) {
                    goToStep(currentStep + 1);
                }
            });

            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                if (!this.classList.contains('disabled') && currentStep > 1) {
                    goToStep(currentStep - 1);
                }
            });

            // Complete booking button
            document.querySelector('.complete a').addEventListener('click', function(e) {
                e.preventDefault();
                if (!this.classList.contains('disabled') && currentStep === totalSteps && validateStep5()) {
                    // Show success message
                    const successDiv = document.getElementById('booking-success');
                    if (successDiv) {
                        successDiv.style.display = 'block';
                        document.querySelectorAll('#basictab5 .row:not(#booking-success)').forEach(row => {
                            row.style.display = 'none';
                        });
                        document.querySelector('.wizard').style.display = 'none';
                    }
                }
            });

            // Tab navigation event listeners (only for wizard tabs)
            document.querySelectorAll('#horizontalwizard .nav-link').forEach((tab, index) => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetStep = index + 1;
                    
                    // Only allow navigation if step is accessible
                    if (canAccessStep(targetStep)) {
                        goToStep(targetStep);
                    } else {
                        console.log('Step', targetStep, 'not accessible - missing required fields in previous steps');
                    }
                });
            });

            // Initialize booking calendar
            initializeBookingCalendar();

            // Initial button state
            setTimeout(updateButtonStates, 100);
        });
    </script>
</body>

</html>