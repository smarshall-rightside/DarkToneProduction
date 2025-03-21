<?php include 'partials/main.php'; ?>

<?php
if (!$_SESSION['user'] || !isset($_SESSION['user'])) {
    header('Location: auth-signin.php');
    exit();
}
?>


<head>
    <?php
    $subtitle = "Dashboard";

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
                $title = "Darkone";
                $subtitle = "Dashboard";
                include('partials/page-title.php');
                ?>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Total Income</p>
                                        <h3 class="text-dark mt-2 mb-0">$78.8k</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-primary rounded">
                                            <iconify-icon icon="solar:globus-outline"
                                                class="fs-32 avatar-title text-primary"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart01"></div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">New Users</p>
                                        <h3 class="text-dark mt-2 mb-0">2,150</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-primary rounded">
                                            <iconify-icon icon="solar:users-group-two-rounded-broken"
                                                class="fs-32 avatar-title text-primary"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart02"></div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Orders</p>
                                        <h3 class="text-dark mt-2 mb-0">1,784</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-primary rounded">
                                            <iconify-icon icon="solar:cart-5-broken"
                                                class="fs-32 avatar-title text-primary"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart03"></div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Conversion Rate</p>
                                        <h3 class="text-dark mt-2 mb-0">12.3%</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-primary rounded">
                                            <iconify-icon icon="solar:pie-chart-2-broken"
                                                class="fs-32 avatar-title text-primary"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart04"></div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-height-100">
                            <div class="card-header d-flex align-items-center justify-content-between gap-2">
                                <h4 class=" mb-0 flex-grow-1 mb-0">Revenue</h4>
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                    <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                    <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                    <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div dir="ltr">
                                    <div id="dash-performance-chart" class="apex-charts"></div>
                                </div>
                            </div>

                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card card-height-100">
                            <div class="card-header d-flex align-items-center justify-content-between gap-2">
                                <h4 class="card-title flex-grow-1 mb-0">Sales By Category</h4>
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                    <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                    <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                    <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                </div>
                            </div>

                            <div class="card-body">
                                <div dir="ltr">
                                    <div id="conversions" class="apex-charts"></div>
                                </div>
                                <div class="table-responsive mb-n1 mt-2">
                                    <table class="table table-nowrap table-borderless table-sm table-centered mb-0">
                                        <thead class="bg-light bg-opacity-50 thead-sm">
                                            <tr>
                                                <th class="py-1">
                                                    Category
                                                </th>
                                                <th class="py-1">Orders</th>
                                                <th class="py-1">Perc.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Grocery</td>
                                                <td>187,232</td>
                                                <td>
                                                    48.63%
                                                    <span class="badge badge-soft-success float-end">2.5% Up</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Electonics</td>
                                                <td>126,874</td>
                                                <td>
                                                    36.08%
                                                    <span class="badge badge-soft-success float-end">8.5% Up</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Other</td>
                                                <td>90,127</td>
                                                <td>
                                                    23.41%
                                                    <span class="badge badge-soft-danger float-end">10.98% Down</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive-->
                            </div>

                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div
                                class="d-flex card-header justify-content-between align-items-center border-bottom border-dashed">
                                <h4 class="card-title mb-0">Sessions by Country</h4>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        View Data
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Import</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div id="world-map-markers" class="mt-3" style="height: 309px">
                                </div>
                            </div> <!-- end card-body-->


                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div> <!-- End row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">New Accounts</h4>
                                <a href="#!" class="btn btn-sm btn-light">
                                    View All
                                </a>
                            </div>
                            <!-- end card-header-->

                            <div class="card-body pb-1">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 table-centered">
                                        <thead>
                                            <th class="py-1">ID</th>
                                            <th class="py-1">Date</th>
                                            <th class="py-1">User</th>
                                            <th class="py-1">Account</th>
                                            <th class="py-1">Username</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#US523</td>
                                                <td>24 April, 2024</td>
                                                <td>
                                                    <img src="assets/images/users/avatar-2.jpg" alt="avatar-2"
                                                        class="img-fluid avatar-xs rounded-circle" />
                                                    <span class="align-middle ms-1">Dan Adrick</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@omions</td>
                                            </tr>
                                            <tr>
                                                <td>#US652</td>
                                                <td>24 April, 2024</td>
                                                <td>
                                                    <img src="assets/images/users/avatar-3.jpg" alt="avatar-2"
                                                        class="img-fluid avatar-xs rounded-circle" />
                                                    <span class="align-middle ms-1">Daniel Olsen</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@alliates</td>
                                            </tr>
                                            <tr>
                                                <td>#US862</td>
                                                <td>20 April, 2024</td>
                                                <td>
                                                    <img src="assets/images/users/avatar-4.jpg" alt="avatar-2"
                                                        class="img-fluid avatar-xs rounded-circle" />
                                                    <span class="align-middle ms-1">Jack Roldan</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Pending</span>
                                                </td>
                                                <td>@griys</td>
                                            </tr>
                                            <tr>
                                                <td>#US756</td>
                                                <td>18 April, 2024</td>
                                                <td>
                                                    <img src="assets/images/users/avatar-5.jpg" alt="avatar-2"
                                                        class="img-fluid avatar-xs rounded-circle" />
                                                    <span class="align-middle ms-1">Betty Cox</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@reffon</td>
                                            </tr>
                                            <tr>
                                                <td>#US420</td>
                                                <td>18 April, 2024</td>
                                                <td>
                                                    <img src="assets/images/users/avatar-6.jpg" alt="avatar-2"
                                                        class="img-fluid avatar-xs rounded-circle" />
                                                    <span class="align-middle ms-1">Carlos
                                                        Johnson</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Blocked</span>
                                                </td>
                                                <td>@bebo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">
                                    Recent Transactions
                                </h4>

                                <a href="#!" class="btn btn-sm btn-light">
                                    View All
                                </a>
                            </div>
                            <!-- end card-header-->

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 table-centered">
                                        <thead>
                                            <th class="py-1">ID</th>
                                            <th class="py-1">Date</th>
                                            <th class="py-1">Amount</th>
                                            <th class="py-1">Status</th>
                                            <th class="py-1">
                                                Description
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#98521</td>
                                                <td>24 April, 2024</td>
                                                <td>$120.55</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>
                                                <td>Commisions</td>
                                            </tr>
                                            <tr>
                                                <td>#20158</td>
                                                <td>24 April, 2024</td>
                                                <td>$9.68</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>
                                                <td>Affiliates</td>
                                            </tr>
                                            <tr>
                                                <td>#36589</td>
                                                <td>20 April, 2024</td>
                                                <td>$105.22</td>
                                                <td>
                                                    <span class="badge bg-danger">Dr</span>
                                                </td>
                                                <td>Grocery</td>
                                            </tr>
                                            <tr>
                                                <td>#95362</td>
                                                <td>18 April, 2024</td>
                                                <td>$80.59</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>
                                                <td>Refunds</td>
                                            </tr>
                                            <tr>
                                                <td>#75214</td>
                                                <td>18 April, 2024</td>
                                                <td>$750.95</td>
                                                <td>
                                                    <span class="badge bg-danger">Dr</span>
                                                </td>
                                                <td>Bill Payments</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

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

    <!-- Dashboard Js -->
    <script src="assets/js/pages/dashboard.js"></script>

</body>

</html>