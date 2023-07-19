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
								<a class="nav-link" aria-current="page" href="welcome">Beranda</a>
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
		<div class="container mt-5 mb-5 pb-5">
            <h3 class="fw-bold mb-4">Perangkingan Data</h3>
            <div class="d-flex flex-column justify-content-center">
                <!-- Mengurutkan dari nilai tertinggi hingga terendah -->
                <?php
                    array_multisort($totalSamping, SORT_DESC, $nama);
                ?>
                <div class="ranking d-flex flex-row gap-5">
                    <div class="nama">
                    <h5 class="fw-bold mb-3">Nama</h5>
                        <?php foreach($nama as $index => $n):?>
                            <?php if ($totalSamping[$index] === max($totalSamping)): ?>
                                <p><strong><?= $n['nama']?></strong></p>
                            <?php else: ?>
                                <p><?= $n['nama']?></p>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                    <div class="Sampling">
                        <h5 class="fw-bold mb-3">Nilai</h5>
                        <?php foreach($totalSamping as $index => $data): ?>
                            <?php if ($data === max($totalSamping)): ?>
                                <p><strong><?= $data ?></strong></p>
                            <?php else: ?>
                                <p><?= $data ?></p>
                            <?php endif; ?>
                        <?php endforeach; ?>
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
</style>