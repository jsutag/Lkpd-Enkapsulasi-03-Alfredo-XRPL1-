<?php

class Sepeda {
    private $warna;
    private $kecepatan;

    // Constructor untuk inisialisasi nilai awal
    public function __construct() {
        $this->warna = "Hitam"; // Warna default
        $this->kecepatan = 0;   // Kecepatan awal dalam km/jam
    }

    // Setter untuk warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Getter untuk warna
    public function getWarna() {
        return $this->warna;
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
}

// Contoh penggunaan
$sepeda = new Sepeda();

// Mengatur nilai menggunakan setter
$sepeda->setWarna("Merah");
$sepeda->setKecepatan(15);

// Menampilkan nilai menggunakan getter
echo "Warna Sepeda: " . $sepeda->getWarna() . "<br>";
echo "Kecepatan Sepeda: " . $sepeda->getKecepatan() . " km/jam";

?>

