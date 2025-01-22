<?php

class Student {
    private $nama;
    private $nilai_uts;
    private $nilai_uas;

    public function __construct($nama, $nilai_uts, $nilai_uas) {
        $this->nama = $nama;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
    }

    public function hitungRataRata() {
        return ($this->nilai_uts + $this->nilai_uas) / 2;
    }

    public function cekKelulusan() {
        $rata_rata = $this->hitungRataRata();
        if ($rata_rata >= 60) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }

    public function getGrade() {
        $rata_rata = $this->hitungRataRata();
        if ($rata_rata >= 85) {
            return "A";
        } elseif ($rata_rata >= 75) {
            return "B";
        } elseif ($rata_rata >= 60) {
            return "C";
        } elseif ($rata_rata >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNilaiUTS() {
        return $this->nilai_uts;
    }

    public function getNilaiUAS() {
        return $this->nilai_uas;
    }
}

$students = [
    new Student("Iqbol", 85, 90),    
    new Student("Samsul", 75, 78),   
    new Student("Puput", 65, 60),      
    new Student("Uus", 55, 45),  
    new Student("Pendy", 40, 35),  
    new Student("Ucen", 47, 70)
];

// Menampilkan informasi nilai untuk setiap mahasiswa
foreach ($students as $student) {
    echo "Nama Mahasiswa: " . $student->getNama() . "<br>";
    echo "Nilai UTS: " . $student->getNilaiUTS() . "<br>";
    echo "Nilai UAS: " . $student->getNilaiUAS() . "<br>";
    echo "Rata-rata Nilai: " . $student->hitungRataRata() . "<br>";
    echo "Grade: " . $student->getGrade() . "<br>";
    echo "Status Kelulusan: " . $student->cekKelulusan() . "<br>";
    echo "--------------------------------<br>";
}

?>
