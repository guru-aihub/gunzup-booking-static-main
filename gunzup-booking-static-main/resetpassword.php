<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Reset Password";
    include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="card auth-card">
                        <div class="card-body px-3 py-5">
                            <div class="mx-auto mb-4 text-center auth-logo">
                                <a href="index.php">
                                    <img src="assets/images/logo-light.png" height="40" alt="GunzUp Booking Logo" />
                                </a>
                            </div>

                            <h2 class="fw-bold text-center fs-18">
                                Reset Password
                            </h2>
                            <p class="text-muted text-center mt-1 mb-4">
                                Enter your email address and we'll send you
                                an email with instructions to reset your
                                password.
                            </p>

                            <div class="px-4">
                                <form action="index.php" class="authentication-form">
                                    <div class="mb-3">
                                        <label class="form-label" for="example-email">Email</label>
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Enter your email" />
                                    </div>
                                    <div class="mb-1 text-center d-grid">
                                        <button class="btn btn-primary" type="submit">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>

                                <p class="text-muted mb-0 text-center mt-3">
                                    Back to
                                    <a href="signin.php" class="text-decoration-none fw-bold ms-1">Sign In</a>
                                </p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

    <?php include 'partials/vendor-scripts.php' ?>
</body>

</html>