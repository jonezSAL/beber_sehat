<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>65Dokter</title>
    <style>
        /* CSS Styles */

        /* CSS Styles */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
        }

        .card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .card button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        .separator {
            width: 100%;
            border-bottom: 1px solid #ccc;
            margin: 20px 0;
        }

        .total-patients {
            text-align: center;
            margin-bottom: 20px;
        }
        .total-patients {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .separator {
            height: 1px;
            background-color: #ccc;
            margin: 10px 0;
        }

        .patient-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .patient {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }

        .patient:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .patient h3 {
            margin-top: 0;
        }

        .patient img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .patient button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .patient button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div class="card">
            <img src="https://smpn2garut.sch.id/wp-content/uploads/2019/11/noavatar-480x400.png" alt="Dr. Ahmad Yani">
            <h3>Poli KIA</h3>
            <p class="doctor">Dr. Ahmad Yani</p>
            <form action="loginKIA.php" method="POST">
                <input type="hidden" name="doctor" value="Dr_Ahmad_Yani">
                <button type="submit">Login</button>
            </form><br>
            <form action="editdoc.php" method="POST">
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="card">
            <img src="https://smpn2garut.sch.id/wp-content/uploads/2019/11/noavatar-480x400.png" alt="drg. Devi Sintiasakti">
            <h3>Poli GIGI</h3>
            <p class="doctor">drg. Devi Sintiasakti</p>
            <form action="loginGIGI.php" method="POST">
                <input type="hidden" name="doctor" value="drg_Devi_Sintiasakti">
                <button type="submit">Login</button>
            </form><br>
            <form action="editdoc.php" method="POST">
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="card">
            <img src="https://smpn2garut.sch.id/wp-content/uploads/2019/11/noavatar-480x400.png" alt="dr. selly Marchella Prestika">
            <h3>Poli UMUM</h3>
            <p class="doctor">dr. selly Marchella Prestika</p>
            <form action="loginUMUM.php" method="POST">
                <input type="hidden" name="doctor" value="dr_selly_Marchella_Prestika">
                <button type="submit">Login</button>
            </form><br>
            <form action="editdoc.php" method="POST">
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="card">
            <img src="https://smpn2garut.sch.id/wp-content/uploads/2019/11/noavatar-480x400.png" alt="Yanti Krisdayanti,A.Md RMIK">
            <h3>Poli LANSIA</h3>
            <p class="doctor">dr. selly Marchella Prestika</p>
            <form action="loginLANSIA.php" method="POST">
                <input type="hidden" name="doctor" value="Yanti_Krisdayanti_A_Md_RMIK">
                <button type="submit">Login</button>
            </form><br>
            <form action="editdoc.php" method="POST">
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="card">
            <img src="https://smpn2garut.sch.id/wp-content/uploads/2019/11/noavatar-480x400.png" alt="Yanti Krisdayanti,A.Md RMIK">
            <h3>Poli TB.PARU</h3>
            <p class="doctor">Pa Gumilang</p>
            <form action="loginPARU.php" method="POST">
                <input type="hidden" name="doctor" value="Pa Gumilang">
                <button type="submit">Login</button>
            </form><br>
            <form action="editdoc.php" method="POST">
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="card">
            <img src="https://smpn2garut.sch.id/wp-content/uploads/2019/11/noavatar-480x400.png" alt="Yanti Krisdayanti,A.Md RMIK">
            <h3>Poli ANAK</h3>
            <p class="doctor">dr. selly Marchella Prestika</p>
            <form action="loginAnk.php" method="POST">
                <input type="hidden" name="doctor" value="dr. selly Marchella Prestika">
                <button type="submit">Login</button>
            </form><br>
            <form action="editdoc.php" method="POST">
                <button type="submit">Edit</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="total-patients">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "Beber";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT COUNT(*) as total FROM patients";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Total Pasien: " . $row["total"];
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <div class="separator"></div>

    <div class="patient-list">
        <?php
        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT antrian, nik, nama, poli FROM patients";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='patient'>
                        <h3>No: " . $row["antrian"] . "</h3>
                        <p>NIK: " . $row["nik"] . "</p>
                        <p>Nama: " . $row["nama"] . "</p>
                        <p>Poli: " . $row["poli"] . "</p>
                      </div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

</body>

</html>
