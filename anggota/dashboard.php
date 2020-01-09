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
                    <!-- Profile -->
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


                <!-- Buku -->


                <div class="col-md-7" style="min-height:300px;">
                    <div class="row">
                        <div class="col-md-12 shadow-lg m-3 rounded " style="min-height:650px;">
                            <h1 class="text-center mt-5 ">Buku</h1>

                            <div class="tampil">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tanggal Pinjam</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" colspan="2">Aksi</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $query = "select * from tbl_transaksi where status='Pinjam' and nama='{$_SESSION['nama']}'";
                                    $query_buku = "select * from tbl_buku where id='{$_SESSION['nama']}'";
                                    $host = mysqli_connect("localhost", "root", "");
                                    $db = mysqli_select_db($host, "db_perpus");
                                    $res1 = mysqli_query($host, $query) or die(mysqli_error($host));
                                    // var_dump($res1);

                                    foreach ($res1 as $row) {
                                        $nama = $row['judul'];
                                        $pinjam = $row['tgl_pinjam'];
                                        $status = $row['status'];
                                        $idb = $row['id_buku'];
                                    ?>
                                        <?php
                                        $query_buku = "select * from tbl_buku where id='$idb'";
                                        $host = mysqli_connect("localhost", "root", "");
                                        $db = mysqli_select_db($host, "db_perpus");
                                        $res2 = mysqli_query($host, $query_buku) or die(mysqli_error($host));
                                        //var_dump($res2);
                                        foreach ($res2 as $row2) {
                                            $bukunya = $row2['bukunya'];
                                            //var_dump($row2);
                                        }
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $nama ?></td>
                                                <td><?= $pinjam ?></td>
                                                <td><?= $status ?></td>
                                                <td>
                                                    <a href="<?= "../admin/file/" . $bukunya; ?>"><input type="button" value="Baca" class="btn btn-primary"></a>
                                                    <a href="act_kembali.php?buku=<?= $row["id"] ?>"><input type="button" value="Hapus" class="btn btn-danger"></a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>








                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include "../public/footer.php"; ?>

</body>

</html>