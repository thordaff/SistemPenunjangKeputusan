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
		<div class="container mt-3">
            <div class="d-flex flex-row gap-5">
                <div class="nama">
                    <h3 class="fw-bold">Nama</h3>
                    <?php foreach($nama as $h):?>
                        <p><?= $h['nama']?></p>
                    <?php endforeach?>
                </div>
                <div class="penghasilan">
                    <h3 class="fw-bold">Penghasilan</h3>
                    <?php foreach($hasilPenghasilan as $h):?>
                        <p><?= $h?></p>
                    <?php endforeach?>
                </div>
                <div class="status">
                    <h3 class="fw-bold">Status Perkawinan</h3>
                    <?php foreach($hasilStatus as $h):?>
                        <p><?= $h?></p>
                    <?php endforeach?>
                </div>
                <div class="jumlahTanggungan">
                    <h3 class="fw-bold">Jumlah Tanggungan</h3>
                    <?php foreach($hasilTanggungan as $h):?>
                        <p><?= $h?></p>
                    <?php endforeach?>
                </div>
                <div class="umur">
                    <h3 class="fw-bold">Umur</h3>
                    <?php foreach($hasilUmur as $h):?>
                        <p><?= $h?></p>
                    <?php endforeach?>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center">
                <div class="title">
                    <h3 class="fw-bold">Ranking</h3>
                </div>
                <div class="ranking d-flex flex-row gap-5">
                    <div class="nama">
                        <?php foreach($nama as $n):?>
                            <p><?= $n['nama']?></p>
                        <?php endforeach;?>
                    </div>
                    <div class="Sampling">
                        <?php foreach($totalSamping as $data): ?>
                            <p><?= $data ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
		</div>
	</body>
</html>