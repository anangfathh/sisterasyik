<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas CC</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/icons.min.css" />
    <link rel="stylesheet" href="./libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="./libs/date-picker/datepicker.css" />
    <link rel="stylesheet" href="./libs/datatable/css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" href="./libs/rating/css/rating-themes.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/grid.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
</head>

<body class="sidebar-expand active">
    <div class="main">
        <section class="login">
            <div class="box box-manage align-self-center">
                <div class="box-body d-flex pd-7 pb-0">
                    <div class="me-auto w-55">
                        <h5 class="card-title text-white fs-30 font-w500 mt-4">
                            Konfirmasi Penghapusan
                        </h5>
                        <p class="mb-0 text-o7 fs-18 font-w500 pb-11">
                            Anda yakin ingin menghapus Mata Kuliah dengan kode
                            <?php echo $_GET['kode']; ?>?
                        </p>
                    </div>
                    <div class="btn-now">
                        <form method="post" action="delete_mk_process.php">
                            <input type="hidden" name="kode" value="<?php echo $_GET['kode']; ?>" />
                            <button type="submit" value="Ya" class="btn btn-danger btn-lg">
                                Ya
                            </button>
                            <a class="h6 font-w500" href="index_mk.php">Tidak</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jquery/jquery-ui.min.js"></script>
    <script src="./libs/moment/min/moment.min.js"></script>
    <script src="./libs/apexcharts/apexcharts.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/chart.js/Chart.bundle.min.js"></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="./js/countto.js"></script>
    <script src="./libs/date-picker/datepicker.js"></script>
    <script src="./libs/rating/js/custom-ratings.js"></script>
    <script src="./libs/rating/js/jquery.barrating.js"></script>
    <script src="./libs/circle-progress/circle-progress.min.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>

    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/datepicker.js"></script>
    <script src="./js/pages/chart-circle.js"></script>
</body>

</html>