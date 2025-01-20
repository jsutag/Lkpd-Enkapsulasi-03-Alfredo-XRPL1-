<?php

class Produk {
    private $nama;
    private $harga;

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama 
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk harga
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Getter untuk harga
    public function getHarga() {
        return $this->harga;
    }
}

// Membuat objek dari kelas Produk
$produk = new Produk();

// Mengatur nilai menggunakan setter
$produk->setNama("Laptop Asus");
$produk->setHarga(8000000);

// Menampilkan nilai menggunakan getter
echo "Nama Produk: " . $produk->getNama() . "<br>";
echo "Harga: Rp " . number_format($produk->getHarga(), 0, ',', '.');

?>
