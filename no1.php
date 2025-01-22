<?php

class Produk {
    private $nama;
    private $harga;

    
    public function setNama($nama) {
        $this->nama = $nama;
    }

     
    public function getNama() {
        return $this->nama;
    }

    
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    
    public function getHarga() {
        return $this->harga;
    }
}


$produk = new Produk();


$produk->setNama("MSI Laptop");
$produk->setHarga(10000000);

echo "Nama Produk: " . $produk->getNama() . "<br>";
echo "Harga: Rp " . number_format($produk->getHarga(), 0, ',', '.');

?>
