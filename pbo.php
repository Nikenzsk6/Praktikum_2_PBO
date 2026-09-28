<?php
class mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " .  $this->nama . "<br>";
        echo "Prodi : " .  $this->prodi . "<br>";
        echo "Semester : " .  $this->semester . "<br>";
    }
}

$mhs1 = new mahasiswa();

$mhs1->nim = "23002";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = "4";

$mhs1->tampilkanData();
echo "<br>";

$mhs2 = new mahasiswa();

$mhs2->nim = "23003";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = "2";

echo "Nama Mahasiswa 2 : " . $mhs2->nama;
