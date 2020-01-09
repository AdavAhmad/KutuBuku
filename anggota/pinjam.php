<?php
session_start();
include_once "../inc/class.perpus.php";
$transaksi = new transaksi;
$pinjam = date('d-m-Y');
$tuju_hari = mktime(0, 0, 0, date('n'), date("j") + 7, date("Y"));
$kembali = date("d-m-Y", $tuju_hari);

// $tgl_pinjam     = isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : "";
$tgl_pinjam = date('d-m-Y');
// $tgl_kembali     = isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : "";
$isn = date('d') + 7;
$tgl_kembali = date($isn . '-m-Y');

$id_buku = isset($_GET['buku']) ? $_GET['buku'] : "";
$buku = isset($_GET['judul']) ? $_GET['judul'] : "";
$id = $buku;
var_dump($id_buku);
// $pecah_buku = explode(".", $dapat_buku);
// $id = $pecah_buku[0];
// $buku = $pecah_buku[1];
// $id_buku = $pecah_buku[0];

// $dapat_mhs = isset($_POST['peminjam']) ? $_POST['peminjam'] : "";
// $dapat_mhs = $_SESSION['id'];
// var_dump($dapat_mhs);
// $pecah_mhs = explode(".", $dapat_mhs);
$id_mhs = $_SESSION["password"];
// var_dump($pecah_mhs);
// $mhs = $pecah_mhs[1];
$mhs = $_SESSION["nama"];
var_dump($id_mhs);
$ket = isset($_POST['ket']) ? $_POST['ket'] : "";

// if ($mhs != null) {
//     $query = "SELECT * FROM tbl_buku WHERE id ='$id_buku'";
//     foreach ($transaksi->showData($query) as $bukus) {
//         $sisa = $bukus['jumlah_buku'];
//     }
// if ($sisa == 0) {
//     echo "<script>alert('Stok bukunya telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";
//     echo "<meta http-equiv='refresh' content='0; url=?page=index&msg=gagal'>";
// } else {
$qt = $transaksi->t_transaksi($buku, $id_mhs, $mhs, $tgl_pinjam, $tgl_kembali, 'Pinjam', 'dipinjam 7 hari', $id_buku);
$qu = $transaksi->u_buku($id, 1);
if ($qt && $qu) {
    echo "<script>alert('Transaksi Sukses');</script>";
    // echo "<meta http-equiv='refresh' content='1; url=?page=dashboard&msg=success'>";
    // include_once "dashboard.php";
    echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
} else {
    echo "<script>alert('Transaksi Gagal');</script>";
    // echo "<meta http-equiv='refresh' content='1; url=?page=buku_anggota&msg=gagal'>";
    include_once "index.php";
}
var_dump($qt);
var_dump($qu);
    // }
// }
