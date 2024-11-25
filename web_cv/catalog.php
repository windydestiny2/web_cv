<?php
include 'connection.php';
$products = $Conn->query('SELECT * FROM products')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background: white;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center; color: #333;">Catalog Barang</h1>

    <table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data barang
            $sql = "SELECT * FROM products";
            $result = $Conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop data barang
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['kode_barang']}</td>
                            <td>{$row['nama_barang']}</td>
                            <td>{$row['deskripsi_barang']}</td>
                            <td>Rp " . number_format($row['harga_barang'], 0, ',', '.') . "</td>
                            <td>{$row['stok_barang']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align: center;'>Tidak ada data barang</td></tr>";
            }

            $Conn->close(); // Tutup koneksi
            ?>
        </tbody>
    </table>

</body>
</html>
