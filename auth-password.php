<?php include 'partials/main.php'; ?>

<head>
     <?php
     $subtitle = "Reset Password";

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
                                        <h4 class="fw-bold text-dark mb-2">Reset Password</h3>
                                             <p class="text-muted">Enter your email address and we'll send you an email
                                                  with instructions to reset your password.</p>
                                   </div>
                                   <form action="index.php" class="mt-4">
                                        <div class="mb-3">
                                             <label for="email" class="form-label">Email Address</label>
                                             <input type="email" class="form-control" id="email"
                                                  placeholder="Enter your email">
                                        </div>
                                        <div class="d-grid">
                                             <button class="btn btn-dark btn-lg fw-medium" type="submit">Reset
                                                  Password</button>
                                        </div>
                                   </form>
                              </div>
                         </div>
                         <p class="text-center mt-4 text-white text-opacity-50">Back to
                              <a href="auth-signin.php" class="text-decoration-none text-white fw-bold">Sign In</a>
                         </p>
                    </div>
               </div>
          </div>
     </div>

     <?php include('partials/vendor-scripts.php'); ?>

</body>

</html>