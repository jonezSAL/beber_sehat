<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Registrasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="bodyDF.css">
    <!-- Contoh untuk menambahkan font Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto untuk seluruh teks */
        }
        h1, h2 {
            font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto untuk judul */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Column with Image -->
            <div class="col-md-6 p-0">
                <img src="img/Daftar.jpeg" alt="Image" class="img-fluid">
            </div>

            <!-- Column with Form -->
            <div class="col-md-6 p-5">
                <h1 class="text-center mb-4">BEBER SEHAT</h1>
                <h2 class="text-center mb-4">DAFTAR PASIEN</h2>
                <form method="post" action="koneksi.php">
                    <div class="form-group">
                        <label for="nama">NAMA:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    <script>
                        document.getElementById("nama").setAttribute("placeholder", "Masukkan NAMA");
                    </script>
                    </div>
                    <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="number" id="nik" name="nik" class="form-control" required>
                <small id="nikError" style="display:none; color:red;">NIK harus terdiri dari minimal 16 digit.</small>
                                    </div>
                                    <script>
                                                            document.getElementById("nik").setAttribute("placeholder", "Masukkan NIK dengan minimal 16 digit");
                                            </script>
                        <script>
                        document.getElementById("nik").addEventListener("input", function() {
                            var nik = document.getElementById("nik").value;
                            var nikError = document.getElementById("nikError");

                            if (nik.length < 16) {
                                nikError.style.display = "block";
                            } else {
                                nikError.style.display = "none";
                            }
                        });
                        </script>

                    <div class="form-group">
                        <label for="tgl_lahir">TGL LAHIR:</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="status">STATUS:</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT:</label>
                        <textarea id="alamat" name="alamat" class="form-control" required></textarea>
                        <script>
                        document.getElementById("alamat").setAttribute("placeholder", "Masukkan ALAMAT");
                    </script>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">KELUHAN:</label>
                        <textarea id="keluhan" name="keluhan" class="form-control" required></textarea>
                        <script>
                        document.getElementById("keluhan").setAttribute("placeholder", "Masukkan KELUHAN");
                    </script>
                    </div>
                    <div class="form-group">
    <label for="poli">POLI:</label>
    <select id="poli" name="poli" class="form-control" required onchange="updateDoctor()">
        <option value="">-- PILIH POLI --</option>                    
        <option value="UMUM">POLI UMUM</option>
        <option value="ANAK">ANAK</option>
        <option value="Gigi">POLI GIGI</option>
        <option value="KIA">POLI KIA</option>
        <option value="Lansia">POLI LANSIA</option>
        <option value="TB.PARU">POLI TB.PARU</option>
    </select>
</div>
<div class="form-group" id="doctorGroup" style="display: none;">
    <label for="doctor">Dokter:</label>
    <select id="doctor" name="doctor" class="form-control" required>
        <option value="">-- PILIH DOKTER --</option>
    </select>
</div>
<script>
function updateDoctor() {
    var poli = document.getElementById("poli").value;
    var doctorSelect = document.getElementById("doctor");
    var doctorGroup = document.getElementById("doctorGroup");

    // Reset doctor list
    doctorSelect.innerHTML = '<option value="">-- PILIH DOKTER --</option>';
    if (poli === "UMUM") {
        doctorSelect.innerHTML += '<option value="Dr. Selly Marchella Prestika">Dr. Selly Marchella Prestika</option>';
    } else if (poli === "Gigi") {
        doctorSelect.innerHTML += '<option value="Drg. Devi Sintiasakti">Drg. Devi Sintiasakti</option>';
    } else if (poli === "KIA") {
        doctorSelect.innerHTML += '<option value="Dr. Ahmad Yani">Dr. Ahmad Yani</option>';
    } else if (poli === "Lansia") {
        doctorSelect.innerHTML += '<option value="Yanti Krisdayanti, A.Md. RMIK">Yanti Krisdayanti, A.Md. RMIK</option>';
    } else if (poli === "TB.PARU") {
        doctorSelect.innerHTML += '<option value="Pa Gumilang">Pa Gumilang</option>';
    } else if (poli === "ANAK") {
        doctorSelect.innerHTML += '<option value="Dr. Selly Marchella Prestika">Dr. Selly Marchella Prestika</option>';

    }

    // Show doctor select if a valid poli is selected
    if (poli === "UMUM" || poli === "Gigi" || poli === "KIA" || poli === "Lansia" || poli === "TB.PARU" || poli === "ANAK") {
        doctorGroup.style.display = "block";
    } else {
        doctorGroup.style.display = "none";
    }
}
</script>


                    <input type="submit" value="SIMPAN" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>