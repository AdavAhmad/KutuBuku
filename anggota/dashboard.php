<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#profile :input").prop("disabled", true);
        });
    </script>

</head>

<?php

?>

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

    <!-- PHP -->
    <?php
    require_once '../public/koneksi.php';
    $query = "select * from tbl_anggota where username='{$_SESSION['nama']}'";
    $hmm1 = $database->prepare($query);
    $hmm1->execute();
    $res1 = $hmm1->get_result();
    while ($row = $res1->fetch_assoc()) {
        $pass = $row["password"];
        $name = $row["username"];
        $telp = $row["no_telp"];
        $email = $row["email"];
    }
    ?>
    <!-- Akhir PHP -->


    <section class="dummy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 bg-dark" style="min-height: 80px;">

                </div>
            </div>
        </div>
    </section>

    <section class="side">
        <div class="container ">
            <div class="row">
                <div class="col-md-4 m-3 rounded  shadow-lg" style="min-height:650px;">

                    <h1 class="text-center mt-5 ">Profile</h1>
                    <div class="container">
                        <img src="../public/img/pic.png" class="rounded-circle mx-auto d-block" alt="Cinque Terre" width="200" height="200">
                    </div>
                    <form action="" id="profile" class="form-profile text-center pt-5">
                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" class="form-control-plaintext text-center" value="<?php echo $name ?>">
                        </div>

                        <div class="form-group">
                            <label for="nama">Telp</label>
                            <input type="text" class="form-control-plaintext text-center" value="<?php echo $telp ?>">
                        </div>

                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="email" class="form-control-plaintext text-center" value="<?php echo $email ?>">
                        </div>
                    </form>
                    <input type="button" value="Edit" class="btn btn-lg btn-outline-success mx-auto d-block">

                </div>

                <div class="col-md-7" style="min-height:300px;">
                    <div class="row">
                        <div class="col-md-12 shadow-lg m-3 rounded " style="height:450px;">
                            <h1 class="text-center mt-5 ">Buku</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 shadow-lg m-3 rounded " style="height:200px;"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include "../public/footer.php"; ?>

</body>

</html>