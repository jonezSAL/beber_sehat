<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien Poli Umum</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: left;
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Edit Data Pasien Poli Umum</h2>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "Beber";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['edit']) && isset($_POST['id_pasien'])) {
        $id_pasien = $_POST['id_pasien'];
        $sql = "SELECT * FROM patients WHERE antrian = $id_pasien";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form method="post" action="update_patient.php">
                <input type="hidden" name="id_pasien" value="<?php echo $row['antrian']; ?>">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>">
                
                <label for="nik">NIK:</label>
                <input type="text" name="nik" id="nik" value="<?php echo $row['nik']; ?>">
                
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
                
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" value="<?php echo $row['status']; ?>">
                
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>">
                
                <label for="keluhan">Keluhan:</label>
                <input type="text" name="keluhan" id="keluhan" value="<?php echo $row['keluhan']; ?>">
                
                <input type="submit" name="submit" value="Simpan">
            </form>
            <?php
        } else {
            echo "Data pasien tidak ditemukan.";
        }
    }

    $conn->close();
    ?>

</div>

</body>
</html>
