<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuzzy Penilaian Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
	<div class="Judul" style="margin-left: 490px; margin-top: 50px;">
		<h1>Implementasi Logika Fuzzy</h1>
	</div>
	<div class="card" style="margin-top: 50px; margin-left: 500px; width: 30rem;">
		<div class="card-body">
			<h5 class="card-tittle" style="margin-left: 25%;">Penilaian Kerja Pegawai</h5>
			<form id="form" name="form" action="output.php" method="post">


				<div class="container">
					<div class="form-floating mb-3">
						<input type="float" name="k" id="k" class="form-control"  placeholder="Masukan angka K1" autofocus>
						<label for="floatingInput">Masukkan K1 (Tanggung Jawab)</label>
					  </div>
					  <div class="form-floating mb-3">
						<input type="float" name="kl" id="kl" class="form-control"  placeholder="Masukan angka K2" autofocus>
						<label for="floatingInput">Masukkan K2 (Tanggung Jawab)</label>
					  </div>
					  <div class="form-floating mb-3">
						<input type="float" name="km" id="km" class="form-control"  placeholder="Masukan angka K3" autofocus>
						<label for="floatingInput">Masukkan k3 (Faktor Pengurang)</label>
					  </div>
					  <button type="submit" class="btn btn-danger" mt-3>Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

					