<link rel="stylesheet" href="../public/css/style.css">
<div class="col-sm-9">
    <div class="row text-center mb-5">
        <h2>KutuBuku.lib</h2>
    </div>
    <div class="row mx-5 ">
        <div class="col-sm-3 text-center shadow py-5 rounded">
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
            <h1><?= $gambar ?></h1>
            <h2>Buku</h2>
        </div>

        <div class="col-sm-3 text-center shadow py-5 px-5 rounded">
            <?php
            require_once '../public/koneksi.php';
            $query = 'select count(*) as hasil from tbl_kategori';
            $hmm1 = $database->prepare($query);
            $hmm1->execute();
            $res1 = $hmm1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $gambar = $row["hasil"];
            }
            ?>
            <h1><?= $gambar ?></h1>
            <h2>Kategori</h2>
        </div>

        <div class="col-sm-3 text-center shadow py-5 px-5 rounded">
            <?php
            require_once '../public/koneksi.php';
            $query = 'select count(*) as hasil from tbl_transaksi';
            $hmm1 = $database->prepare($query);
            $hmm1->execute();
            $res1 = $hmm1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $gambar = $row["hasil"];
            }
            ?>
            <h1><?= $gambar ?></h1>
            <h2>Transaksi</h2>
        </div>

        <div class="col-sm-3 text-center shadow py-5 px-5 rounded">
            <?php
            require_once '../public/koneksi.php';
            $query = 'select count(*) as hasil from tbl_anggota';
            $hmm1 = $database->prepare($query);
            $hmm1->execute();
            $res1 = $hmm1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $gambar = $row["hasil"];
            }
            ?>
            <h1><?= $gambar ?></h1>
            <h2>Anggota</h2>
        </div>


    </div>
</div>