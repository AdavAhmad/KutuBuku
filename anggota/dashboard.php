<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['nama']) || $_SESSION['level'] != "anggota") {
        echo "<script>alert('Silahkan login terlebih dahulu')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
    } else {

        include_once 'head.php';
    }
    ?>

    <?php include "../public/header.php"; ?>

    <div class="container-fluid">

        <div class="container-fluid">
            <div class="row content">
                <div class="list-group col-sm-3">
                    <a href="#" class="list-group-item active">
                        Wellcome : <font color=""><?php echo $_SESSION['nama']; ?></font>
                    </a>
                    <a class="list-group-item" href="?page"><span class="glyphicon glyphicon-home"></span> Home</a>
                    <a class="list-group-item" href="?page=buku"><i class="glyphicon glyphicon-book"></i> Cari Buku</a>
                    <a class="list-group-item" href="?page=peminjaman"><i class="glyphicon glyphicon-list-alt"></i> Peminjaman</a>
                    <a class="list-group-item" href="?page=riwayat"><i class="glyphicon glyphicon-random"></i> Riwayat</a>
                    <a class="list-group-item" href="?page=laporan"><i class="glyphicon glyphicon-file"></i> Laporan</a>
                </div>
            </div>
        </div>

        <?php include "../public/footer.php"; ?>

</body>

</html>