
<?php

function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);

    return $harga - $potongan;
}

// Data harga
$hargaAwal = 150000;
$diskon = 10;

// Menghitung potongan harga
$potongan = $hargaAwal * ($diskon / 100);

// Menghitung harga setelah diskon
$hargaAkhir = hitungDiskon($hargaAwal, $diskon);

// Menampilkan hasil
echo "<h2>Perhitungan Diskon</h2>";

echo "Harga awal: Rp" .
     number_format($hargaAwal, 0, ",", ".") . "<br><br>";

echo "Diskon: " . $diskon . "%<br><br>";

echo "Potongan harga: Rp" .
     number_format($potongan, 0, ",", ".") . "<br><br>";

echo "<h3>Harga setelah diskon</h3>";

echo "<h2>Rp" .
     number_format($hargaAkhir, 0, ",", ".") .
     "</h2>";

?>
