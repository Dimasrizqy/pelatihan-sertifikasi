<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "dbpus";

$koneksi = mysqli_connect($host,$user,$pass,$database,3307);

if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

