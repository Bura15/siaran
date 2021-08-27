<?php if(session_status() == PHP_SESSION_NONE): ?>
    <?php
        session_start()
    ?>
<?php endif; ?>
<?php if(!isset($_SESSION['nama_admin'])): ?>
    <?php
        redirect('login');
    ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BBPOM Serang - Persediaan Barang</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/') ?>/bootstrap-4.4.1-dist/dist/css/bootstrap.css">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/star_admin') ?>/node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/star_admin') ?>/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />

    <link href="<?php echo base_url('assets/vendor/') ?>/datatables/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/') ?>/datatables/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/') ?>/datepicker/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/') ?>/select2/select2.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/star_admin') ?>/css/style.css" />
     <link rel="shortcut icon" href="<?php echo base_url('assets/star_admin') ?>/images/LOGOBADANPOM.png" />
    <!-- <link rel="stylesheet" href="<?php //echo base_url('assets') ?>/edit.css" /> -->
    <!--<link rel="shortcut icon" href="<?php echo base_url('assets/star_admin') ?>/images/favicon.png" />-->
    <?php echo $__env->yieldPushContent('styles'); ?>
    <style>
        .text-primary {
            color: #58d8a3 !important;
        }
    </style>
</head>

<body>
    <div class=" container-scroller">
        <!--Navbar-->
        <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--End navbar-->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- SIDEBAR ENDS -->
                
                <div class="content-wrapper">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>

                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="float-right">
                          <a href="#">BBPOM Serang</a> &copy; 2020
                      </span>
                    </div>
                </footer>
            </div>
        </div>

    </div>


    <script src="<?php echo base_url('assets/vendor') ?>/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url('assets/vendor') ?>/bootstrap-4.4.1-dist/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/vendor') ?>/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/vendor') ?>/datatables/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/vendor') ?>/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets/vendor') ?>/select2/select2.min.js"></script>
    <script src="<?php echo base_url('assets/star_admin') ?>/node_modules/datepicker/datepicker.js"></script>


    <script src="<?php echo base_url('assets/star_admin') ?>/node_modules/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url('assets/star_admin') ?>/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    
    <script src="<?php echo base_url('assets/star_admin') ?>/js/off-canvas.js"></script>
    <script src="<?php echo base_url('assets/star_admin') ?>/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url('assets/star_admin') ?>/js/misc.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();

            $('.datepicker').datepicker({
                autoclose:true
            });
        });

    </script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/layouts/app.blade.php ENDPATH**/ ?>