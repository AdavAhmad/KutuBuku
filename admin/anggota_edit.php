<?php
include_once '../inc/class.perpus.php';
$anggota = new anggota;

if (isset($_POST['btn-update'])) {
	$pass = $_GET['password'];
	$username = $_POST['username'];
	$telp = $_POST['no_telp'];
	$email = $_POST['email'];
	$jk = $_POST['jk'];

	if ($anggota->update($nim, $pass, $username, $telp, $email, $jk)) {
		$msg = "<div class='alert alert-info'>
			<strong>WOW!</strong> Record was updated successfully <a href='?page=anggota'>HOME</a>!
		</div>";
	} else {
		$msg = "<div class='alert alert-warning'>
		<strong>SORRY!</strong> ERROR while updating record !
		</div>";
	}
}

if (isset($_GET['username'])) {
	$nim = $_GET['username'];
	extract($anggota->getData($nim, 'tbl_anggota', 'username'));
}
?>

<div class="col-sm-9">
	<h4>Edit Data Anggota</h4>
	<hr>
</div>

<div class="col-md-9">

	<?php
	if (isset($msg)) {
		echo $msg;
	}
	?>

	<form method="post">
		<table class="table table-bordered">
			<tr>
				<td>Password</td>
				<td><input class="form-control" type="text" name="password" value="<?= $pass; ?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input class="form-control" type="text" name="nama" value="<?= $username; ?>"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input class="form-control" type="text" name="tempat_lahir" value="<?= $telp; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="emial" name="tgl_lahir" value="<?= $email; ?>" placeholder=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<?php if ($jk == "L") : ?>
						<input type="radio" value="L" name="jk" checked> Laki-laki
						<input type="radio" value="P" name="jk"> Perempuan
					<?php else : ?>
						<input type="radio" value="L" name="jk"> Laki-laki
						<input type="radio" value="P" name="jk" checked> Perempuan
					<?php endif ?>
				</td>
			</tr>
			<!-- <tr>
				<td>Prodi</td>
				<td>
					<select class="form-control" name="prodi" style="width: 200px">
						<option>Pillih Prodi</option>
						<option value="Teknik Informatika" <?php if ($prodi == 'Teknik Informatika') {
																echo "selected";
															} ?>>Teknik Informatika</option>
						<option value="Sistem Informasi" <?php if ($prodi == 'Sistem Informasi') {
																echo "selected";
															} ?>>Sistem Informasi</option>
						<option value="Managemen" <?php if ($prodi == 'Managemen') {
														echo "selected";
													} ?>>Managemen</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input class="form-control" type="text" name="thn_masuk" value="<?= $thn_masuk; ?>"></td>
			</tr> -->

			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" name="btn-update">
						<span class="glyphicon glyphicon-edit"></span> Update
					</button>
					<a href="?page=anggota" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>