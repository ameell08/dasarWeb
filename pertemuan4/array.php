<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus =[];

foreach ($nilaiSiswa as $nilai){
    if ($nilai >= 70){
        $nilaiLulus[]=$nilai;
    }
}

echo "<br>";
echo "Daftar nilai siswa yang lulus : " .implode(', ', $nilaiLulus);

//soal 5.2
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David' , 5],
    ['Eva', 6],
];
$karyawanPengalamanLimaThn =[];
foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaThn[] = $karyawan[0];
    }
}
echo "<br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(', ', $karyawanPengalamanLimaThn);

// soal 5.3
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],

];
$mataKuliah = 'Fisika';
echo "<br>";
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

// soal cerita
$data = [
    ['Alice',85],  
    ['Bob',92],  
    ['Charlie',78],  
    ['David',64],  
    ['Eva',90],  
  ];
    echo "<br> Daftar Nilai Siswa";
echo "<br>";
$total=0;
$mean=0;
foreach ($data as $nilai) {
 $total += $nilai[1];
}
$mean = $total / count($data);
echo "Nilai rata-rata siswa : $mean <br> ";
foreach ($data as $nilai) {
    if ($nilai[1] > $mean) {
        echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
    }
}
?>