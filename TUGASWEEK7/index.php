<?php
include "koneksi.php";

$query = "SELECT * FROM barang";
$result = $koneksi->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Pastry Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            margin: 0;
            padding: 0;
        }

        header {
            background-image: url('https://www.foodandwine.com/thmb/sLHsKBKLnyJrrYYKaBvF0PnLpRg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Royal-Butler-Says-This-Is-The-Correct-Way-to-Enjoy-Pastries-FT-BLOG0123-b360c74726b544ecb5833f6d53bde28d.jpg'); /* Ganti 'header-image.jpg' dengan URL gambar header Anda */
            background-size: cover;
            background-position: center;
            height: 200px;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>


<body>
    <header>
        <h1>Welcome to Our Database Pastry Shop</h1>
    </header>

    <div class="container">
        <p>


        Toko Pastry Laras adalah tempat di mana setiap hidangan dipersiapkan dengan cinta dan perhatian.        </p>
        
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Pastry - Daftar Barang</title>
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

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Pastry - Tambah Barang Baru</title>
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
    <h1>Tambah Barang Baru</h1>
    <div class="container">
        <form method="post" action="proses_tambah_barang.php">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" name="nama_barang" required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" required>

            <label for="stok">Stok:</label>
            <input type="number" name="stok" required>

            <input type="submit" value="Tambah Barang">
        </form>
    </div>
</body>
</html>

    <h1>Daftar Barang di Toko Pastry</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama_barang"] . "</td>";
                echo "<td>" . $row["harga"] . "</td>";
                echo "<td>" . $row["stok"] . "</td>";
                echo "<td><a href='edit_barang.php?nama_barang=" . $row["nama_barang"] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data barang.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
