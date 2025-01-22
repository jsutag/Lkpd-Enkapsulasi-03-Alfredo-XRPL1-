<?php

class Mobil {
    private $kecepatan;
    private $warna;


    public function __construct() {
        $this->kecepatan = 0;
        $this->warna = "Putih"; 
    }


    public function setKecepatan($kecepatan) {
        if ($kecepatan >= 0) {
            $this->kecepatan = $kecepatan;
        }
    }


    public function getKecepatan() {
        return $this->kecepatan;
    }


    public function setWarna($warna) {
        $this->warna = $warna;
    }


    public function getWarna() {
        return $this->warna;
    }
}


$mobil = new Mobil();


$mobil->setWarna("Merah");
$mobil->setKecepatan(60);


echo "Warna Mobil: " . $mobil->getWarna() . "<br>";
echo "Kecepatan Mobil: " . $mobil->getKecepatan() . " km/jam";

?>
