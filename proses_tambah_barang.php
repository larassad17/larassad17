<?php
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];

// Buat koneksi ke database (jika belum)
$host = "localhost";
$username = "root";
$password = "password_baru";
$database = "toko_pantry";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Buat query SQL untuk memasukkan data ke dalam tabel "daftar_barang"
$sql = "INSERT INTO barang (nama_barang, harga, stok) VALUES ('$nama_barang', $harga, $stok)";

// Mengeksekusi query SQL
if ($koneksi->query($sql) === TRUE) {
    // Pesan konfirmasi
    echo "Barang '" . $nama_barang . "' berhasil ditambahkan ke dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
