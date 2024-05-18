<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            float: right; /* Mengatur posisi tabel ke kanan */
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        form {
            width: 40%;
            float: left; /* Mengatur posisi form ke kiri */
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #800080; /* Warna ungu */
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .container {
            overflow: hidden; /* Mencegah overflow */
            margin-bottom: 20px; /* Memberikan jarak antara form dan tabel */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Produk</h2>
    <form action="submit_produk.php" method="post">
        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>

        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" required>

        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required>

        <input type="submit" value="Tambah Produk">
    </form>
</div>

<div class="container">
    <h2>Daftar Produk</h2>
    <table>
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok</th>
        </tr>
        <?php
        $products = [
            ["Barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
            ["Barang" => "Tablet", "Harga" => 200000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
            ["Barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
            ["Barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
            ["Barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30],
        ];

        // Menampilkan data produk dalam tabel
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['Barang'] . "</td>";
            echo "<td>" . number_format($product['Harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $product['Deskripsi'] . "</td>";
            echo "<td>" . $product['Stok'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
