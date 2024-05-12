<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "beber"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk membuat tabel
$sql = "CREATE TABLE Dokter (
    ID_dokter INT PRIMARY KEY,
    Nama_dokter VARCHAR(255) NOT NULL,
    Keterangan_dokter VARCHAR(255),
    Dokter_Ahli VARCHAR(255),
    Jam_kerja VARCHAR(255)
)";

// Menjalankan query
if ($conn->query($sql) === TRUE) {
    echo "Tabel Dokter berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
