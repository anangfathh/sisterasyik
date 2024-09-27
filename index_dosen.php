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
        <div>
            <div class="row">
                <div class="col-9 col-xl-12">
                    <div class="box card-box mb-20">
                        <div class="icon-box bg-color-1">
                            <div class="icon bg-icon-1">
                                <i class="bx bxs-briefcase"></i>
                            </div>
                            <a href="index_mhs.php">
                                <div class="content">
                                    <h3 class="m-2">Mahasiswa</h3>
                                </div>
                            </a>
                        </div>
                        <div class="icon-box bg-color-2">
                            <div class="icon bg-icon-2">
                                <i class="bx bx-task"></i>
                            </div>
                            <a href="index_dosen.php">
                                <div class="content">
                                    <h3 class="m-2">Dosen</h3>
                                </div>
                            </a>
                        </div>
                        <div class="icon-box bg-color-5">
                            <div class="icon bg-icon-5">
                                <i class="bx bx-task color-white"></i>
                            </div>
                            <a href="index_mk.php">
                                <div class="content">
                                    <h3 class="m-2">Mata Kuliah</h3>
                                </div>
                            </a>
                        </div>
                        <div class="icon-box bg-color-11">
                            <div class="icon bg-icon-11">
                                <i class="bx bx-task color-white"></i>
                            </div>
                            <a href="index_perkuliahan.php">
                                <div class="content">
                                    <h3 class="m-2">Perkuliahan</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-7 d-flex justify-content-start">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="task-profile_paginate">
                                                <a href="create_dosen_view.php">
                                                    <button class="btn btn-primary">Add
                                                        Dosen</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table
                                                class="table table-vcenter text-nowrap table-bordered dataTable no-footer"
                                                id="task-profile" role="grid">
                                                <thead>
                                                    <tr class="top">
                                                        <th class="border-bottom-0 text-center sorting fs-14 font-w500"
                                                            tabindex="0" aria-controls="task-profile" rowspan="1"
                                                            colspan="1" style="width: 26.6562px">
                                                            NIP
                                                        </th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 222.312px">
                                                            Nama
                                                        </th>
                                                        <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 84.8281px">
                                                            Nomer WA
                                                        </th>
                                                        <!-- <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0"
                                                            aria-controls="task-profile" rowspan="1" colspan="1"
                                                            style="width: 87.9844px">
                                                            Tanggal Lahir
                                                        </th> -->

                                                        <th class="border-bottom-0 sorting_disabled fs-14 font-w500"
                                                            rowspan="1" colspan="1" style="width: 145.391px">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd">
                                                        <?php
                                                        require 'koneksi.php';

                                                        $sql = "SELECT * FROM dosen";
                                                        $result = $conn->query($sql);
                                                        if ($result->rowCount() > 0) {
                                                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                                echo "<tr>";
                                                                echo "<td>" . $row["nip"] . "</td>";
                                                                echo "<td>" . $row["nama"] . "</td>";
                                                                echo "<td>" . $row["no_wa"] . "</td>";
                                                                // echo "<td>" . $row["tanggal_lahir"] . "</td>";
                                                                echo "<td><a href='update_mhs_view.php?nim=" . $row["nip"] . "'>Edit</a> | <a href='delete_mhs_view.php?nip=" . $row["nip"] . "'>Hapus</a></td>"; // Tautan untuk mengedit dan menghapus
                                                                echo "</tr>";
                                                            }
                                                        } else {
                                                            echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
                                                        }

                                                        $conn = null;
                                                        ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jquery/jquery-ui.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="./libs/date-picker/datepicker.js"></script>
    <script src="./libs/rating/js/custom-ratings.js"></script>
    <script src="./libs/rating/js/jquery.barrating.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/datepicker.js"></script>
</body>

</html>