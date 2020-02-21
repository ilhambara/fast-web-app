<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


        <!-- Content Row -->
        <div class="row">

            <div class="col-lg">

                <!-- Widget Google Maps -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Sedang mencari lokasi yang spesifik?</h6>
                    </div>
                    <div class="card-body">
                        <div class="widget">
                            <div class="map-responsive">
                                <iframe src="https://maps.google.com/maps?q=politeknik%20elektronika%20negeri%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <style>
                                    .map-responsive {
                                        overflow: hidden;
                                        padding-bottom: 56.25%;
                                        position: relative;
                                        height: 0;
                                    }

                                    .map-responsive iframe {
                                        left: 0;
                                        top: 0;
                                        height: 100%;
                                        width: 100%;
                                        position: absolute;
                                    }
                                </style>
                            </div>
                        </div>
                        <hr>
                        maps by :
                        <a href="https://www.ostraining.com/blog/coding/responsive-google-maps/" target="_blank"> www.ostraining.com</a>
                    </div>
                </div>

            </div>

            <!-- Widget Raja Ongkir -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Cek shipping gateway anda disini!</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="widget">
                            <div data-theme="light" id="rajaongkir-widget"></div>
                            <script type="text/javascript" src="//rajaongkir.com/script/widget.js"></script>
                        </div>
                        <hr>
                        Apa itu Shipping Gateway?
                        <hr>
                        Shipping gateway adalah jasa yang memungkinkan suatu website atau situs e-commerce untuk melakukan pengecekan terhadap rincian ongkir dan fitur tracking barang.
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- /.container-fluid -->


    <!-- End of Main Content -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-bar-demo.js"></script>

</body>

</html>