<?php
session_start();
include_once "../inc/class.perpus.php";

$buku = isset($_GET['buku']) ? $_GET['buku'] : "";

$query = "update  tbl_transaksi set status='Kembali' where id=$buku";
// var_dump($query);
// $hmm1 = $database->prepare($query);
// var_dump($hmm1);
// $hmm1->execute();
// $res1 = $hmm1->get_result();
$host = mysqli_connect("localhost", "root", "");

// isikan dengan nama database yang akan di hubungkan
$db = mysqli_select_db($host, "db_perpus");
$res1 = mysqli_query($host, $query) or die(mysqli_error($host));
echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
