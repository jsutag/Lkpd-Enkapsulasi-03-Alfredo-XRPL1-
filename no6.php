<?php

class ProdukElektronik {
    private $merk;
    private $garansi;


    public function __construct() {
        $this->merk = "";
        $this->garansi = 0;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setGaransi($garansi) {
        if ($garansi >= 0) {
            $this->garansi = $garansi;
        }
    }

    public function getGaransi() {
        return $this->garansi;
    }
}

$produk = new ProdukElektronik();

$produk->setMerk("Samsung");
$produk->setGaransi(12);

echo "Merk Produk: " . $produk->getMerk() . "<br>";
echo "Masa Garansi: " . $produk->getGaransi() . " bulan";

?>
