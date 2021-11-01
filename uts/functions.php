<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "praktikum_2";

$conn = mysqli_connect($server, $user, $password, $nama_database);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

function getAllData($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insertData($query) {
    global $conn;
    $insertData = mysqli_query($conn, $query);
    return $insertData;
}
?>