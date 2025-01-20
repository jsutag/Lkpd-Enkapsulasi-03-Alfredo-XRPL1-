<?php

class Student {
    private $nama;
    private $nilai_uts;
    private $nilai_uas;

    // Constructor untuk inisialisasi nilai awal
    public function __construct($nama, $nilai_uts, $nilai_uas) {
        $this->nama = $nama;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
    }

    // Metode untuk menghitung rata-rata
    public function hitungRataRata() {
        return ($this->nilai_uts + $this->nilai_uas) / 2;
    }

    // Metode untuk menentukan kelulusan
    public function cekKelulusan() {
        $rata_rata = $this->hitungRataRata();
        if ($rata_rata >= 60) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }

    // Metode untuk mendapatkan grade
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

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk nilai UTS
    public function getNilaiUTS() {
        return $this->nilai_uts;
    }

    // Getter untuk nilai UAS
    public function getNilaiUAS() {
        return $this->nilai_uas;
    }
}

// Contoh penggunaan dengan beberapa mahasiswa
$students = [
    new Student("Iqbol", 85, 90),    // Rata-rata: 87.5 (A)
    new Student("Samsul", 75, 78),      // Rata-rata: 76.5 (B)
    new Student("Puput", 65, 60),      // Rata-rata: 62.5 (C)
    new Student("Uus", 55, 45),  // Rata-rata: 50 (D)
    new Student("Pendy", 40, 35),     // Rata-rata: 37.5 (E)
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
