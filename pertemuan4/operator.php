<?php
$a =10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Hasil Pangkat : {$pangkat} <br>";
 // soal 3.2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b ;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b ;
$hasilLebihBesarSama = $a >= $b ;

echo "Hasil Sama : {$hasilSama} <br>";
echo "Hasil tidak sama : {$hasilTidakSama} <br>";
echo "Hasil lebih kecil : {$hasilLebihKecil} <br>";
echo "Hasil lebih besar : {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama dengan : {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama dengan : {$hasilLebihBesarSama} <br>";
//soal 3.3
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And : {$hasilAnd} <br>";
echo "Hasil Or : {$hasilOr} <br>";
echo "Hasil Not A : {$hasilNotA} <br>";
echo "Hasil Not B : {$hasilNotB} <br>";
//soal 3.4
$hasilTambahSama = $a += $b ;
$hasilKurangSama = $a -= $b ;
$hasilKaliSama = $a *= $b ;
$hasilBagiSama = $a /= $b ;
$hasilSisaBagiSama = $a %= $b ;
echo "<br>";
echo "Hasil tambah sama : {$hasilTambahSama} <br>";
echo "Hasil kurang sama : {$hasilKurangSama} <br>";
echo "Hasil kali sama : {$hasilKaliSama} <br>";
echo "Hasil bagi sama : {$hasilBagiSama} <br>";
echo "Hasil sisa bagi sama : {$hasilSisaBagiSama} <br>";
//soal 3.5
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";
echo "Hasil identik : {$hasilIdentik} <br>";
echo "Hasil tidak identik  : {$hasilTidakIdentik} <br>";
// soal cerita
$c = 45;
$d = 28;
$kursiTdkTerpakai = $c - $d ;
$persenKursi = $kursiTdkTerpakai * 100 / $c;
echo "<br>";
echo "jumlah Kursi kosonng : {$kursiTdkTerpakai } <br>";
echo "Hasil persen : {$persenKursi} <br>";
?>