<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100 ) {
    echo "Nilai huruf : A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf : B" ;
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} else if ($nilaiNumerik <70){
    echo "Nilai huruf : D";
}

//soal 4.2
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "Atlet tesebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

//soal 4.3
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

// soal 4.4
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br><br>";
echo "Total skor ujian adalah : $totalSkor";

// soal 4.6
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);
$nilai = array_slice($nilai,2,-2);
$total = array_sum($nilai);
$jumlsiswa = count($nilai);
$mean = $total / $jumlsiswa;

echo "<br>";
echo "Total nilai setelah mengabaikan dua skor tertinggi dan dua skor terendah : $total  " ;
echo "<br>";
echo "Jumlah siswa setelah skor diabaikan : $jumlsiswa ";
echo "<br>";
echo"Rata-rata nilai : $mean "; 

// soal 4.7
$harga = 120000;
if ($harga > 100000){
   $diskon =  $harga * 20/100 ;
   $bayar = $harga-$diskon;
   echo"<br>";
    echo "Total Bayar : $bayar";
} else  {
    echo "Tidak mendapat diskon";
}

//soal  4.8
$poin = 650;
$total = $poin;
$hadiah = ($total > 500) ? "ya" : "tidak";
echo "<br><br>";
echo "Total poin pemain : $total";
echo "<br>";
echo "Apakah pemain mendapat hadiah tamabhan ? $hadiah";
?>

