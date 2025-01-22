<?php

class Mahasiswa {
    private $nama;
    private $nim;

    
    public function setNama($nama) {
        $this->nama = $nama;
    }

    
    public function getNama() {
        return $this->nama;
    }

    
    public function setNim($nim) {
        $this->nim = $nim;
    }


    public function getNim() {
        return $this->nim;
    }
}

$mahasiswa = new Mahasiswa();

$mahasiswa->setNama("Budi Santoso");
$mahasiswa->setNim("12345678");

echo "Nama Mahasiswa: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim();

?>
