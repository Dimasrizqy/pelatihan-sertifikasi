<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	
	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
	<div class="container-fluid">
		<div id="nama-alamat-perpustakaan-container">
			<div class="nama-alamat-perpustakaan">
				<h1> PERPUSTAKAAN UMUM </h1>
			</div>
			<div class="nama-alamat-perpustakaan">
				<h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
			</div>
		</div>
	</div>
	</nav>
	
	<!-- navbar -->
	<div>
		<div id="header2">
			<div id="nama-user">Hai Admin !</div>
		</div>
			<div id="sidebar"> 
				<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
			<ul class="list-unstyled ps-0">
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
				<p style="width:200px; height: 40px;" class="form-control btn-warning">Home</p>
				</button>
				<div class="collapse" id="home-collapse" style="">
				<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
					<li><a class="link-dark rounded" href="index.php?p=beranda">Beranda</a></li>
				</ul>
				</div>
			</li>
			<li class="mb-1">
				<button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
				<p style="width:200px; height: 40px;" class="form-control btn-warning">Entry Data & Transaksi</p>
				</button>
				<div class="collapse" id="dashboard-collapse" style="">
				<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
					<li><a class="link-dark rounded" href="index.php?p=anggota">Data Anggota</a></li>
					<li><a class="link-dark rounded"href="index.php?p=buku">Data Buku</a></li>
					<li><a class="link-dark rounded"href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
				</ul>
				</div>
			</li>
			</ul>
		</div>
 		</div>	
		<div id="content-container">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						<div class="panel-footer">							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div id="footer"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
		</div>		
</body>
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

    

<!-- Bootstrap core CSS -->
<link href="./Sidebars · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


<style>
  .bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
  }

  @media (min-width: 768px) {
	.bd-placeholder-img-lg {
	  font-size: 3.5rem;
	}
  }
</style>

<script src="./Sidebars · Bootstrap v5.1_files/bootstrap.bundle.min.js.download" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="./Sidebars · Bootstrap v5.1_files/sidebars.js.download"></script>

</html>