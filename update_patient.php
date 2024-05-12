<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "Beber";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $id_pasien = $_POST['id_pasien'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $status = $_POST['status'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];

    $sql = "UPDATE patients SET nama='$nama', nik='$nik', tgl_lahir='$tgl_lahir', status='$status', alamat='$alamat', keluhan='$keluhan' WHERE antrian='$id_pasien'";

    if ($conn->query($sql) === TRUE) {
        echo "Data pasien berhasil diperbarui.";
        header("Location: loginUMUM.php");
        exit(); // Pastikan untuk keluar dari skrip setelah menggunakan header
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
