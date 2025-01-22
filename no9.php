<?php

class Sepeda {
    private $warna;
    private $kecepatan;

    public function __construct() {
        $this->warna = "Hitam"; 
        $this->kecepatan = 0;   
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }


    public function getWarna() {
        return $this->warna;
    }


    public function setKecepatan($kecepatan) {
        if ($kecepatan >= 0) {
            $this->kecepatan = $kecepatan;
        }
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }
}
$sepeda = new Sepeda();

$sepeda->setWarna("Merah");
$sepeda->setKecepatan(15);

echo "Warna Sepeda: " . $sepeda->getWarna() . "<br>";
echo "Kecepatan Sepeda: " . $sepeda->getKecepatan() . " km/jam";

?>

