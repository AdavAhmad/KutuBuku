<?php
// include_once 'inc/class.perpus.php';
// $anggota = new anggota;

$username = $_POST['username'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$jk = $_POST['gender'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

// if ($anggota->create($password, $username, $no_telp, $email,  $tgl_lahir, $jk, $prodi, $thn_masuk)) {
//     header('location:?page=anggota&msg=success');
// }
var_dump($username);
var_dump($repeat_password);
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost", "root", "");

// isikan dengan nama database yang akan di hubungkan
$db = mysqli_select_db($host, "db_perpus");
$kelsi = mysqli_query($host, "INSERT INTO tbl_anggota VALUES('$password','$username','$no_telp','$email','$jk')") or die(mysqli_error($host));
echo "<meta http-equiv='refresh' content='0; url=login-user.php'>";
