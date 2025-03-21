<?php include 'partials/main.php'; ?>

<head>
     <?php
     $subtitle = "Vector Maps";

     include('partials/title-meta.php');
     include('partials/head-css.php');
     ?>

</head>

<body>

     <!-- START Wrapper -->
     <div class="app-wrapper">

          <?php include('partials/menu.php'); ?>

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    <?php
                    $title = "Maps";
                    $subtitle = "Vector Maps";
                    include('partials/page-title.php');
                    ?>
                    <div class="row row-cols-lg-2 gx-3">
                         <div class="col">
                              <div class="card">
                                   <div class="card-header">
                                        <h5 class="card-title">World Vector Map</h5>
                                        <p class="card-subtitle">Give textual form controls like
                                             <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade
                                             with custom styles, sizing, focus states, and more.
                                        </p>
                                   </div>

                                   <div class="card-body">
                                        <div>
                                             <div id="world-map-markers" style="height: 360px"></div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col">
                              <div class="card">
                                   <div class="card-header">
                                        <h5 class="card-title">Canada Vector Map</h5>
                                        <p class="card-subtitle">Give textual form controls like
                                             <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade
                                             with custom styles, sizing, focus states, and more.
                                        </p>
                                   </div>

                                   <div class="card-body">
                                        <div>
                                             <div id="canada-vector-map" style="height: 360px"></div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col">
                              <div class="card">
                                   <div class="card-header">
                                        <h5 class="card-title">Russia Vector Map</h5>
                                        <p class="card-subtitle">Give textual form controls like
                                             <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade
                                             with custom styles, sizing, focus states, and more.
                                        </p>
                                   </div>

                                   <div class="card-body">
                                        <div>
                                             <div id="russia-vector-map" style="height: 360px"></div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col">
                              <div class="card">
                                   <div class="card-header">
                                        <h5 class="card-title">Iraq Vector Map</h5>
                                        <p class="card-subtitle">Give textual form controls like
                                             <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade
                                             with custom styles, sizing, focus states, and more.
                                        </p>
                                   </div>

                                   <div class="card-body">
                                        <div>
                                             <div id="iraq-vector-map" style="height: 360px"></div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col">
                              <div class="card">
                                   <div class="card-header">
                                        <h5 class="card-title">Spain Vector Map</h5>
                                        <p class="card-subtitle">Give textual form controls like
                                             <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade
                                             with custom styles, sizing, focus states, and more.
                                        </p>
                                   </div>

                                   <div class="card-body">
                                        <div>
                                             <div id="spain-vector-map" style="height: 360px"></div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                         </div>
                    </div>

               </div>
               <!-- End Container Fluid -->

               <?php include('partials/footer.php'); ?>

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     <?php include('partials/vendor-scripts.php'); ?>

     <!-- Vector Map Js -->
     <script src="assets/vendor/jsvectormap/jsvectormap.min.js"></script>
     <script src="assets/vendor/jsvectormap/maps/world-merc.js"></script>
     <script src="assets/vendor/jsvectormap/maps/world.js"></script>

     <script src="assets/js/pages/maps-canada.js"></script>
     <script src="assets/js/pages/maps-iraq.js"></script>
     <script src="assets/js/pages/maps-russia.js"></script>
     <script src="assets/js/pages/maps-spain.js"></script>

     <script src="assets/js/pages/maps-vector.js"></script>

</body>

</html>