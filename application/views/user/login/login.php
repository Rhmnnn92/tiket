<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('aset/dashboard/') ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('aset/dashboard/') ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('aset/dashboard/') ?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('aset/dashboard/') ?>assets/images/favicon.ico" />
</head>

<body>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Login Akun
            </h3>
        </div>
        <!-- Title Dashboard -->


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><i class="mdi mdi-account"></i> Log In Admin</h4>
                            <p class="card-description">Silahkan login terlebih dahulu!</p>
                            <form class="forms-sample" method="post" action="<?php echo base_url('admin/C_login/login_aksi') ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="username" type="text" class="form-control" id="" placeholder="Username">
                                </div>
                                <!-- end alamat -->
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input name="password" type="password" class="form-control" id="" placeholder="Password">
                                </div>
                                <!-- end Deskripsi -->
                                <!--  -->
                                <button type="submit" class="btn btn-gradient-info me-2">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/vendors/chart.js/Chart.min.js"></script>
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/js/off-canvas.js"></script>
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/js/hoverable-collapse.js"></script>
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/js/dashboard.js"></script>
        <script src="<?php echo base_url('aset/dashboard/') ?>assets/js/todolist.js"></script>
        <!-- End custom js for this page -->
</body>

</html>