<?php

class ProdukElektronik {
    private $merk;
    private $garansi;

    // Constructor untuk inisialisasi nilai awal
    public function __construct() {
        $this->merk = "";
        $this->garansi = 0; // Garansi dalam bulan
    }

    // Setter untuk merk
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    // Getter untuk merk
    public function getMerk() {
        return $this->merk;
    }

    // Setter untuk garansi
    public function setGaransi($garansi) {
        if ($garansi >= 0) {
            $this->garansi = $garansi;
        }
    }

    // Getter untuk garansi
    public function getGaransi() {
        return $this->garansi;
    }
}

// Contoh penggunaan
$produk = new ProdukElektronik();

// Mengatur nilai menggunakan setter
$produk->setMerk("Samsung");
$produk->setGaransi(12);

// Menampilkan nilai menggunakan getter
echo "Merk Produk: " . $produk->getMerk() . "<br>";
echo "Masa Garansi: " . $produk->getGaransi() . " bulan";

?>
