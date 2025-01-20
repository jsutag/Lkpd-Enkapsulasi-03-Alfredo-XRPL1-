<?php

class Rectangle {
    private $panjang;
    private $lebar;

    // Constructor untuk inisialisasi nilai awal
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Metode untuk menghitung luas
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // Metode untuk menghitung keliling
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Contoh penggunaan
$persegi_panjang = new Rectangle(10, 5);

// Menampilkan hasil perhitungan
echo "Luas Persegi Panjang: " . $persegi_panjang->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegi_panjang->hitungKeliling();

?>
