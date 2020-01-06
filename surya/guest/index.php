<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./surya/finpro/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <script type="text/javascript" src="../public/script.js"></script>

</head>


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


<body style="background-color:#E1DCC5">
    <?php
    include "../public/header.php";
    ?>
    <!-- Jumbotron -->
    <?php
    require_once '../public/koneksi.php';
    $query = 'select count(*) as hasil from tb_buku';

    $hmm1 = $database->prepare($query);
    $hmm1->execute();
    $res1 = $hmm1->get_result();
    while ($row = $res1->fetch_assoc()) {
        $gambar = $row["hasil"];
    ?>
    <?php } ?>
    <div class="jumbotron jumbotron-fluid pb-0 bg-cover mt-5">
        <div class="container">
            <div class="center text-light">
                <div>
                    <h5>Cari dari <?php echo $gambar; ?> buku </h5>
                    <form class="form form-inline d-flex justify-content-center">
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
        <div class="container mt-5">
            <div class="row mt-2">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-light " style="background-color:#F3EDD7">
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
                $query = 'select gambar from tb_buku order by id_buku desc limit 5';
                $hmm1 = $database->prepare($query);
                $hmm1->execute();
                $res1 = $hmm1->get_result();
                while ($row = $res1->fetch_assoc()) {
                    $gambar = $row["gambar"];
                ?>
                    <div class="col-md-2" style="background-color:#F3EDD7">
                        <div class="card mt-5 bg-transparent mb-5">
                            <img src="<?php echo $gambar; ?>" class="card-img-top mb-4" alt="gambar">
                            <button class="btn btn-outline-primary btn-lg">Pinjam</button>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>
    <!-- Akhir Koleksi terbaru -->

    <!-- Terfavorit -->

    <?php
    require_once '../public/koneksi.php';
    $query = 'select * from tb_buku inner join pinjaman on tb_buku.id_buku=pinjaman.id_buku order by id_pinjam desc limit 1';
    $hmm1 = $database->prepare($query);
    $hmm1->execute();
    $res1 = $hmm1->get_result();
    while ($row = $res1->fetch_assoc()) {
        $id = $row["id_buku"];
        $kategori = $row["kategori"];
        $judul = $row["judul"];
        $pengarang = $row["pengarang"];
        $penerbit = $row["penerbit"];
        $tahun = $row["tahun"];
        $des = $row["deskripsi"];
        $gambar = $row["gambar"];
        $berkas = $row["file"];

    ?>


        <section class="favorit">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 text-center py-3 bg-light">
                        <h3>Baru di pinjam</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1 bg-light"></div>
                    <div class="col-md-4 bg-light py-5 ">
                        <img src="<?php echo $gambar; ?>" alt="" class="gambar">
                    </div>
                    <div class="col-md-4 py-5 bg-light">
                        <div class="fav">
                            <h3><?php echo $judul; ?></h3>
                            <h4 style='color:grey'><?php echo $tahun; ?></h4>
                            <p><?php echo $des; ?></p>
                            <button class="btn btn-primary btn-lg button">Pinjam</button>
                        </div>
                    </div>
                    <div class="col-md-1 bg-light"></div>
                    <div class="col-md-1 "></div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- Akhir Terfavorit -->

    <!-- Genre 1 -->
    <section class="konten1">
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-light mt-n2" style="background-color:#F3EDD7">
                    <h3 class=" mb-3 mt-3 text-dark text-center">Fantasi</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Genre 1 -->

    <!-- Genre 2 -->

    <!-- Akhir Genre 2 -->




</body>

<?php
include "../public/footer.php";
?>