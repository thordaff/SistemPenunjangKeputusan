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
					<a class="navbar-brand fw-bold" href="welcome">SPK</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ms-auto gap-3">
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#">Beranda</a>
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
		<div class="container mt-5 mb-3" id="Kelompok">
            <div class="header-text">
                <h3 class="fw-bold">Tambah Data Penerima</h3>
                <div class="line-1"></div>
            </div>
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success mt-3" id="success-alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
			<div class="body-text mt-3">
				<section class="inputData gap-3">
					<form action="TambahData/input" method="post">
						<div class="d-flex flex-column">
							<label for="nama">Nama Penerima</label>
							<input type="text" name="nama" id="nama">
						</div>
						<div class="d-flex flex-column mt-3">
							<label for="penghasilan">Penghasilan perBulan</label>
							<input type="number" name="penghasilan" id="penghasilan">
						</div>
						<div class="d-flex flex-column mt-3">
							<label for="statusPerkawinan">Status Perkawinan</label>
							<select id="statusPerkawinan" name="statusPerkawinan">
								<?php foreach($statusKawin as $status):?>
									<option value="<?= $status['id']?>"><?= $status['status']?></option>
								<?php endforeach;?>
							</select>
						</div>
						<div class="d-flex flex-column mt-3">
							<label for="jumlahTanggungan">Jumlah Tanggungan ( Anak )</label>
							<input type="number" name="jumlahTanggungan" id="jumlahTanggungan">
						</div>
						<div class="d-flex flex-column mt-3">
							<label for="umur">Umur</label>
							<input type="number" name="umur" id="umur">
						</div>
						<div class="d-flex button mt-4 gap-3 g-3">
                            <button type="reset" style="background: red;">Reset</button>
							<button type="submit">Tambah Data</button>
							<a href="Data" class="btn ms-auto fw-bold text-light" style="background:grey;">Lihat Hasil</a>
						</div>
					</form>	
				</section>
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
		width: 3em;
		height: 10px;

		border-radius: 20px;
		background: green;
	}
    button
    {
        border: none;
        color: white;
        background: green;
        padding: 5px 20px;

        font-weight: bold;
        border-radius: 5px;
    }
    /****************************/
    input
    {
        border: 1px solid black;
        border-radius: 5px;
        background: none;
    }
    select

    {
        border: 1px solid black;
        border-radius: 5px;
        background: none;
    }
</style>
<script>
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
    }, 5000);
</script>