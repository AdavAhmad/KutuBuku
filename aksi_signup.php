<?php
// include_once 'inc/class.perpus.php';
// $anggota = new anggota;

$username = $_POST['username'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

// if ($anggota->create($password, $username, $no_telp, $email,  $tgl_lahir, $jk, $prodi, $thn_masuk)) {
//     header('location:?page=anggota&msg=success');
// }
var_dump($username);
var_dump($repeat_password);
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost", "root", "");

// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("db_perpus");
$kelsi = mysql_query("INSERT INTO tbl_anggota VALUES('$password','$username','$no_telp','$email','','','','')") or die(mysql_error());
var_dump($kelsi);
