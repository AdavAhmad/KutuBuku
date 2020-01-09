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
    require_once '../public/header.php'
    ?>

</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="min-height: 650px">

                </div>
                <div class="col-md-6" style="min-height: 650px">

                </div>
            </div>
        </div>
    </div>






    <?php require_once '../public/footer.php'
    ?>
</body>


</html>