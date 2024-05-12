<!DOCTYPE html>
<html>
<head>
    <title>Form Login Poli Umum</title>
    <style>
        body {
            background-color: #f0f0f0; /* warna background */
            font-family: Arial, sans-serif; /* jenis font */
            margin: 0; /* menghapus margin */
            padding: 0; /* menghapus padding */
        }
        .container {
            max-width: 850px; /* lebar maksimum konten */
            margin: 20px auto; /* jarak margin dari atas dan bawah, dan secara otomatis berada di tengah */
            background-color: #fff; /* warna latar belakang konten */
            padding: 20px; /* padding konten */
            border-radius: 8px; /* membuat sudut border */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* shadow konten */
        }
        h2 {
            text-align: center; /* teks menjadi rata tengah */
            color: #333; /* warna teks */
        }
        form {
            text-align: center; /* teks menjadi rata tengah */
        }
        table {
            width: 100%; /* lebar tabel 100% dari konten */
            border-collapse: collapse; /* menggabungkan border */
        }
        th, td {
            padding: 8px; /* padding sel tabel */
            text-align: left; /* teks menjadi rata kiri */
            border-bottom: 1px solid #ddd; /* border bottom */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* warna latar belakang baris genap */
        }
        .action-buttons {
            text-align: right; /* teks menjadi rata kanan */
        }
        .action-buttons button {
            margin-left: 5px; /* jarak antar tombol */
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Daftar Pasien Poli KIA</h2>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "Beber";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['nama']) && isset($_POST['nik']) && isset($_POST['tgl_lahir']) && isset($_POST['status']) && isset($_POST['alamat']) && isset($_POST['keluhan'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $status = $_POST['status'];
        $alamat = $_POST['alamat'];
        $keluhan = $_POST['keluhan'];

        $sql = "INSERT INTO patients (nama, nik, tgl_lahir, status, alamat, keluhan, poli) VALUES ('$nama', '$nik', '$tgl_lahir', '$status', '$alamat', '$keluhan', 'UMUM')";

        if ($conn->query($sql) === TRUE) {
            echo "Data pasien baru berhasil disimpan.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if(isset($_POST['hapus'])) {
        $id_pasien = $_POST['id_pasien'];
        $sql = "DELETE FROM patients WHERE antrian = $id_pasien";

        if ($conn->query($sql) === TRUE) {
            echo "Data pasien berhasil dihapus dari database.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if(isset($_POST['selesai'])) {
        $id_pasien = $_POST['id_pasien'];
        $sql = "DELETE FROM patients WHERE antrian = $id_pasien";
    
        if ($conn->query($sql) === TRUE) {
            echo "Data pasien berhasil ditandai sebagai selesai.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $sql = "SELECT * FROM patients WHERE poli = 'KIA'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>NIK</th><th>Tanggal Lahir</th><th>Status</th><th>Alamat</th><th>Keluhan</th><th>Action</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nama"]. "</td>";
            echo "<td>" . $row["nik"]. "</td>";
            echo "<td>" . $row["tgl_lahir"]. "</td>";
            echo "<td>" . $row["status"]. "</td>";
            echo "<td>" . $row["alamat"]. "</td>";
            echo "<td>" . $row["keluhan"]. "</td>";
            echo "<td class='action-buttons'>";
            echo "<form method='post' action=''>";
            echo "<input type='hidden' name='id_pasien' value='" . $row["antrian"]. "'>"; // Added hidden input field
            echo "<button type='submit' name='hapus'>Hapus</button>";
            echo "<button type='submit' name='selesai'>Selesai</button>";
            echo "</form>";
            echo "</td>";
            echo "<td class='action-buttons'>";
            echo "<form method='post' action='edit_patient.php'>";
            echo "<input type='hidden' name='id_pasien' value='{$row["antrian"]}'>";
            echo "<button type='submit' name='edit'>Edit</button>"; // Assuming 'Edit' is the label for the edit button
            echo "</form>";
            echo "</td>";
            echo "<td class='action-buttons'>";
            echo "<form method='post' action='detail_patient.php' target='_blank'>";
            echo "<input type='hidden' name='id_pasien' value='" . $row["antrian"]. "'>"; // Added hidden input field
            echo "<button type='submit' name='detail'>Detail</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
            
        }
    } else {
        echo "0 results";
    }
    ?>

</div>

</body>
</html>
