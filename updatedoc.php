<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "Beber";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses edit dokter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $login_action = $_POST['login_action'];

    $sql = "UPDATE doctors SET name='$name', specialty='$specialty', login_action='$login_action' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Informasi dokter berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Form untuk mengedit informasi dokter
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id !== null) {
    $sql = "SELECT * FROM doctors WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            Nama Dokter: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            Spesialis: <input type="text" name="specialty" value="<?php echo $row['specialty']; ?>"><br>
            Aksi Login: <input type="text" name="login_action" value="<?php echo $row['login_action']; ?>"><br>
            <input type="submit" value="Simpan">
        </form>
<?php
    } else {
        echo "Dokter tidak ditemukan";
    }
} else {
    echo "ID dokter tidak valid";
}

$conn->close();
?>
