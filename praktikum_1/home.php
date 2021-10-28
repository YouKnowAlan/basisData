<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Tugas Basis Data</title>
</head>
<body>
    <h1>Lat 1</h1>
    <?php include 'lat1.php'; ?>

    <h1>Lat 2</h1>
    <?php include 'lat2.php'; ?>

    <h1>Lat 3</h1>
    <?php include 'lat3.php'; ?>

    <h1>Lat 4</h1>
    <?php include 'lat4.php'; ?>
    
    <h1>Lat 5</h1>
    <?php include 'lat5.php'; ?>

    <h1>Lat 6</h1>
    <?php include 'lat6.php'; ?>
    
    <h1>Lat 7</h1>
    <form action="lat7.php" method="post">
        input a number: <input type="number" min="0" max="9" step="1" name="number"><br>
        <input type="submit">
    </form>
    
    <h1>Lat 8</h1>
    <form action="lat8.php" method="post">
        Nama barang: <input type="text" name="namaBarang"><br>
        Harga satuan: <input type="number" name="hargaSatuan"><br>
        Jumlah yang dibeli: <input type="number" name="jumlahBarang"><br>
        Member toko atau bukan: <select id="memberOrNonmember" name="memberToko">
            <option value="member">Member</option>
            <option value="nonMember">Nonmember</option>
        </select><br>
        <input type="submit">
    </form>

    <h1>Lat 9</h1>
    <?php include 'lat9.php'; ?>
</body>
</html>