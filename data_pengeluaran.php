<?php
include 'uang.php';

$pengeluaran = mysqli_query($koneksi, "SELECT * FROM pengeluaran");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #3a1f85;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #ddd;
        }

        .total {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            color: #333;
        }
    </style>



    <table border = "1">
   <tr>
    <th>tanggal</th>
    <th>kategori</th>
    <th>jumlah</th>
    <th>keteragan</th>
   </tr>

  
   
  <?php while ($row = mysqli_fetch_assoc($pengeluaran)) { ?>
  <tr>
    <td><?= $row['tanggal']; ?></td>
    <td><?= $row['kategori']; ?></td>
    <td><?= $row['jumlah']; ?></td>
    <td><?= $row['keterangan']; ?></td>


  </tr>
    <?php } ?>

    </table>
</body>
</html>

 