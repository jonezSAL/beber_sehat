<?php
$row = array('nik' => '', 'nama' => '', 'alamat' => '', 'keluhan' => '', 'id' => '', 'poli' => '', 'dokter' => ''); // Initialize with empty values

if(isset($_POST['search'])){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "Beber";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nik = $_POST['nik'];

    $query = "SELECT nik, nama, alamat, keluhan, antrian, poli, dokter FROM patients WHERE nik = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $nik);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Tabel untuk menampilkan data
        echo "<div class='table-container'>";
        echo "<table class='styled-table'>";
        echo "<thead><tr><th>antrian</th><th>NIK</th><th>Nama</th><th>Alamat</th><th>Keluhan</th><th>Poli</th><th>Dokter</th></tr></thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $row['antrian'] . "</td>";
        echo "<td>" . $row['nik'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row['keluhan'] . "</td>";
        echo "<td>" . $row['poli'] . "</td>";
        echo "<td>" . $row['dokter'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    } else {
        // Pop-up card jika NIK tidak terdaftar
        echo "<div class='popup-card'>";
        echo "<div class='card-content'>";
        echo "<h3>MOHON MAAF ANDA TIDAK TERDAFTAR PASIEN DI PUSKESMAS BEBER, MOHON DAFTAR DIRI ANDA</h3>";
        echo "<a href='daftar.php' class='button'>Daftar</a>";
        echo "</div>";
        echo "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Patients</title>
    <link rel="stylesheet" href="styleC.css">
    <style>
        /* CSS untuk card */
        .popup-card {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 400px; /* Lebar pop-up */
            height: 200px; /* Tinggi pop-up */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #f9f9f9;
            animation: slide-up 0.5s ease;
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translate(-50%, 100%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, 0%);
            }
        }

        /* CSS untuk card content */
        .card-content {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Search Patients</h2>
    <form method="POST" action="">
        <label for="nik">NIK:</label>
        <input type="text" name="nik" id="nik" required>
        <button type="submit" name="search">Search</button>
        <a href="index.html" class="button">Home</a>
    </form>
</body>
</html>
