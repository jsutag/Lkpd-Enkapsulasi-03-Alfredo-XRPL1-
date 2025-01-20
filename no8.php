<?php

class Karyawan {
    private $nama;
    private $gaji;

    // Constructor untuk inisialisasi nilai awal
    public function __construct() {
        $this->nama = "";
        $this->gaji = 0;
    }

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk gaji
    public function setGaji($gaji) {
        if ($gaji >= 0) {
            $this->gaji = $gaji;
        }
    }

    // Getter untuk gaji
    public function getGaji() {
        return $this->gaji;
    }
}

// Contoh penggunaan
$karyawan = new Karyawan();

// Mengatur nilai menggunakan setter
$karyawan->setNama("Jengtro Malangton");
$karyawan->setGaji(5000000);

// Menampilkan nilai menggunakan getter
echo "Nama Karyawan: " . $karyawan->getNama() . "<br>";
echo "Gaji: Rp. " . number_format($karyawan->getGaji(), 0, ',', '.');

?>
