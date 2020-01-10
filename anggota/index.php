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

          <form action="cari_buku.php" method="POST" class=" form form-inline d-flex justify-content-center">
            <input name="cari" class="form-control form-control-lg bar" type="search" placeholder="Cari...." aria-label="Search">
            <button class="btn bir btn-outline-primary btn-lg " type="submit" type="button">Cari</button>
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
        <div class="col-md-1"></div>
        <div class="col-md-10 text-light" style="background-color:#F3EDD7">
          <h3 class=" mb-3 mt-3 text-dark text-center ">Koleksi Terbaru</h3>
        </div>
      </div>
    </div>
  </section>


  <section class="slider1 ">
    <div class="container">
      <div class="row " id="load-data1">
        <div class="col-md-1"></div>
        <?php
        require_once '../public/koneksi.php';
        $query = 'select cover,id,judul from tbl_buku order by id desc limit 5';
        $hmm1 = $database->prepare($query);
        $hmm1->execute();
        $res1 = $hmm1->get_result();
        while ($row = $res1->fetch_assoc()) {
          $gambar = $row["cover"];
        ?>
          <div class="col-md-2" style="background-color:#F3EDD7">
            <div class="card mt-5 bg-transparent mb-5">
              <?php if ($gambar == NULL) {
              ?><img src="../public/img/buku/1.png" class="card-img-top mb-4" alt="gambar" style="width: 160px; height: 275px">
              <?php
              } else { ?>

                <a href="detail_buku.php?buku=<?= $row["id"] ?>"><img src="../admin/img/<?php echo $gambar; ?>" class="card-img-top mb-4" alt="gambar" style="width: 160px; height: 275px"></a>
              <?php } ?>
              <h5 class="text-center"><?= $row["judul"] ?></h5>
              <a href="pinjam.php?buku=<?= $row["id"] ?>&judul=<?= $row["judul"] ?>"><button class="btn btn-outline-primary btn-lg" style="width: 100%;">Pinjam</button></a>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>
  <!-- Akhir Koleksi terbaru -->



  <!-- Genre 1 -->
  <section class="konten1">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mb-n2">
          <h3 class="text-dark text-center mx-n4" style="background-color:#F3EDD7">Karya Ilmiah</h3>
        </div>
      </div>

      <div class="row ">
        <div class="col-md-1"></div>
        <!-- <div class=" text-light mt-n2" style="background-color:#F3EDD7"> -->


        <?php
        require_once '../public/koneksi.php';
        $query = 'select cover,id,judul from tbl_buku where id_kategori=1 order by id desc limit 5';
        $hmm1 = $database->prepare($query);
        $hmm1->execute();
        $res1 = $hmm1->get_result();
        while ($row = $res1->fetch_assoc()) {
          $gambar = $row["cover"];
        ?>
          <div class="col-md-2" style="background-color:#F3EDD7">
            <div class="card mt-5 bg-transparent mb-5">
              <?php if ($gambar == NULL) {
              ?><img src="../public/img/buku/1.png" class="card-img-top mb-4" alt="gambar" style="width: 100%; height: 275px">
              <?php
              } else { ?>
                <img src="../admin/img/<?php echo $gambar; ?>" class="card-img-top mb-4" alt="gambar" style="width: 100%; height: 275px">
              <?php } ?>
              <h5 class="text-center"><?= $row["judul"] ?></h5>
              <a href="pinjam.php?buku=<?= $row["id"] ?>&judul=<?= $row["judul"] ?>"><button class="btn btn-outline-primary btn-lg" style="width: 100%;">Pinjam</button></a>
            </div>
          </div>
        <?php } ?>

        <!-- </div> -->
      </div>
    </div>
  </section>
  <!-- Akhir Genre 1 -->

  <!-- Genre 2 -->
  <section class="konten1">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mb-n2">
          <h3 class="text-dark text-center mx-n4" style="background-color:#F3EDD7">Novel</h3>
        </div>
      </div>

      <div class="row ">
        <div class="col-md-1"></div>
        <!-- <div class=" text-light mt-n2" style="background-color:#F3EDD7"> -->

        <?php
        require_once '../public/koneksi.php';
        $query = 'select cover,id,judul from tbl_buku where id_kategori=3 order by id desc limit 5';
        $hmm1 = $database->prepare($query);
        $hmm1->execute();
        $res1 = $hmm1->get_result();
        while ($row = $res1->fetch_assoc()) {
          $gambar = $row["cover"];
        ?>
          <div class="col-md-2" style="background-color:#F3EDD7">
            <div class="card mt-5 bg-transparent mb-5">
              <?php if ($gambar == NULL) {
              ?><img src="../public/img/buku/1.png" class="card-img-top mb-4" alt="gambar" style="width: 100%; height: 275px">
              <?php
              } else { ?>
                <img src="../admin/img/<?php echo $gambar; ?>" class="card-img-top mb-4" alt="gambar" style="width: 100%; height: 275px">
              <?php } ?>
              <h5 class="text-center"><?= $row["judul"] ?></h5>
              <a href="pinjam.php?buku=<?= $row["id"] ?>&judul=<?= $row["judul"] ?>"><button class="btn btn-outline-primary btn-lg" style="width: 100%;">Pinjam</button></a>
            </div>
          </div>
        <?php } ?>

        <!-- </div> -->
      </div>
    </div>
  </section>

  <!-- Akhir Genre 2 -->


  <?php
  error_reporting(0);
  switch ($_GET['page']) {
      // menu buku
    case 'buku':
      include "buku_data.php";
      break;
    case 'peminjaman':
      include "peminjaman.php";
      break;
    case 'buku_anggota':
      include "buku_data.php";
      break;
    case 'detil-buku':
      include "buku_detil.php";
      break;
    case 'buku_search':
      include "buku_search.php";
      break;

      // menu anggota
    case 'anggota':
      include "anggota_data.php";
      break;
    case 'anggota_search':
      include "anggota_search.php";
      break;
    case 'detil-anggota':
      include 'anggota_detil.php';
      break;

      // anggota
    case 'buku-angggota':
      include "anggota/buku_data.php";
      break;
    case 'buku-dipinjam':
      include "../buku-dipinjam.php";
      break;
    case 'pinjam-buku':
      include "../pinjam-buku.php";
      break;
    case 'transaksi_search':
      include "../transaksi_search.php";
      break;

      // Transaksi
    case 'transaksi':
      include "../transaksi_data.php";
      break;
    case 'transaksi_input':
      include "../transaksi_input.php";
      break;
    case 'transaksi_search':
      include "../transaksi_search.php";
      break;

    case 'laporan':
      include "../laporan.php";
      break;
    case 'delete':
      include "delete.php";
      break;

    case 'logout':
      include "../logout.php";
      break;

    default:
      include "home.php";
      break;
  }
  ?>

  </div>
  </div>
  </div>
  <br>
  <!-- <footer class="container-fluid">
      <p>
        zein
      </p>
    </footer> -->
  <?php
  include "../public/footer.php";
  ?>

</body>

</html>