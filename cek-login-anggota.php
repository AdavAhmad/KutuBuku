<?php

session_start();
include_once('inc/config.php');

if (isset($_POST['submit'])) {
	$errMsg = '';
	// username and password sent from Form
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	// $password = md5($password);

	// if ($errMsg == '') {
	$stmt = $db_con->prepare('SELECT * FROM tbl_anggota WHERE username = :username');
	$stmt->bindparam(':username', $username);
	$stmt->execute();
	$results = $stmt->fetch(PDO::FETCH_ASSOC);
	// echo $results['password'];
	if (count($results) > 0 && $password == $results['password']) {
		$_SESSION['id'] = $results['id'];
		$_SESSION['nama'] = $results['username'];
		$_SESSION['password'] = $results['password'];
		// $_SESSION['username'] = $results['nama'];
		$_SESSION['level'] = 'anggota';
		$level = $_SESSION['level'];
		if ($_SESSION['level'] == 'admin') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
			exit;
		} else {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=guest/index.php'>";
		}
		if ($_SESSION['level'] == 'anggota') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=anggota/index.php'>";
			exit;
		}
	} else {
		// $errMsg .= 'Username and Password are not found<br>';
		echo "<script>alert('Username and Password are not found');</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	}
	// }

}
