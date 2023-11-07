<?php
include "koneksi.php";

// Periksa apakah parameter nama_barang telah diberikan dalam URL
if (isset($_GET["nama_barang"])) {
    $nama_barang = $_GET["nama_barang"];

    // Query untuk mengambil data barang berdasarkan nama_barang
    $query = "SELECT * FROM barang WHERE nama_barang = '$nama_barang'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        // Data barang ditemukan
        $row = $result->fetch_assoc();
        $harga = $row["harga"];
        $stok = $row["stok"];
    } else {
        // Barang tidak ditemukan, lakukan penanganan kesalahan
        echo "Barang tidak ditemukan.";
        exit;
    }
} else {
    // Parameter nama_barang tidak diberikan, lakukan penanganan kesalahan
    echo "Nama barang tidak diberikan.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Pastry - Edit Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #FFA500;
            color: #fff;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #FFA500;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FF8C00;
        }
    </style>
</head>
<body>
    <h1>Edit Data Barang</h1>
    <div class="container">
        <form method="post" action="proses_edit_barang.php">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" required>

            <label for="stok">Stok:</label>
            <input type="number" name="stok" required>

            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
