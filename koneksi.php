<?php
$host = "localhost";
$username = "root"; 
$password = "password_baru"; 
$database = "toko_pantry";


$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}


?>


<?php
