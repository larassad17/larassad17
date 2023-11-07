<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_barang"]) && isset($_POST["harga"]) && isset($_POST["stok"]) && !empty($_POST["nama_barang"]) && !empty($_POST["harga"]) && !empty($_POST["stok"])) {
        $nama_barang = $_POST["nama_barang"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];

        // Persiapkan pernyataan SQL
        $sql = "UPDATE barang SET harga = ?, stok = ? WHERE nama_barang = ?";

        // Persiapkan pernyataan
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("iis", $harga, $stok, $nama_barang);

        // Eksekusi pernyataan
        if ($stmt->execute()) {
            echo "Barang berhasil diperbarui.";
        } else {
            echo "Error: " . $koneksi->error;
        }
    } else {
        echo "Data yang diperlukan tidak lengkap.";
    }
}
?>
