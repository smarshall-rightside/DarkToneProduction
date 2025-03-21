<?php include 'partials/main.php'; ?>

<head>
     <?php
     $subtitle = "Lock Screen";

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
                                        <h4 class="fw-bold text-dark mb-2">Hi ! Gaston</h3>
                                             <p class="text-muted">Enter your password to access the admin.</p>
                                   </div>

                                   <form action="index.php" class="mt-4">
                                        <div class="mb-3">
                                             <label class="form-label" for="example-password">Password</label>
                                             <input type="text" id="example-password" class="form-control"
                                                  placeholder="Enter your password">
                                        </div>
                                        <div class="mb-3">
                                             <div class="form-check">
                                                  <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                  <label class="form-check-label" for="checkbox-signin">I accept Terms and Condition</label>
                                             </div>
                                        </div>

                                        <div class="mb-1 text-center d-grid">
                                             <button class="btn btn-dark btn-lg fw-medium" type="submit">Sign In</button>
                                        </div>
                                   </form>
                              </div>
                         </div>
                         <p class="text-center mt-4 text-white text-opacity-50">Not you? return
                              <a href="auth-signup.php" class="text-decoration-none text-white fw-bold">Sign Up</a>
                         </p>
                    </div>
               </div>
          </div>
     </div>

     <?php include('partials/vendor-scripts.php'); ?>

</body>

</html>