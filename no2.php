<?php

class Mahasiswa {
    private $nama;
    private $nim;

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama 
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk nim
    public function getNim() {
        return $this->nim;
    }
}

// Contoh penggunaan
$mahasiswa = new Mahasiswa();

// Mengatur nilai menggunakan setter
$mahasiswa->setNama("Budi Santoso");
$mahasiswa->setNim("12345678");

// Menampilkan nilai menggunakan getter
echo "Nama Mahasiswa: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim();

?>
