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
    $tahun_tanggal = $_POST['tahun_tanggal'];
    $anamesis = $_POST['anamesis'];
    $keluhan_utama = $_POST['keluhan_utama'];
    $rps = $_POST['rps'];
    $diperiksa_dengan = $_POST['diperiksa_dengan'];
    $rpd = $_POST['rpd'];
    $rpk = $_POST['rpk'];
    $rpo = $_POST['rpo'];
    $pemeriksaan = $_POST['pemeriksaan'];
    $tekanan_darah = $_POST['tekanan_darah'];
    $nadi = $_POST['nadi'];
    $respirasi = $_POST['respirasi'];
    $suhu = $_POST['suhu'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $pemeriksaan_fisik = $_POST['pemeriksaan_fisik'];
    $kepala_leher = $_POST['kepala_leher'];
    $pemeriksaan_penunjang = $_POST['pemeriksaan_penunjang'];
    $id_pasien = isset($_POST['id_pasien']) ? $_POST['id_pasien'] : '';

    $sql = "INSERT INTO detail_pasien (tahun_tanggal, anamesis, keluhan_utama, rps, diperiksa_dengan, rpd, rpk, rpo, pemeriksaan, tekanan_darah, nadi, respirasi, suhu, berat_badan, tinggi_badan, pemeriksaan_fisik, kepala_leher, pemeriksaan_penunjang, id_pasien) 
            VALUES ('$tahun_tanggal', '$anamesis', '$keluhan_utama', '$rps', '$diperiksa_dengan', '$rpd', '$rpk', '$rpo', '$pemeriksaan', '$tekanan_darah', '$nadi', '$respirasi', '$suhu', '$berat_badan', '$tinggi_badan', '$pemeriksaan_fisik', '$kepala_leher', '$pemeriksaan_penunjang', '$id_pasien')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<form method="post" action="">
    <table>
        <tr>
            <th>Tahun dan Tanggal</th>
            <td><input type="text" name="tahun_tanggal" value=""></td>
        </tr>
        <tr>
            <th>Anamesis</th>
            <td colspan="2"><input type="text" name="anamesis" value=""></td>
        </tr>
        <tr>
            <th>Keluhan Utama</th>
            <td colspan="2"><input type="text" name="keluhan_utama" value=""></td>
        </tr>
        <tr>
            <th>RPS</th>
            <td colspan="2"><input type="text" name="rps" value=""></td>
        </tr>
        <tr>
            <th>Diperiksa dengan</th>
            <td colspan="2"><input type="text" name="diperiksa_dengan" value=""></td>
        </tr>
        <tr>
            <th>RPD</th>
            <td colspan="2"><input type="text" name="rpd" value=""></td>
        </tr>
        <tr>
            <th>RPK</th>
            <td colspan="2"><input type="text" name="rpk" value=""></td>
        </tr>
        <tr>
            <th>RPO</th>
            <td colspan="2"><input type="text" name="rpo" value=""></td>
        </tr>
        <tr>
            <th>Pemeriksaan Fisik/Penunjang Medik</th>
            <td colspan="2"><input type="text" name="pemeriksaan" value=""></td>
        </tr>
        <tr>
            <th colspan="3">TANDA TANDA VITAL:</th>
        </tr>
        <tr>
            <th>Tekanan Darah</th>
            <td><input type="text" name="tekanan_darah" value=""></td>
            <td>mm/Hg</td>
        </tr>
        <tr>
            <th>Nadi</th>
            <td><input type="text" name="nadi" value=""></td>
            <td>x/menit</td>
        </tr>
        <tr>
            <th>Respirasi</th>
            <td><input type="text" name="respirasi" value=""></td>
            <td>x/menit</td>
        </tr>
        <tr>
            <th>Suhu</th>
            <td><input type="text" name="suhu" value=""></td>
            <td>°C</td>
        </tr>
        <tr>
            <th>Berat Badan</th>
            <td><input type="text" name="berat_badan" value=""></td>
            <td>kg</td>
        </tr>
        <tr>
            <th>Tinggi Badan</th>
            <td><input type="text" name="tinggi_badan" value=""></td>
            <td>cm</td>
        </tr>
        <tr>
            <th>Pemeriksaan Fisik</th>
            <td colspan="2"><input type="text" name="pemeriksaan_fisik" value=""></td>
        </tr>
        <tr>
            <th>Kepala Leher</th>
            <td colspan="2"><input type="text" name="kepala_leher" value=""></td>
        </tr>
        <!-- Tambahkan bagian pemeriksaan fisik lainnya di sini -->
        <!-- Bagian PEM. PENUNJANG -->
        <tr>
            <th colspan="3">PEMERIKSAAN PENUNJANG</th>
        </tr>
        <tr>
            <th>...</th>
            <td colspan="2"><input type="text" name="pemeriksaan_penunjang" value=""></td>
        </tr>
        <tr>
            <th>Id Pasien</th>
            <td colspan="2"><input type="text" name="id_pasien" value=""></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Simpan">
</form>
<hr>
<hr>
