<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Admin</title>

	<meta name="author" content="uttaraitpark">
	<meta name="copyright" content="uttaraitpark">
	<link rel="shortcut icon" type="image/png" href="img/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/tree-viewer.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrapper">
		<div class="left-side">
			<div class="logo">
				<img src="img/cem.png" alt="" />
			</div>
			<div class="left-content">
				<ul role="tablist">
					<li role="presentation" class="active"><a href="#one" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-home"></i></span>Dashboard</a></li>
					<li role="presentation"><a href="#two" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-book"></i></span>Buku</a></li>
					<li role="presentation"><a href="#three" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-list"></i></span>Kategori</a></li>
					<li role="presentation"><a href="#six" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-user"></i></span>Anggota</a></li>
					<li role="presentation"><a href="#source" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-exchange"></i></span>Pinjaman</a></li>
					<li role="presentation"><a href="#support" aria-controls="home" role="tab" data-toggle="tab"><span><i class="fa fa-support"></i></span>Satulagi</a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>Copyright &#169; 2018 Ngga ada</p>
			</div>
		</div>



		<?php
		require_once '../public/koneksi.php';
		$query = 'select count(*) as hasil from tb_buku';

		$hmm1 = $database->prepare($query);
		$hmm1->execute();
		$res1 = $hmm1->get_result();
		while ($row = $res1->fetch_assoc()) {
			$hasil = $row["hasil"];
		?>
		<?php } ?>

		<?php
		require_once '../public/koneksi.php';
		$query = 'select count(*) as hasil from kategori';

		$hmm1 = $database->prepare($query);
		$hmm1->execute();
		$res1 = $hmm1->get_result();
		while ($row = $res1->fetch_assoc()) {
			$hasil2 = $row["hasil"];
		?>
		<?php } ?>

		<?php
		require_once '../public/koneksi.php';
		$query = 'select count(*) as hasil from user';

		$hmm1 = $database->prepare($query);
		$hmm1->execute();
		$res1 = $hmm1->get_result();
		while ($row = $res1->fetch_assoc()) {
			$hasil3 = $row["hasil"];
		?>
		<?php } ?>




		<div class="right-side">
			<div class="right-content">
				<div id="one" class="content active fade in">
					<h1>Dashboard</h1>
					<div class="row text-center">
						<div class="col-md-4">
							<h3>Jumlah buku</h3>
							<h2><?php echo $hasil; ?></h2>
						</div>

						<div class="col-md-4">
							<h3>Jumlah kategori</h3>
							<h2><?php echo $hasil2; ?></h2>
						</div>
						<div class="col-md-4">
							<h3>Jumlah anggota</h3>
							<h2><?php echo $hasil3; ?></h2>
						</div>
					</div>
					<p class="bg-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio! Dicta, dolorum voluptate! Soluta asperiores dolores cum dolor impedit ipsam, itaque enim earum in laudantium accusantium dignissimos maiores molestias facilis.</p>
				</div>
				<div id="two" class="content fade">
					<h1>BUKU</h1>

				</div>
				<div id="three" class="content fade">

					<h1> Kategori </h1>



				</div>

				<div id="six" class="content fade">

					<div class="plugins-area">
						<h1>ANGGOTA</h1>
					</div>

				</div>


				<div id="source" class="content fade">
					<h1> Pinjaman</h1>


					</pre>
					<!-- code pre tag end -->
				</div>

				<div id="support" class="content fade">
					<h1> KOSONG</h1>


					</pre>
					<!-- code pre tag end -->
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jstree.min.js"></script>
	<script src="js/jstree.active.js"></script>
	<script src="js/main.js"></script>
</body>

</html>