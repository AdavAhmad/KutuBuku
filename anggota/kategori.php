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
    require_once '../public/header.php';
    ?>

</head>

<body style="background-color:#F3EDD7;">
    <section class="dumy">
        <div class="row">
            <div class="col" style="height: 80px">

            </div>
        </div>
    </section>
    <section class="kategori">
        <div class="container">
            <div class="row" style="min-height: 500px;">
                <?php
                require_once '../public/koneksi.php';
                $id = isset($_GET['buku']) ? $_GET['buku'] : "";
                $query = "select cover,id,judul from tbl_buku where id_kategori='$id'";
                $hmm1 = $database->prepare($query);
                $hmm1->execute();
                $res1 = $hmm1->get_result();
                while ($row = $res1->fetch_assoc()) {
                    $gambar = $row["cover"];

                ?>
                    <div class="col-md-2">
                        <div class="card bg-transparent my-5">
                            <?php if ($gambar == NULL) {
                            ?><img src="../public/img/buku/1.png" class="card-img-top mb-4 " alt="gambar" style="width: 100%; height: 275px">
                            <?php
                            } else { ?>
                                <img src="../admin/img/<?php echo $gambar; ?>" class="card-img-top mb-4" alt="gambar" style="width: 100%; height: 275px">
                            <?php } ?>
                            <h5 class="text-center"><?= $row["judul"] ?></h5>
                            <a href="pinjam.php?buku=<?= $row["id"] ?>&judul=<?= $row["judul"] ?>"><button class="btn btn-outline-primary btn-lg" style="width: 100%;">Pinjam</button></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>





    <?php require_once '../public/footer.php' ?>
</body>


</html>