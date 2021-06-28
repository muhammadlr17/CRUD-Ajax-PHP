<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "it_pens_ajax";
$conn       = mysqli_connect($server, $username, $password, $database);

if (!$conn){
    die("Koneksi Gagal : ". mysqli_error());
}
?>