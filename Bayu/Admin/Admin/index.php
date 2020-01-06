<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku Admin</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/css/style.css">
<script type="text/javascript" src="../public/script.js"></script>
    
    <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">

	<link href="bootstrap.css"rel="stylesheet"/>
</head>
<body style="background-color:#E1DCC5">
	<?php
    include "../public/header.php";
    ?>


	<table id="dataTables" class="table table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama Buku</th>
                <th>Kode Buku</th>
                <th>Id Pinjam</th>
                <th>Tanggal Pinjam</th>
                 <th>Tanggal_kembali</th>
                

            </tr>
        </thead>
		
		<tbody>
			<?php
			$conn = new mysqli("localhost", "root", "", "daftar_buku");
			if ($conn->connect_errno) {
				echo "Failed to connect to MySQL: " . $conn->connect_error;
			}
			
			$no = 1;
			$res = $conn->query("SELECT * FROM admin");
			while($row = $res->fetch_assoc()){
				echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$row['Nama_buku'].'</td>
					<td>'.$row['Kode_buku'].'</td>	
					<td>'.$row['Id_peminjam'].'</td>	
					<td>'.$row['Tanggal_pinjam'].'</td>
					<td>'.$row['Tanggal_kembali'].'</td>
				</tr>
				';
				$no++;
			}
			?>
		</tbody>
		<tfoot>
            <tr>
                

            </tr>
        </tfoot>
	</table>
	
	<script src="jquery-1.12.0.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>

</body>
<?php
include "../public/footer.php";
?>
</html> 
