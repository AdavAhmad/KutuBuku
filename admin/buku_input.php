<?php
include_once '../inc/class.perpus.php';
$obj = new buku;
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['btn-save'])) {
	$ekstensi_diperbolehkan	= array('png', 'jpg', 'pdf', 'doc', 'docx', 'jpeg', 'gif');
	$nama = $_FILES['filenya']['name'];
	$cover = $_FILES['cover']['name'];

	$x = explode('.', $nama);
	$y = explode('.', $cover);
	$ekstensi = strtolower(end($x));
	$ekstensi2 = strtolower(end($y));
	$ukuran	= $_FILES['filenya']['size'];
	$ukuran2 = $_FILES['cover']['size'];
	$file_tmp = $_FILES['filenya']['tmp_name'];
	$file_tmp2 = $_FILES['cover']['tmp_name'];
	// var_dump($file_tmp2);

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 104004070) {
			move_uploaded_file($file_tmp, 'file/' . $nama);
			move_uploaded_file($file_tmp2, 'img/' . $cover);
			// $query = mysqli_query($database, "INSERT INTO upload VALUES(NULL, '$nama')");
			// if ($query) {
			// 	echo 'FILE BERHASIL DI UPLOAD';
			// } else {
			// 	echo 'GAGAL MENGUPLOAD GAMBAR';
			// }
		} else {
			echo 'UKURAN FILE TERLALU BESAR';
		}
	} else {
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}

	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$thn_terbit = $_POST['thn_terbit'];
	$isbn = $_POST['isbn'];
	$jumlah_buku = $_POST['jumlah_buku'];
	$lokasi = $_POST['lokasi'];
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal . ' ' . $jam;
	$bukunya = $nama;
	$covernya = $cover;
	$kategori = $_POST['kategori'];

	var_dump($kategori);
	//var_dump($obj->create($judul, $pengarang, $penerbit, $thn_terbit, $isbn, $jumlah_buku, $lokasi, $waktu, $bukunya, $covernya));
	if ($obj->create($judul, $pengarang, $penerbit, $thn_terbit, $isbn, $jumlah_buku, $lokasi, $waktu, $bukunya, $covernya, $kategori)) {
		header('location:?page=buku&msg=success');
	}
}

?>

<div class="col-sm-9">
	<h4>Input Data Buku</h4>
	<hr>
</div>

<div class="col-md-9">

	<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul" class="form-control" required></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" class="form-control" required></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="penerbit" class="form-control" required></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td>
					<select name="thn_terbit" class="form-control" style="width: 200px">
						<option>- Pilih Tahun -</option>
						<?php
						for ($i = date('Y'); $i >= 2000; $i--) {
							echo "<option>" . $i . "</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode ISBN</td>
				<td><input type="text" name="isbn" class="form-control" required></td>
			</tr>
			<!-- <tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah_buku" class="form-control" required></td>
			</tr> -->
			<!-- <tr>
				<td>Lokasi</td>
				<td>
					<select name="lokasi" class="form-control" style="width: 200px">
						<option>Pilih Lokasi</option>
						<option value="rak1">Rak 1</option>
						<option value="rak2">Rak 2</option>
						<option value="rak3">Rak 3</option>
					</select>
				</td>
			</tr> -->
			<tr>
				<td>File nya</td>
				<td><input type="file" name="filenya" class="form-control" required></td>
			</tr>

			<tr>
				<td>Cover</td>
				<td><input type="file" name="cover" class="form-control" required></td>
			</tr>



			<tr>
				<td>Kategori</td>
				<td><select name="kategori" id="kategori">
						< <?php
							require_once '../public/koneksi.php';
							$query = 'select * from tbl_kategori';
							$hmm1 = $database->prepare($query);
							$hmm1->execute();
							$res1 = $hmm1->get_result();
							while ($row = $res1->fetch_assoc()) {
								$nama = $row["kategori"];
								$id_kat = $row["id_kategori"];

							?> <option value="<?= $id_kat ?>"><?= $nama ?>
							</option>
						<?php } ?>
					</select></td>
			</tr>

			<tr>
				<td colspan="2">
					<button type="submit" class="btn btn-primary" name="btn-save">
						<span class="glyphicon glyphicon-plus"></span> Tambah Buku
					</button>
					<a href="?page=buku" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp;Kembali</a>
				</td>
			</tr>
		</table>
	</form>

</div>