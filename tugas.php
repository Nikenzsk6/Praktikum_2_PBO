<?php
class kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;

    public function __construct($nomor, $merk, $jenis)
    {
        $this->nomor  = $nomor;
        $this->merk   = $merk;
        $this->jenis  = $jenis;
        $this->status = "Tersedia";
    }

    public function tampilKendaraan()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk Kendaraan : " .  $this->merk . "<br>";
        echo "Jenis Kendaraan : " .  $this->jenis . "<br>";
    }

    public function statusKendaraan()
    {
        // echo "Nama Kendaraan : " . $this->merk . "<br>";
        echo "Status Kendaraan : " . $this->status . "<br>";
    }
}

class pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function __construct($id, $nama, $alamat)
    {
        $this->id     = $id;
        $this->nama   = $nama;
        $this->alamat = $alamat;
    }

    public function tampilPelanggan()
    {
        echo "Id Pelanggan : " . $this->id . "<br>";
        echo "Nama Pelanggan : " .  $this->nama . "<br>";
        echo "ALamat : " .  $this->alamat . "<br>";
    }

    public function sewaKendaraan($kendaraan)
    {
        if ($kendaraan->status == "Tersedia") {
            $kendaraan->status = "Disewa";
            echo "Kendaraan Yang Disewa : " . $kendaraan->merk . "<br>";
            echo $this->nama . " berhasil menyewa kendaraan " . $kendaraan->merk .
                "(" . $kendaraan->nomor . ")";
        } else {
            echo $this->nama . " gagal menyewa, kendaraan " . $kendaraan->merk . " (" . $kendaraan->nomor .
                ") sedang disewa.<br>";
        }
    }
}

$kendaraan1 = new Kendaraan("AE 1234 XY", "Toyota Avanza", "Mobil");
$kendaraan2 = new Kendaraan("AE 5678 ZZ", "Honda Vario", "Motor");

$pelanggan1 = new Pelanggan(1, "Budi", "Nganjuk");
$pelanggan2 = new Pelanggan(2, "Sari", "Kediri");

echo "<h3>Data Kendaraan</h3>";
$kendaraan1->tampilKendaraan();
$kendaraan1->statusKendaraan();
echo "<br>";
$kendaraan2->tampilKendaraan();
$kendaraan2->statusKendaraan();

echo "<h3>Data Pelanggan</h3>";
$pelanggan1->tampilPelanggan();
echo "<br>";
$pelanggan2->tampilPelanggan();

echo "<hr>";
echo "<h3>Proses Sewa Kendaraan</h3>";
$pelanggan1->tampilPelanggan();
$pelanggan1->sewaKendaraan($kendaraan1);
echo "<br><br>";
$pelanggan2->tampilPelanggan();
$pelanggan2->sewaKendaraan($kendaraan1);

echo "<hr>";
echo "<h3>Status Kendaraan</h3>";
$kendaraan1->tampilKendaraan();
$kendaraan1->statusKendaraan();
echo "<br>";
$kendaraan2->tampilKendaraan();
$kendaraan2->statusKendaraan();
