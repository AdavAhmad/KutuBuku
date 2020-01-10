<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Buku</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">


    <?php
    session_start();
    if (!isset($_SESSION['nama']) || $_SESSION['level'] != "anggota") {
        echo "<script>alert('Silahkan login terlebih dahulu')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
    } else {

        include_once 'head.php';
    }
    require '../public/header.php';
    require_once '../public/koneksi.php';
    $id_buku = isset($_GET['buku']) ? $_GET['buku'] : "";
    $query = "select * from tbl_buku where id=$id_buku";
    $hmm1 = $database->prepare($query);
    $hmm1->execute();
    $res1 = $hmm1->get_result();
    while ($row = $res1->fetch_assoc()) {

        $gambar = $row["cover"];
        $judul = $row["judul"];
        $pengarang = $row["pengarang"];
        $terbit = $row["penerbit"];
        $thn = $row["thn_terbit"];
        $isbn = $row["isbn"];
        $judul = $row["judul"];
        var_dump($row);
    }

    ?>

</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row" style="height: 80px;"></div>
            <div class="row mb-5">
                <div class="col-md-3 shadow" style="min-height: 500px">
                    <img src="../admin/img/<?= $gambar; ?>" alt="" class="mx-auto d-block" style="margin-top: 35%;">
                </div>
                <div class="col-md-6 shadow ml-3 pl-5 pt-5" style="min-height: 500px">
                    <h2 class="text-center">Detail Buku</h2>
                    <div class="my-5">
                        <h4>Judul</h4>
                        <h5><?= $judul ?></h5>
                    </div>

                    <div class="my-5">
                        <h4>Pengarang</h4>
                        <h5><?= $pengarang ?></h5>
                    </div>

                    <div class="my-5">
                        <h4>Penerbit</h4>
                        <h5><?= $terbit ?></h5>
                    </div>


                    <div class="my-5">
                        <h4>Tahun</h4>
                        <h5><?= $thn ?></h5>
                    </div>

                    <div class="my-5">
                        <h4>ISBN</h4>
                        <h5><?= $isbn ?></h5>
                    </div>

                    <a href="pinjam.php?buku=<?= $id_buku ?>&judul=<?= $judul ?>"><button class="btn btn-primary btn-lg" style="width: 150px;">Pinjam</button></a>




                </div>
            </div>
        </div>
    </div>






    <?php require_once '../public/footer.php'
    ?>
</body>


</html>