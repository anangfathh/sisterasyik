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
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="auth-content my-auto">
                                <form class="mt-5 pt-2" method="post" action="update_mk_process.php">
                                    <div class="mb-24">
                                        <label class="form-label mb-14">Kode</label>
                                        <input type="text" class="form-control" id="kode" name="kode"
                                            value="<?php echo $_GET['kode']; ?>" readonly />
                                    </div>
                                    <?php
                                    require 'koneksi.php';

                                    // Pastikan kode_mk didapatkan dari URL
                                    if (isset($_GET['kode'])) {
                                        $kode_mk = $_GET['kode'];

                                        // Query untuk mengambil nama dan sks berdasarkan kode_mk
                                        $sql = "SELECT * FROM matkul WHERE kode_mk = ?";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->execute([$kode_mk]);

                                        // Jika data ditemukan
                                        if ($stmt->rowCount() > 0) {
                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                            $nama = $row['nama'];
                                            $sks = $row['sks'];
                                        } else {
                                            // Jika data tidak ditemukan
                                            $nama = '';
                                            $sks = '';
                                        }
                                    } else {
                                        // Jika kode tidak ada di URL
                                        $nama = '';
                                        $sks = '';
                                    }

                                    ?>

                                    <div class="mb-24">
                                        <label class="form-label mb-14">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>"/>
                                    </div>
                                    <div class="mb-24">
                                        <label class="form-label mb-14">SKS</label>
                                        <input type="text" class="form-control" id="sks" name="sks" value="<?php echo htmlspecialchars($sks); ?>"/>
                                    </div>

                                    <div class="mb-3">
                                        <button
                                            class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                            type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
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