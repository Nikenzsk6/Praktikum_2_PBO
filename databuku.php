<?php
class Buku
{
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    public function tampilkanData()
    {
        echo "Kode : " . $this->kode . "<br>";
        echo "Judul : " .  $this->judul . "<br>";
        echo "Penulis : " .  $this->penulis . "<br>";
        echo "Tahun Terbit : " .  $this->tahun . "<br>";
    }
}

$buku = new Buku();
$buku->kode = "23002";
$buku->judul = "Pengantar Teknologi Informasi";
$buku->penulis = "Andi Prasetyo";
$buku->tahun = "2016";
$buku->tampilkanData();
