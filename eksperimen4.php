
<?php

$error = "";
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nim = trim($_POST["nim"] ?? "");

    if (!ctype_digit($nim)) {

        $error = "NIM hanya boleh berisi angka.";

    } elseif (strlen($nim) != 10) {

        $error = "NIM harus terdiri dari 10 digit.";

    } else {

        $hasil = "NIM berhasil divalidasi: " . $nim;

    }
}

?>

<h2>Validasi NIM Mahasiswa</h2>

<form method="POST">

    <label>Masukkan NIM:</label><br>

    <input type="text" name="nim"
           placeholder="Masukkan 10 digit NIM"
           required>

    <button type="submit">Periksa NIM</button>

</form>

<?php

if ($error != "") {

    echo "<p style='color:red;'>";
    echo htmlspecialchars($error);
    echo "</p>";

}

if ($hasil != "") {

    echo "<p style='color:green;'>";
    echo htmlspecialchars($hasil);
    echo "</p>";

}

?>
