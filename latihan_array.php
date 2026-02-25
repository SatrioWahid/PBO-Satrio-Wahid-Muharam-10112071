<?php

class Mahasiswa {

    public $nama;
    public $kelas;
    public $nilai;

    public function __construct($nama, $kelas, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->nilai = $nilai;
    }

    // Method menentukan grade
    public function cekGrade() {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 75) {
            return "B";
        } elseif ($this->nilai >= 65) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    // Method menentukan kelulusan
    public function cekKelulusan() {
        if ($this->nilai >= 70) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }

    // Method tampil data
    public function tampilData() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->cekGrade() . "<br>";
        echo $this->cekKelulusan();
        echo "<hr>";
    }
}

// Membuat objek 
$mhs1 = new Mahasiswa("Aditya", "SI 2", 80);
$mhs2 = new Mahasiswa("Shinta", "SI 2", 75);
$mhs3 = new Mahasiswa("Ineu", "SI 2", 55);

// Menampilkan data
$mhs1->tampilData();
$mhs2->tampilData();
$mhs3->tampilData();

?>