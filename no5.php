<?php

class Rectangle {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$persegi_panjang = new Rectangle(10, 5);

echo "Luas Persegi Panjang: " . $persegi_panjang->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $persegi_panjang->hitungKeliling();

?>
