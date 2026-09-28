<?php
class mahasiswa
{
    public function tampilkanData($nim, $nama, $prodi, $matkul, $nilai)
    {
        echo "NIM : " . $nim . "<br>";
        echo "Nama : " .  $nama . "<br>";
        echo "Prodi : " .  $prodi . "<br>";
        echo "Mata Kuliah : " .  $matkul . "<br>";
        echo "Nilai : " .  $nilai . "<br>";
    }

    public function tentukanGrade($nilai)
    {
        if ($nilai >= 80) {
            return "A";
        } elseif ($nilai >= 70) {
            return "B";
        } elseif ($nilai >= 60) {
            return "C";
        } elseif ($nilai >= 50) {
            return "D";
        } elseif ($nilai <= 0) {
            return "Nilai tidak valid";
        } else {
            return "E";
        }
    }
}

$mhs1 = new mahasiswa();
$mhs1->tampilkanData("23002", "Andi", "Sistem Informasi", "Pemrograman WEB", "80");
echo "Grade : " . $mhs1->tentukanGrade("80") . "<br>";
