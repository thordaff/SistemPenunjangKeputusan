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
								<a class="nav-link active" href="Data">Data Penerima</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Algoritma">Alur</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success mt-3" id="success-alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
		<div class="container mt-5 mb-5 pb-5">
            <h3 class="fw-bold mb-4">Data Penerima</h3>
            <table class="text-center" style="width:100%;">
                <tr>
                    <th><h5 class="fw-bold">Nama</h5></th>
                    <th><h5 class="fw-bold">Penghasilan</h5></th>
                    <th><h5 class="fw-bold">Status Perkawinan</h5></th>
                    <th><h5 class="fw-bold">Jumlah Tanggunan Anak</h5></th>
                    <th><h5 class="fw-bold">Umur</h5></th>
                </tr>
                <tr>
                    <td>
                        <?foreach($data as $d):?>
                            <p><?= $d['nama']?></p>
                        <?endforeach;?>
                    </td>
                    <td>
                        <?foreach($data as $d):?>
                            <p>Rp. <?= number_format($d['penghasilan'])?></p>
                        <?endforeach;?>
                    </td>
                    <td>
                        <?foreach($data as $d):?>
                            <p><?= $d['status']?></p>
                        <?endforeach;?>
                    </td>
                    <td>
                        <?foreach($data as $d):?>
                            <p><?= $d['jumlahTanggungan']?></p>
                        <?endforeach;?>
                    </td>
                    <td>
                        <?foreach($data as $d):?>
                            <p><?= $d['umur']?></p>
                        <?endforeach;?>
                    </td>
                </tr>
            </table>
            <div class="d-flex mt-3">
                <div class="button gap-3 ms-auto">
                    <a href="Data/deleteAll" class="btn fw-bold text-light" style="background: red;">Hapus Data</a>
                    <?if ($data == NULL) {?>
                        <a href="Penerima" class="btn fw-bold text-light" style="background: grey;">Tambah Data</a>
                    <? } else { ?>
                        <a href="Ranking" class="btn fw-bold text-light" style="background: green;">Perankingan</a>
                    <? } ?>
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
    table th,tr,td
    {
        border: 1px solid black;
    }
    .active 
	{
		font-weight: bold;
	}
</style>
<script>
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
    }, 5000);
</script>