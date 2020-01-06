<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
    
    <title>Data Buku Admin</title>
	<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">

	<link href="css/bootstrap.css"rel="stylesheet"/>
    
</head>

<!-- Header -->
<section class="atas">
    <div class="bg-dark text-light">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center mb-3 mt-3">Daftar Buku Yang Dipinjam</h5>
            </div>
        </div>
    </div>
</section>

<section class="navbar d-flex justify-content-around">
    <div class="row">
        <div class="col">
            <div class="navbar navbar-expand-lg ">
                <a class="navbar-brand" href="#"><img src="../public/img/rsz_logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav pr-5 pl-5 ">
                        <li class="nav-item active mr-3">
                            <a class="nav-link" href="#">
                                <h5>Menu Utama</h5>
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#">
                                <h5>Buku Saya</h5>
                            </a>
                        </li>
                        <li class="nav-item mr-3 ">
                            <a class="nav-link " href="#">
                                <h5>Profil</h5>
                            </a>
                        </li>
                    </ul>
                	<script src="jquery-1.12.0.min.js"></script>
	<script src="jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Akhir Header -->