
<?php

$nama = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");

}

?>

<h2>Formulir Data Pengguna</h2>

<form method="POST">

    <label>Nama:</label><br>

    <input type="text" name="nama"
           placeholder="Masukkan nama"
           required>

    <br><br>

    <label>Email:</label><br>

    <input type="email" name="email"
           placeholder="Masukkan email"
           required>

    <br><br>

    <button type="submit">Kirim Data</button>

    <button type="reset">Reset</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    echo "<h3>Data yang Dikirim</h3>";

    echo "Nama: " . htmlspecialchars($nama) . "<br>";

    echo "Email: " . htmlspecialchars($email);

}

?>
