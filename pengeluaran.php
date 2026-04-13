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

    .container {
        max-width: 500px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        resize: none;
        height: 80px;
    }

    button {
        margin-top: 15px;
        width: 100%;
        padding: 12px;
        background: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #45a049;
    }
</style>
    <h1>from pencatatan uang</h1>

    <form action="simpan_pengeluaran.php" method="POST" enctype="multipart/form-data">
   tanggal: <br>
   <input type="date" name="dete" required>
   <br> <br>
   kategori: <br>
   <input type="text" name="kategori" required>
   <br> <br>
   jumlah pengeluaran: <br>
    <input type="number" name="pengeluaran" required>
   <br> <br>
  
    keterangan:
   <textarea name="keterangan" required></textarea>
    <br><br>
    <button type="submit" name="submit">kirim</button>
   
    </form>
</body>
</html>