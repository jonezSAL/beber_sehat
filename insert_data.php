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

// Mendapatkan data dari formulir
$Nama_dokter = $_POST['Nama_dokter'];
$Keterangan_dokter = $_POST['Keterangan_dokter'];
$Dokter_Ahli = $_POST['Dokter_Ahli'];
$Jam_kerja = $_POST['Jam_kerja'];

// Query untuk menyisipkan data ke dalam tabel
$sql = "INSERT INTO Dokter (Nama_dokter, Keterangan_dokter, Dokter_Ahli, Jam_kerja)
        VALUES ('$Nama_dokter', '$Keterangan_dokter', '$Dokter_Ahli', '$Jam_kerja')";

// Menjalankan query
if ($conn->query($sql) === TRUE) {
    echo "Data dokter berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
