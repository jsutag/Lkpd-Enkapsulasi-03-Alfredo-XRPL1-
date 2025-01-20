<?php

class Laptop {
    private $processor;
    private $ram;

    // Constructor untuk inisialisasi nilai awal
    public function __construct() {
        $this->processor = "";
        $this->ram = 0; // RAM dalam GB
    }

    // Setter untuk processor
    public function setProcessor($processor) {
        $this->processor = $processor;
    }

    // Getter untuk processor
    public function getProcessor() {
        return $this->processor;
    }

    // Setter untuk RAM
    public function setRam($ram) {
        if ($ram > 0) {
            $this->ram = $ram;
        }
    }

    // Getter untuk RAM
    public function getRam() {
        return $this->ram;
    }
}

// Contoh penggunaan
$laptop = new Laptop();

// Mengatur nilai menggunakan setter
$laptop->setProcessor("12th Gen Intel(R) Core(TM) i7-12650H");
$laptop->setRam(24);

// Menampilkan nilai menggunakan getter
echo "Processor: " . $laptop->getProcessor() . "<br>";
echo "RAM: " . $laptop->getRam() . " GB";

?>
