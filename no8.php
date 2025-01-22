<?php

class Karyawan {
    private $nama;
    private $gaji;

    public function __construct() {
        $this->nama = "";
        $this->gaji = 0;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setGaji($gaji) {
        if ($gaji >= 0) {
            $this->gaji = $gaji;
        }
    }

    public function getGaji() {
        return $this->gaji;
    }
}

$karyawan = new Karyawan();

$karyawan->setNama("Jengtro Malangton");
$karyawan->setGaji(5000000);

echo "Nama Karyawan: " . $karyawan->getNama() . "<br>";
echo "Gaji: Rp. " . number_format($karyawan->getGaji(), 0, ',', '.');

?>
