<?php

class Mobil {
    private $kecepatan;
    private $warna;

    // Constructor untuk inisialisasi nilai awal
    public function __construct() {
        $this->kecepatan = 0;
        $this->warna = "Putih"; // Warna default
    }

    // Setter untuk kecepatan
    public function setKecepatan($kecepatan) {
        if ($kecepatan >= 0) {
            $this->kecepatan = $kecepatan;
        }
    }

    // Getter untuk kecepatan
    public function getKecepatan() {
        return $this->kecepatan;
    }

    // Setter untuk warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Getter untuk warna
    public function getWarna() {
        return $this->warna;
    }
}

// Contoh penggunaan
$mobil = new Mobil();

// Mengatur nilai menggunakan setter
$mobil->setWarna("Merah");
$mobil->setKecepatan(60);

// Menampilkan nilai menggunakan getter
echo "Warna Mobil: " . $mobil->getWarna() . "<br>";
echo "Kecepatan Mobil: " . $mobil->getKecepatan() . " km/jam";

?>
