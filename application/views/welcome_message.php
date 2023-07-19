<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Penerimaan RASKIN</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="top mt-2">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand fw-bold" href="#">SPK</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ms-auto gap-3">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Beranda</a>
							</li>
							<li class="nav-item"> 
								<a class="nav-link" href="Data">Data Penerima</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Algoritma">Alur</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="container mb-5 pb-5">
			<div class="d-flex flex-row gap-5" id="Kelompok">
				<div class="d-flex align-items-center">
					<div class="d-flex flex-column">
						<div class="line-1"></div>
						<h1 class="fw-bold">Sistem Penunjang Keputusan</h1>
						<a href="Penerima" class="nav-link text-center fw-bold AddBut mt-3">Tambah Data</a>
					</div>
				</div>
				<div class="d-flex flex-column">
					<img src="Assets/img/hand.svg" alt="IMGleft" width="500">
				</div>
			</div>
		</div>
		<div class="container mt-5 pt-5 mb-5 ">
			<h3 class="fw-bold">Anggota Kelompok</h3>
			<div class="d-flex justify-content-center gap-5 mt-5">
				<div class="card" style="width: 15em;">
					<div class="card-body">
						<p class="fw-bold">Muhammad Thoriq Daffa Firdausy</p>
						<p class="fw-bold">20.62.0157</p>
					</div>
				</div>
				<div class="card" style="width: 15em;">
					<div class="card-body">
						<p class="fw-bold">Swastika Pradnya Kusuma</p>
						<br>
						<p class="fw-bold">20.62.0161</p>
					</div>
				</div>
				<div class="card" style="width: 15em;">
					<div class="card-body">
						<p class="fw-bold">Prita Widya Kusuma</p>
						<br>
						<p class="fw-bold">20.62.0165</p>
					</div>
				</div>
				<div class="card" style="width: 15em;">
					<div class="card-body">
						<p class="fw-bold">Rayhan Kusumodjati</p>
						<br>	
						<p class="fw-bold">20.62.0166</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<style>
	body
	{
		background: #f9f9f9	;
	}
	.active 
	{
		font-weight: bold;
	}
	/****************************/
	.line-1
	{
		width: 5em;
		height: 10px;

		border-radius: 20px;
		background: green;
	}
	.AddBut
	{
		color: #FFFFFF;
		background: green;
		width: 10em;
		padding: 5px 0px;
		border-radius: 5px;
	}
	.AddBut:hover
	{
		color: black;
		background: none;
		width: 10em;
		padding: 5px 0px;
		border-radius: 5px;
		border: 2px solid green;
	}
</style>