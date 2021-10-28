<?php
	require 'functions.php';
	$getAllData = getAllData("SELECT * FROM data_member")
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

		table, th, td {
			padding: 0.5rem 1rem;
			border: 1px solid gainsboro;
			font-family: 'Manrope', sans-serif;
			font-size: 1rem;
		}

	</style>

	<title>Tabel member AIESEC</title>
</head>
<body>
	<nav class="profileWrapper">
		<h2 class="profile text-center">Maulana Ichwan</h2>
		<h3 class="profile text-center">191364016</h3>
	</nav>	
	
	<section class="form-table py-2">
	<form action="" method="post" class="input-data-form mx-auto my-4">
		<h3 class="title text-center">Tambah Data Siswa</h3>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Expa ID</span>
			<input type="number" class="form-control" placeholder="123456" name="expaId" aria-label="Expa ID" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Name</span>
			<input type="text" class="form-control" placeholder="Alan" name="name" aria-label="Name" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Email</span>
			<input type="email" class="form-control" placeholder="maulana8.mm@gmail.com" name="email" aria-label="Email" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">University</span>
			<input type="text" class="form-control" placeholder="Politeknik Negeri Bandung" name="university" aria-label="University" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Area Of Study</span>
			<input type="text" class="form-control" placeholder="Teknik Elektro" name="areaOfStudy" aria-label="Area Of Study" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Current Stay</span>
			<input type="text" class="form-control" placeholder="Bandung" name="currentStay" aria-label="Current Stay" aria-describedby="basic-addon1" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text" id="basic-addon1">Phone</span>
			<input type="number" class="form-control" placeholder="0812xxxxxxxx" name="phone" aria-label="Phone" aria-describedby="basic-addon1" required>
		</div>
		<input type="submit" name="tambah" value="tambah" class="btn btn-primary my-2">
	</form>

	<article>
		<h1 class="title">Member Data</h1>
		
		<table class="table-data">
			<tr>
				<th>Expa ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>University</th>
				<th>Area of Study</th>
				<th>Current Stay in City</th>
				<th>Phone</th>
			</tr>
			<?php foreach($getAllData as $row) : ?>
			<tr>
				<td><?= $row["Expa ID"]; ?></td>
				<td><?= $row["Name"]; ?></td>
				<td><?= $row["Email"]; ?></td>
				<td><?= $row["University"]; ?></td>
				<td><?= $row["Area of Study"]; ?></td>
				<td><?= $row["Current Stay in (City)"]; ?></td>
				<td>+62<?= $row["Phone"]; ?></td>
			</tr>
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
	$expaId			= $_POST['expaId'];	
	$name			= $_POST['name'];	
	$email			= $_POST['email'];	
	$university		= $_POST['university']; 
	$areaOfStudy	= $_POST['areaOfStudy'];
	$currentStay 	= $_POST['currentStay'];
	$phone 			= $_POST['phone'];
    // buat query
    $sql = "INSERT INTO data_member (`Expa ID`, `Name`, `Email`, `University`, `Area of Study`, `Current Stay in (City)`, `Phone`) VALUES ('$expaId', '$name', '$email', '$university', '$areaOfStudy', '$currentStay', '$phone')";
    $isInserted = insertData($sql);

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