<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/css/style.css">
<script type="text/javascript" src="../public/script.js"></script>

<body style="background-color:#ffffff">
    <?php
    include "../public/header.php";
    ?>
    

    <!-- Slider1 -->
    <section class="slider0 ">
        <div class="container">
            <div class="row " id="load-data1">
                <div class="col-md-1"></div>
                <?php
                require_once '../public/koneksi.php'; 
                $query = 'select * from kategori order by id asc';
                $hmm1 = $db1->prepare($query);
                $hmm1->execute();
                $res1 = $hmm1->get_result();
                while ($row = $res1->fetch_assoc()) {
                    $gambar=$row["gambar"];
                    $id = $row["Id"];
                
                    $kategori = $row["kategori"];
                    
                    ?>
                    <div class="col-md-2">
                        <div class="card mt-4 bg-transparent">
                            <img src="<?php echo $gambar?>" class="card-img-top mb-1" alt="gambar">
                            <p class="text-center"><?php echo $kategori; ?></p>
                            <a href="kelsi/<?= $id ?>">
                            <button class="btn btn-outline-primary btn-lg">Buka</button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

</body>

<?php
include "../public/footer.php";
?>