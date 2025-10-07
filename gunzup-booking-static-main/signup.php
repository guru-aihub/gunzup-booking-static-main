<?php include 'partials/main.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Sign Up";
    include 'partials/title-meta.php' ?>

    <?php include 'partials/head-css.php' ?>
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card auth-card">
                        <div class="card-body p-0">
                            <div class="row align-items-center g-0">
                                <div class="col-lg-6 d-none d-lg-inline-block border-end">
                                    <div class="auth-page-sidebar">
                                        <a href="index.php">
                                            <img src="assets/images/logo-light.png" height="80" alt="GunzUp Booking Logo" />
                                        </a>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-4">
                                        <h2 class="fw-bold text-center fs-18">
                                            Sign Up
                                        </h2>
                                        <p class="text-muted text-center mt-1 mb-4">
                                            New to our platform? Sign up
                                            now! It only takes a minute.
                                        </p>

                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-8">
                                                <form action="index.php" class="authentication-form">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="example-name">Name</label>
                                                        <input type="name" id="example-name" name="example-name" class="form-control" placeholder="Enter your name" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="example-email">Email</label>
                                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Enter your email" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="example-password">Password</label>
                                                        <input type="password" id="example-password" class="form-control" placeholder="Enter your password" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" />
                                                            <label class="form-check-label" for="checkbox-signin">I accept
                                                                Terms and
                                                                Condition</label>
                                                        </div>
                                                    </div>

                                                    <div class="mb-1 text-center d-grid">
                                                        <button class="btn btn-primary" type="submit">
                                                            Sign Up
                                                        </button>
                                                    </div>
                                                </form>
                                                <p class="mt-3 fw-semibold no-span">
                                                    OR sign in with...
                                                </p>

                                                <div class="text-center">
                                                    <a href="javascript:void(0);" class="btn btn-light shadow-none"><i class="bx bxl-google fs-20"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-light shadow-none"><i class="bx bxl-facebook fs-20"></i></a>
                                                </div>

                                                <p class="text-muted mb-0 text-center mt-3">
                                                    I already have an account
                                                    <a href="signin.php" class="text-decoration-none fw-bold ms-1">Sign In</a>
                                                </p>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
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