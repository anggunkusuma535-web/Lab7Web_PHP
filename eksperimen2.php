
<?php

$mahasiswa = [
    "Anggun",
    "Marisa",
    "Kensha",
    "Budi",
    "Andi",
    "Siti"
];

$hasil = [];

if (isset($_GET["nama"])) {

    $cari = trim($_GET["nama"]);

    foreach ($mahasiswa as $nama) {

        if (stripos($nama, $cari) !== false) {
            $hasil[] = $nama;
        }

    }
}

?>

<h2>Pencarian Nama Mahasiswa</h2>

<form method="GET" action="">

    <label>Masukkan nama:</label><br>

    <input type="text" name="nama"
           placeholder="Cari nama mahasiswa">

    <button type="submit">Cari</button>

</form>

<?php

if (isset($_GET["nama"])) {

    echo "<h3>Hasil Pencarian:</h3>";

    if (count($hasil) > 0) {

        foreach ($hasil as $nama) {

            echo htmlspecialchars($nama) . "<br>";

        }

    } else {

        echo "Nama mahasiswa tidak ditemukan.";

    }

}

?>
