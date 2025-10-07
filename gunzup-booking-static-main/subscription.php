<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Subscription";
    include 'partials/title-meta.php' ?>

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

                <!-- Current Subscription Management -->
                <div class="row">
                    <div class="col-12">
                        <div class="card border-success">
                            <div class="card-header bg-success-subtle">
                                <h4 class="card-title text-success mb-0">
                                    <i class="bx bx-check-circle me-2"></i>
                                    Current Subscription
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <h6 class="text-muted mb-1">Billed Monthly</h6>
                                                <h5 class="mb-0">Monthly Plan</h5>
                                                <span class="badge bg-success-subtle text-success">Active</span>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h6 class="text-muted mb-1">Monthly Charge</h6>
                                                <h5 class="mb-0">$79.00</h5>
                                                <small class="text-muted">Billed monthly</small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h6 class="text-muted mb-1">Payment Method</h6>
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bxl-visa fs-24 text-primary me-2"></i>
                                                    <div>
                                                        <div class="fw-medium">•••• •••• •••• 4532</div>
                                                        <small class="text-muted">Expires 12/26</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h6 class="text-muted mb-1">Next Billing Date</h6>
                                                <h5 class="mb-0">January 15, 2025</h5>
                                                <small class="text-muted">Auto-renewal enabled</small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h6 class="text-muted mb-1">Subscription Started</h6>
                                                <div class="fw-medium">December 15, 2024</div>
                                                <small class="text-muted">30 days ago</small>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-end">
                                            <div class="d-flex flex-column gap-2">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="bx bx-credit-card me-1"></i>
                                                    Update Payment Method
                                                </button>
                                                <button class="btn btn-warning btn-sm">
                                                    <i class="bx bx-transfer me-1"></i>
                                                    Change Plan
                                                </button>
                                                <button class="btn btn-danger btn-sm" id="cancelSubscriptionBtn">
                                                    <i class="bx bx-x-circle me-1"></i>
                                                    Cancel Subscription
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Billing History -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Billing History</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dec 15, 2024</td>
                                                <td>Monthly Plan - Monthly</td>
                                                <td>$79.00</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>
                                                    <i class="bx bx-download" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Receipt" style="cursor: pointer; color: #007bff;"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nov 15, 2024</td>
                                                <td>Monthly Plan - Monthly</td>
                                                <td>$79.00</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>
                                                    <i class="bx bx-download" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Receipt" style="cursor: pointer; color: #007bff;"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Oct 15, 2024</td>
                                                <td>Monthly Plan - Monthly</td>
                                                <td>$79.00</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>
                                                    <i class="bx bx-download" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Receipt" style="cursor: pointer; color: #007bff;"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sep 15, 2024</td>
                                                <td>Basic Plan - Monthly</td>
                                                <td>$29.00</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>
                                                    <i class="bx bx-download" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download Receipt" style="cursor: pointer; color: #007bff;"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="text-center my-4">
                            <h3>Payment Plans</h3>
                            <p class="text-muted text-center">
                                <!--Need more features? Upgrade to a higher plan or downgrade to save money -->
                            </p>
                        </div>
                        
                        <!-- Pricing Plans -->
                        <div class="row justify-content-center mb-5">
                            <div class="col-lg-6">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold">
                                            Monthly
                                        </h5>
                                        <h2 class="mt-0 mb-3 fw-bold">
                                            $79
                                            <span class="fs-14 fw-medium text-muted">/ Month</span>
                                        </h2>

                                        <ul class="card-pricing-features text-muted border-top pt-2 mt-2 ps-0 list-unstyled">
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Build & Manage Bookable Items
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Build & Manage Upgrade Options
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Manually Create Bookings
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Provide Coupon Codes
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Provide Memberships
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Sell Gift Certificates
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Publish and Collect Signed Waivers
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Embed Items, Packages and Calendars on Your Website
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Take Bookings on Your Park's GunzUp! Listing
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Customize and Send Marketing Emails
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>View and Export Reports
                                            </li>
                                        </ul>

                                        <div class="mt-4 text-center">
                                            <button class="btn btn-secondary px-sm-4 w-100" disabled>
                                                Currently Active
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <div class="pricing-ribbon pricing-ribbon-primary float-end">
                                             Popular
                                        </div>
                                        
                                        <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold">
                                            Annual (Save 10%)
                                        </h5>
                                        <h2 class="mt-0 mb-3 fw-bold">
                                            $71
                                            <span class="fs-14 fw-medium text-muted">/ Month</span>
                                        </h2>
                                        <p class="text-muted fs-13 mb-0">Billed $852 annually</p>

                                        <ul class="card-pricing-features text-muted border-top pt-2 mt-2 ps-0 list-unstyled">
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Build & Manage Bookable Items
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Build & Manage Upgrade Options
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Manually Create Bookings
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Provide Coupon Codes
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Provide Memberships
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Sell Gift Certificates
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Publish and Collect Signed Waivers
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Embed Items, Packages and Calendars on Your Website
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Take Bookings on Your Park's GunzUp! Listing
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Customize and Send Marketing Emails
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>View and Export Reports
                                            </li>
                                            <li class="text-dark">
                                                <i class="bx bx-check-circle text-primary fs-15 me-1"></i>Save 10%
                                            </li>
                                        </ul>

                                        <div class="mt-4 text-center">
                                            <button class="btn btn-primary px-sm-4 w-100 select-plan" data-plan="annual" data-price="71">
                                                Pay Annually & Save!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Payment Form -->
                        <div class="row justify-content-center" id="payment-section" style="display: none;">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Complete Your Subscription</h4>
                                        
                                        <!-- Selected Plan Summary -->
                                        <div class="alert alert-primary" role="alert">
                                            <h5 class="alert-heading">Selected Plan: <span id="selected-plan-name"></span></h5>
                                            <p class="mb-0">Monthly charge: $<span id="selected-plan-price"></span>.00</p>
                                        </div>

                                        <form id="subscription-form" action="index.php" method="POST">
                                            <!-- Account Information -->
                                            <h5 class="mb-3">Account Information</h5>
                                            <div class="row g-3 mb-4">
                                                <div class="col-md-6">
                                                    <label for="first-name" class="form-label">First Name *</label>
                                                    <input type="text" class="form-control" id="first-name" name="first_name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="last-name" class="form-label">Last Name *</label>
                                                    <input type="text" class="form-control" id="last-name" name="last_name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email Address *</label>
                                                    <input type="email" class="form-control" id="email" name="email" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                                </div>
                                            </div>

                                            <!-- Payment Information -->
                                            <h5 class="mb-3">Payment Information</h5>
                                            <div class="row g-3 mb-4">
                                                <div class="col-12">
                                                    <label for="cardholder-name" class="form-label">Cardholder Name *</label>
                                                    <input type="text" class="form-control" id="cardholder-name" name="cardholder_name" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="card-number" class="form-label">Card Number *</label>
                                                    <input type="text" class="form-control" id="card-number" name="card_number" placeholder="1234 5678 9012 3456" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="expiry-date" class="form-label">Expiry Date *</label>
                                                    <input type="text" class="form-control" id="expiry-date" name="expiry_date" placeholder="MM/YY" data-toggle="input-mask" data-mask-format="00/00" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="cvv" class="form-label">CVV *</label>
                                                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" data-toggle="input-mask" data-mask-format="000" required>
                                                </div>
                                            </div>

                                            <!-- Billing Address -->
                                            <h5 class="mb-3">Billing Address</h5>
                                            <div class="row g-3 mb-4">
                                                <div class="col-12">
                                                    <label for="address" class="form-label">Street Address *</label>
                                                    <input type="text" class="form-control" id="address" name="address" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="city" class="form-label">City *</label>
                                                    <input type="text" class="form-control" id="city" name="city" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="state" class="form-label">State *</label>
                                                    <select class="form-control" id="state" name="state" data-choices data-choices-search-false required>
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
                                                        <!-- Add more states as needed -->
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="zip" class="form-label">ZIP Code *</label>
                                                    <input type="text" class="form-control" id="zip" name="zip" data-toggle="input-mask" data-mask-format="00000" required>
                                                </div>
                                            </div>

                                            <!-- Terms and Submit -->
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                                <label class="form-check-label" for="terms">
                                                    I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                                </label>
                                            </div>

                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary btn-lg">
                                                    Subscribe Now - $<span id="final-price"></span>.00/month
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary" id="back-to-plans">
                                                    Back to Plans
                                                </button>
                                            </div>
                                        </form>
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

    <script>
        // Plan selection functionality
        document.querySelectorAll('.select-plan').forEach(button => {
            button.addEventListener('click', function() {
                const plan = this.getAttribute('data-plan');
                const price = this.getAttribute('data-price');
                
                // Update selected plan display
                document.getElementById('selected-plan-name').textContent = plan.charAt(0).toUpperCase() + plan.slice(1) + ' Plan';
                document.getElementById('selected-plan-price').textContent = price;
                document.getElementById('final-price').textContent = price;
                
                // Show payment section and scroll to it
                document.getElementById('payment-section').style.display = 'block';
                document.getElementById('payment-section').scrollIntoView({ behavior: 'smooth' });
                
                // Update button states
                document.querySelectorAll('.select-plan').forEach(btn => {
                    btn.classList.remove('btn-primary');
                    btn.classList.add('btn-outline-primary');
                    btn.textContent = 'Select Plan';
                });
                
                this.classList.remove('btn-outline-primary');
                this.classList.add('btn-primary');
                this.textContent = 'Selected';
            });
        });

        // Back to plans functionality
        document.getElementById('back-to-plans').addEventListener('click', function() {
            document.getElementById('payment-section').style.display = 'none';
            document.querySelectorAll('.select-plan').forEach(btn => {
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-outline-primary');
                btn.textContent = 'Select Plan';
            });
        });

        // Cancel Subscription functionality
        document.getElementById('cancelSubscriptionBtn').addEventListener('click', function() {
            if (confirm('Are you sure you want to cancel your subscription?\n\nYour subscription will remain active until the end of the current billing period (January 15, 2025). After that, you will lose access to all premium features.\n\nThis action cannot be undone.')) {
                // In a real application, this would call an API to cancel the subscription
                alert('Subscription cancellation request has been submitted.\n\nYou will receive a confirmation email shortly. Your subscription will remain active until January 15, 2025.');
                
                // Update the UI to show cancellation pending
                const currentSubCard = document.querySelector('.card.border-success');
                currentSubCard.classList.remove('border-success');
                currentSubCard.classList.add('border-warning');
                
                const cardHeader = currentSubCard.querySelector('.card-header');
                cardHeader.classList.remove('bg-success-subtle');
                cardHeader.classList.add('bg-warning-subtle');
                
                const titleIcon = cardHeader.querySelector('i');
                titleIcon.classList.remove('bx-check-circle', 'text-success');
                titleIcon.classList.add('bx-time-five', 'text-warning');
                
                const title = cardHeader.querySelector('h4');
                title.classList.remove('text-success');
                title.classList.add('text-warning');
                title.innerHTML = '<i class="bx bx-time-five me-2"></i>Subscription Ending';
                
                const statusBadge = currentSubCard.querySelector('.badge');
                statusBadge.classList.remove('bg-success-subtle', 'text-success');
                statusBadge.classList.add('bg-warning-subtle', 'text-warning');
                statusBadge.textContent = 'Cancellation Pending';
                
                // Disable the cancel button
                this.disabled = true;
                this.innerHTML = '<i class="bx bx-check me-1"></i>Cancellation Requested';
            }
        });
    </script>
</body>

</html> 