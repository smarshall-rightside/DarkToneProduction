<?php include 'partials/main.php'; ?>

<?php
$_SESSION['error'] = null;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (strlen($email) == 0) {
        $_SESSION['error'] = "Please enter a email";
        $_POST['email'] = null;
    } else {
        if (checkAuth($email) === true) {
            header('Location: index.php');
            die();
        } else {
            $_SESSION['error'] = "Email is not valid";
        }
    }
}

?>

<head>
    <?php
    $subtitle = "Sign In";

    include('partials/title-meta.php');
    include('partials/head-css.php');
    ?>
</head>

<body class="authentication-bg">

    <div class="account-pages py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="mx-auto mb-4 text-center auth-logo">
                                    <a href="index.php" class="logo-dark">
                                        <img src="assets/images/logo-dark.png" height="32" alt="logo dark">
                                    </a>

                                    <a href="index.php" class="logo-light">
                                        <img src="assets/images/logo-light.png" height="28" alt="logo light">
                                    </a>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Welcome Back!</h3>
                                    <p class="text-muted">Sign in to your account to continue</p>
                            </div>
                            <form method="POST" class="mt-4">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo($_POST['email'] ?? "demo@customer.com") ?>">
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label">Password</label>
                                        <a href="auth-password.php" class="text-decoration-none small text-muted">Forgot password?</a>
                                    </div>
                                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-dark btn-lg fw-medium" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="text-center mt-4 text-white text-opacity-50">Don't have an account?
                        <a href="auth-signup.php" class="text-decoration-none text-white fw-bold">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?php include('partials/vendor-scripts.php'); ?>


</body>

</html>