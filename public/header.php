<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="../public/script.js"></script>
    <link rel="shortcut icon" href="../public/img/logo.png">
</head>

<!-- Header -->
<section class="atas bg-dark fixed-top">
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="navbar navbar-expand-lg ">
                <a class="navbar-brand text-left" href="#"><img src="../public/img/logop.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="list-group-item active">
                    Wellcome : <font color=""><?php echo $_SESSION['nama']; ?></font>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav pr-5 pl-5 ">
                        <li class="nav-item active mr-3">
                            <a class="nav-link" href="../anggota/index.php" style="font-size:16px">
                                Menu Utama
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <div class="dropdown mt-2">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" style="font-size:17px">
                                    Kategori
                                </a>
                                <div class="dropdown-menu">
                                    <?php
                                    $query = "select * from tbl_kategori";
                                    $query_buku = "select * from tbl_buku where id='{$_SESSION['nama']}'";
                                    $host = mysqli_connect("localhost", "root", "");
                                    $db = mysqli_select_db($host, "db_perpus");
                                    $res1 = mysqli_query($host, $query) or die(mysqli_error($host));
                                    foreach ($res1 as $row) {
                                        $nama = $row['kategori'];
                                    ?>
                                        <a class="dropdown-item" href="kategori.php?buku=<?= $row["id_kategori"] ?>"><?= $nama ?></a>
                                    <?php }     ?>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mr-3 ">
                            <a class="nav-link " href="../anggota/dashboard.php" style="font-size:16px">
                                Buku Saya
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">

                        <!-- <button class="btn btn btn-outline-primary ml-5">Masuk</button> -->
                        <li><a href="?page=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Akhir Header -->