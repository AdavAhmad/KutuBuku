<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style type="text/css">
        .bg-cover {
            height: 384px;
            background-image: url('../public/img/jumbotron.png');
        }

        .center {
            margin: 0;
            position: absolute;
            top: 30%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            padding: 10px 10px 10px 10px;
            border-radius: 5px;
        }

        .jumbotron .form .bar {
            height: 50px;
            width: 458px;
        }

        .jumbotron .form .bir {
            height: 50px;
            width: 100px;

        }

        #parent {
            height: 45px;
            background-color: yellow;
            position: relative;
        }

        .fav {
            top: 25%;
            left: 0%;

            position: absolute;
        }

        .button {
            width: 100px;
        }

        .gambar {
            width: 60%;
            height: auto;
        }
    </style>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: auto
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <?php
    error_reporting(0);
    switch ($_GET['page']) {
            // menu buku
        case 'pinjam':
            include "pinjam.php";
            break;
        default:
            include "home.php";
            break;
    }
    ?>
    <?php
    session_start();
    if (!isset($_SESSION['nama']) || $_SESSION['level'] != "anggota") {
        echo "<script>alert('Silahkan login terlebih dahulu')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
    } else {

        include_once 'head.php';
    }
    ?>

    <div class="container-fluid">

        <!-- <div class="container-fluid">
        <div class="row content">
          <div class="list-group col-sm-3">
            <a href="#" class="list-group-item active">
              Wellcome : <font color=""><?php echo $_SESSION['nama']; ?></font>
            </a>
            <a class="list-group-item" href="?page"><span class="glyphicon glyphicon-home"></span> Home</a>
            <a class="list-group-item" href="?page=buku"><i class="glyphicon glyphicon-book"></i> Cari Buku</a>
            <a class="list-group-item" href="?page=peminjaman"><i class="glyphicon glyphicon-list-alt"></i> Peminjaman</a>
            <a class="list-group-item" href="?page=riwayat"><i class="glyphicon glyphicon-random"></i> Riwayat</a> -->
        <!-- <a class="list-group-item" href="?page=laporan"><i class="glyphicon glyphicon-file"></i> Laporan</a> -->
    </div>
    <?php
    include "../public/header.php";
    require_once '../public/koneksi.php';
    ?>
    <!-- Jumbotron -->
    <?php
    require_once '../public/koneksi.php';
    $query = 'select count(*) as hasil from tbl_buku';
    $hmm1 = $database->prepare($query);
    $hmm1->execute();
    $res1 = $hmm1->get_result();
    while ($row = $res1->fetch_assoc()) {
        $gambar = $row["hasil"];
    }

    ?>
    <div class=" jumbotron jumbotron-fluid pb-0 mt-4">
        <div class="container bg-cover">
            <div class="center text-light">
                <div>
                    <h2 class="ml-4">Cari dari <?php echo $gambar; ?> buku </h2>
                    <form class=" form form-inline d-flex justify-content-center">
                        <input class="form-control form-control-lg bar" type="search" placeholder="Cari...." aria-label="Search">
                        <button class="btn bir btn-outline-primary btn-lg " type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->



    <!-- Koten Koleksi terbaru -->
    <section class="konten1">
        <div class="container mt-5 ">
            <div class="row mt-2">
                <div class="col text-light">
                    <h3 class=" mb-3 mt-3 text-dark text-center ">Hasil Pencarian</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="slider1 ">
        <div class="container">
            <div class="row " id="load-data1">
                <?php
                require_once '../public/koneksi.php';
                $cari = $_POST['cari'];
                $query = "SELECT * FROM tbl_buku WHERE judul like '%$cari%' OR pengarang like '%$cari%' ";

                $hmm1 = $database->prepare($query);
                $hmm1->execute();
                $res1 = $hmm1->get_result();
                while ($row = $res1->fetch_assoc()) {
                    $gambar = $row["cover"];


                ?>
                    <div class="col-md-2">
                        <div class="card mt-5 bg-transparent mb-5">
                            <?php if ($gambar == NULL) {
                            ?><img src="../public/img/buku/1.png" class="card-img-top mb-4" alt="gambar" style="width: 160px; height: 275px">
                            <?php
                            } else { ?>
                                <img src="../admin/img/<?php echo $gambar; ?>" class="card-img-top mb-4" alt="gambar" style="width: 160px; height: 275px">
                            <?php } ?>
                            <h5 class="text-center"><?= $row["judul"] ?></h5>
                            <a href="pinjam.php?buku=<?= $row["id"] ?>&judul=<?= $row["judul"] ?>">

                                <button class="btn btn-outline-primary btn-lg" style="width: 100%;">Pinjam</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>
    <?php
    include "../public/footer.php";
    ?>

</body>

</html>