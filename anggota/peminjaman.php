<div class="col-sm-9">
	<h4>Data Buku yang kamu pinjam</h4>
	<hr>
</div>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<!-- <a  class="btn btn-success" href="?page=buku_input"><span class="glyphicon glyphicon-plus"></span> Input Buku</a><br> -->
			<div class="panel-right" style="width: 250px; margin-left: 70%">
				<form action="?page=buku_search" method="post">
					<div class="input-group">
						<input type="text" name="cari" class="form-control" placeholder="Cari Judul, Pengarang..">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</div>

		</div>
		<div class="panel-body">
			<br>
			<?php
			include_once('inc/config.php');
			if (isset($_GET['msg'])) {
				if ($_GET['msg'] == "success") {
					$msg = "
				<div class='alert alert-success'>
    		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    		<strong>Success!</strong> Data berhasil di tambah.
  			</div>
				";
				} elseif ($_GET['msg'] == "delete") {
					$msg = "
				<div class=\"alert alert-danger\">
    		<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
    		<strong>Success!</strong> Data berhasil di hapus.
  			</div>
				";
				}
			}

			if (isset($msg)) {
				echo $msg;
			}
			?>
			<!-- <a class="btn btn-success" href="?page=pinjam-buku<?= $value['id'] ?>">pinjam</a> -->
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th width="5%">No</th>
						<th>Judul Buku</th>
						<!-- <th>Pengarang</th> -->
						<th>Penerbit</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// $db_con = new PDO('mysql:host=localhost;dbname=db_perpus', 'root', '');
					$mysqli = new mysqli("localhost", "root", "", "db_perpus");
					// var_dump($mysqli);
					include_once '../inc/class.perpus.php';
					$buku = new buku;
					$records_per_page = 5;
					$alfi = $_SESSION['nim'];
					$query = "SELECT * FROM tbl_transaksi where nim = $alfi and status = 'Pinjam'";
					// var_dump($query);
					// $query = "SELECT * FROM tbl_buku";
					$newquery = $buku->paging($query, $records_per_page);
					// penomoran halaman data pada halaman
					if (isset($_GET['page_no'])) {
						$page = $_GET['page_no'];
					}
					if (empty($page)) {
						$posisi = 0;
						$halaman = 1;
					} else {
						$posisi = ($page - 1) * $records_per_page;
					}
					$no = 1 + $posisi;

					foreach ($buku->showData($newquery) as $value) {
					?>
						<tr style="text-align: center;">
							<td><?php echo $no; ?></td>
							<td><a href="?page=detil-buku&id=<?= $value['id'] ?>"><?= $value['judul']; ?></a></td>
							<!-- <td><?= $value['pengarang']; ?></td>
							<td><?= $value['penerbit'] ?></td> -->
							<?php
							$kelsi = $value['id_buku'];
							// echo "<hr>";
							// var_dump($value['id_buku']);
							// echo "<hr>";

							$isna = mysqli_query($mysqli, "select * from tbl_buku where id = $kelsi");
							$alfi = mysqli_fetch_array($isna);
							// echo "<hr>";
							// var_dump($alfi);
							// echo "<hr>";
							?>
							<td><a class="btn btn-info" href="<?= "../admin/file/" . $alfi['bukunya']; ?>">Baca Buku</a></td>
							<td><a class="btn btn-danger" href="?page=transaksi&proses_anggota=Kembali&id=<?= $value['id']; ?>&judul=<?= $value['judul']; ?>">Kembalikan</a></td>
						</tr>
					<?php
						$no++;
						// var_dump($value);
					}
					?>
				</tbody>
				<tr>
					<td colspan="7" align="center">
						<div class="pagination-wrap">
							<?php $buku->paginglink($query, $records_per_page); ?>
						</div>
					</td>
				</tr>
			</table>
			Jumlah : <b><?php $buku->jumlah($query); ?> Buku</b>
		</div>
	</div>
</div>