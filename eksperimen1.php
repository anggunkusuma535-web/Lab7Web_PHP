
<?php

$nama = "Anggun";
$tugas = 92;
$uts = 90;
$uas = 95;

// Menghitung nilai rata-rata
$rataRata = ($tugas + $uts + $uas) / 3;

// Menampilkan hasil
echo "<h2>Perhitungan Nilai Mahasiswa</h2>";

echo "Nama: " . $nama . "<br><br>";
echo "Nilai Tugas: " . $tugas . "<br>";
echo "Nilai UTS: " . $uts . "<br>";
echo "Nilai UAS: " . $uas . "<br><br>";

echo "Nilai Rata-rata: " .
     number_format($rataRata, 2);

?>
