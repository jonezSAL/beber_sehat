<?php
include 'config.php';

if(isset($_POST['submit'])) {
    // Ambil data dari form
    $tahun_tanggal = $_POST['tahun_tanggal'];
    $anamesis = $_POST['anamesis'];
    $keluhan_utama = $_POST['keluhan_utama'];
    // Tambahkan data lainnya sesuai dengan kebutuhan

    // Simpan data ke database
    $sql = "INSERT INTO detail_pasien (tahun_tanggal, anamesis, keluhan_utama, ...) 
            VALUES ('$tahun_tanggal', '$anamesis', '$keluhan_utama', ...)";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
