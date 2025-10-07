<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Help & Support";
    include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        <?php include 'partials/menu.php' ?>

        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">
            <!-- Start Container -->
            <div class="container-xxl">

                <?php
                $subTitle = "Support";
                $pageTitle = "Help & Support";
                include 'partials/page-title.php' ?>

                    <!-- FAQ Section -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Frequently Asked Questions</h4>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="faqAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                    How do I reset my password?
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    Click on the "Reset Password" link on the login page and follow the instructions sent to your email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                    How do I cancel my subscription?
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    Go to your subscription page in the user dropdown menu and click on "Cancel Subscription". Your subscription will remain active until the end of the current billing period.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq3">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                    How do I manage my bookings?
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    Navigate to the bookings section from the main menu. You can view, edit, or cancel your bookings from there.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="faq4">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                    What payment methods do you accept?
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank transfers.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Ticket Form -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Submit a Support Request</h4>
                                    <p class="card-title-desc">Fill out the form below to submit a support ticket. We'll get back to you as soon as possible.</p>
                                </div>
                                <div class="card-body">
                                    <form id="supportForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="fullName" class="form-label">Full Name *</label>
                                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email Address *</label>
                                                    <input type="email" class="form-control" id="email" name="email" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="priority" class="form-label">Priority Level *</label>
                                                    <select class="form-select" id="priority" name="priority" required>
                                                        <option value="">Select Priority</option>
                                                        <option value="low">Low</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="high">High</option>
                                                        <option value="critical">Critical</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="category" class="form-label">Category *</label>
                                                    <select class="form-select" id="category" name="category" required>
                                                        <option value="">Select Category</option>
                                                        <option value="technical">Technical Issue</option>
                                                        <option value="billing">Billing & Payments</option>
                                                        <option value="account">Account Management</option>
                                                        <option value="booking">Booking System</option>
                                                        <option value="feature">Feature Request</option>
                                                        <option value="general">General Inquiry</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subject *</label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Brief description of your issue" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description *</label>
                                            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Please provide detailed information about your issue or request..." required></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="attachment" class="form-label">Attachment (Optional)</label>
                                            <input type="file" class="form-control" id="attachment" name="attachment" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.txt">
                                            <div class="form-text">Accepted formats: JPG, PNG, PDF, DOC, DOCX, TXT (Max 5MB)</div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="emailUpdates" name="emailUpdates">
                                                <label class="form-check-label" for="emailUpdates">
                                                    Send me email updates about this ticket
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-flex gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bx bx-paper-plane me-1"></i>
                                                Submit Request
                                            </button>
                                            <button type="reset" class="btn btn-secondary">
                                                <i class="bx bx-refresh me-1"></i>
                                                Reset Form
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Information -->
                    <!-- 
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-primary-subtle text-primary font-size-20">
                                            <i class="bx bx-support"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-15 mb-1">24/7 Support</h5>
                                    <p class="text-muted">Our support team is available 24/7 to help you with any issues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-success-subtle text-success font-size-20">
                                            <i class="bx bx-time-five"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-15 mb-1">Quick Response</h5>
                                    <p class="text-muted">We aim to respond to all support tickets within 2 hours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-warning-subtle text-warning font-size-20">
                                            <i class="bx bx-phone"></i>
                                        </span>
                                    </div>
                                    <h5 class="font-size-15 mb-1">Phone Support</h5>
                                    <p class="text-muted">Call us at <strong>+1-800-123-4567</strong> for urgent issues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->



            </div>
            <!-- End Container -->

            <?php include 'partials/footer.php' ?>
        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->
    </div>
    <!-- END Wrapper -->

    <?php include 'partials/right-sidebar.php' ?>

    <?php include 'partials/vendor-scripts.php' ?>

    <!-- Form Validation -->
    <script>
        document.getElementById('supportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const formValues = {};
            
            for (let [key, value] of formData.entries()) {
                formValues[key] = value;
            }
            
            // Basic validation
            if (!formValues.fullName || !formValues.email || !formValues.priority || 
                !formValues.category || !formValues.subject || !formValues.description) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(formValues.email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // File size validation (if file is selected)
            const fileInput = document.getElementById('attachment');
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size / 1024 / 1024; // Convert to MB
                if (fileSize > 5) {
                    alert('File size must be less than 5MB.');
                    return;
                }
            }
            
            // Show success message (in a real application, this would submit to a server)
            alert('Support ticket submitted successfully! We will get back to you soon.\n\nTicket ID: #' + Math.random().toString(36).substr(2, 9).toUpperCase());
            
            // Reset form
            this.reset();
        });
        
        // File input change handler
        document.getElementById('attachment').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const fileSize = file.size / 1024 / 1024; // Convert to MB
                if (fileSize > 5) {
                    alert('File size must be less than 5MB.');
                    e.target.value = ''; // Clear the input
                }
            }
        });
    </script>
</body>

</html> 