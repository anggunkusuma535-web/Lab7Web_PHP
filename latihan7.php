<?php

$subtotal = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";

    if (
        $barang === "" ||
        !is_numeric($hargaInput) ||
        !ctype_digit((string)$jumlahInput) ||
        (float)$hargaInput < 0 ||
        (int)$jumlahInput < 1
    ) {

        $error = "Periksa kembali nama barang, harga, dan jumlah.";

    } else {

        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;

        $subtotal = $harga * $jumlah;
    }
}

?>

<form method="POST">

    <label>Nama barang</label>
    <input name="barang" type="text" required>

    <br><br>

    <label>Harga</label>
    <input name="harga" type="number"
           min="0" step="0.01" required>

    <br><br>

    <label>Jumlah</label>
    <input name="jumlah" type="number"
           min="1" step="1" required>

    <br><br>

    <button type="submit">Hitung</button>

</form>

<?php

if ($error !== null) {

    echo "<p>" . htmlspecialchars($error) . "</p>";

} elseif ($subtotal !== null) {

    echo "<h3>Ringkasan Transaksi</h3>";

    echo "Barang: " .
         htmlspecialchars($barang) . "<br>";

    echo "Subtotal: Rp" .
         number_format($subtotal, 0, ",", ".");

}

?>