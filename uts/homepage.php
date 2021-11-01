<?php
	require 'functions.php';
	$getAllData = getAllData("SELECT * FROM data_nilai_mahasiswa")
?>

<!DOCTYPE html>
<html>
<head>
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet">

	<!-- bootstrap5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- my styling -->
	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		.profileWrapper {
			border-bottom: 1px solid gainsboro;
			padding: 1rem 2rem;
		}

		.profile {
			font-family: 'Manrope', sans-serif;
			font-size: 1.2rem;
			font-weight: bold;
		}

		.title {
			font-family: 'Manrope', sans-serif;
			font-size: 1.2rem;
			font-weight: bold;
		}

		.form-table {
			padding: 0 2rem;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}

		.input-data-form {
			max-width: 20rem;
			display: flex;
			flex-direction: column;
		}

		article {
			text-align: center;
		}
		
		.debug {
			border: 1px solid black;
		}

		table {
			margin: 0 auto;
		}

		table, th, td {
			padding: 0.5rem 1rem;
			border: 1px solid gainsboro;
			font-family: 'Manrope', sans-serif;
			font-size: 1rem;
		}

	</style>

	<title>UTS Basis Data</title>
</head>
<body>
	<nav class="profileWrapper">
		<h2 class="profile text-center">Maulana Ichwan</h2>
		<h3 class="profile text-center">191364016</h3>
		<h3 class="profile text-center">UTS Basis Data</h3>
	</nav>	
	
	<section class="form-table py-2">
	<form action="" method="post" class="input-data-form mx-auto my-4">
		<h3 class="title text-center">Tambah Data Siswa</h3>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Nama</span>
			<input type="text" class="form-control" placeholder="Maulana Ichwan" name="nama" aria-label="Nama" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">NIM</span>
			<input type="number" class="form-control" placeholder="191364016" name="nim" aria-label="NIM" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Nilai Kehadiran</span>
			<input type="number" class="form-control" placeholder="100" name="nilai_kehadiran" aria-label="Nilai Kehadiran" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Nilai Tugas</span>
			<input type="number" class="form-control" placeholder="100" name="nilai_tugas" aria-label="Nilai Tugas" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Nilai UTS</span>
			<input type="number" class="form-control" placeholder="100" name="nilai_uts" aria-label="Nilai Tugas" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Nilai UAS</span>
			<input type="number" class="form-control" placeholder="100" name="nilai_uas" aria-label="Nilai Tugas" aria-describedby="basic-addon1" required>
		</div>

		<input type="submit" name="tambah" value="tambah" class="btn btn-primary my-2">
	</form>

	<article>
		<h1 class="title">Member Data</h1>
		
		<table class="table-data">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>NIM</th>
				<th>Kehadiran</th>
				<th>Tugas</th>
				<th>UTS</th>
				<th>UAS</th>
				<th>Nilai Akhir</th>
			</tr>
			<?php $no = 1; ?>
			<?php foreach($getAllData as $row) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $row["NAMA"]; ?></td>
				<td><?= $row["NIM"]; ?></td>
				<td><?= $row["NK"]; ?></td>
				<td><?= $row["NT"]; ?></td>
				<td><?= $row["UTS"]; ?></td>
				<td><?= $row["UAS"]; ?></td>
				<td><?= $row["NA"]; ?></td>
			</tr>
			<?php $no++ ?>
			<?php endforeach; ?>
		</table>
		
	</article>
	</section>
</body>
</html>

<?php
//mulai proses tambah data

if(isset($_POST['tambah'])){

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama			= $_POST['nama'];	
	$nim			= $_POST['nim'];	
	$nk				= $_POST['nilai_kehadiran'];	
	$nt				= $_POST['nilai_tugas']; 
	$uts			= $_POST['nilai_uts'];
	$uas 			= $_POST['nilai_uas'];
	$na 			= 0.1 * $nk + 0.2 * $nt + 0.3 * $uts + 0.4 * $uas;

	if($nk > 100 || $nt > 100 || $uts > 100 || $uas > 100) {
		echo "<div class='alert alert-danger alert' role='alert'>input melebihi nilai 100 <a href='homepage.php'>Input ulang</a></div>";
	} else {
		$sql = "INSERT INTO `data_nilai_mahasiswa`(`NAMA`, `NIM`, `NK`, `NT`, `UTS`, `UAS`, `NA`) VALUES ('$nama','$nim','$nk','$nt','$uts','$uas', '$na')";
		$isInserted = insertData($sql);
	}

    // apakah query simpan berhasil?
    if( $isInserted ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
		echo "<div class='alert alert-success alert' role='alert'>Data berhasil di tambahkan! <a href='homepage.php'>Input Lagi</a></div>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<div class='alert alert-danger' role='alert'>
		Data gagal di tambahkan!
	  </div>";
    }

}
?>