<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;
    public $totalGaji;

    // 5. Constructor dengan parameter
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->totalGaji = $this->hitungTotalGaji();
    }

    // 1. Method getGajiPokok berdasarkan ketentuan gambar
    public function getGajiPokok() {
        $listGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        // Jika golongan tidak ditemukan, defaultnya 0
        return $listGaji[$this->golongan] ?? 0;
    }

    // 2. Perhitungan lembur (Rp 15.000 / jam)
    public function hitungTotalGaji() {
        $gajiPokok = $this->getGajiPokok();
        $upahLembur = $this->jamLembur * 15000;
        return $gajiPokok + $upahLembur;
    }

    // 7. Destructor untuk membersihkan objek
    public function __destruct() {
        // Objek akan dihapus dari memori saat di-unset atau program selesai
    }
}

// 4. Array untuk menampung data (CRUD)
$daftarKaryawan = [
    new Karyawan("Winny", "IIb", 30),
    new Karyawan("Stendy", "IIIc", 32),
    new Karyawan("Alfred", "IVb", 30)
];

// 3. Perulangan Menu (Looping)
while (true) {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";
    
    // Mengambil input dari terminal
    $pilihan = trim(fgets(STDIN));

    if ($pilihan == "1") {
        // TAMPILKAN DATA (READ)
        echo "\n===== DATA GAJI KARYAWAN =====\n";
        echo str_pad("No", 3) . " | " . str_pad("Nama", 10) . " | " . str_pad("Gol", 5) . " | " . str_pad("Lembur", 6) . " | Total Gaji\n";
        echo "----------------------------------------------------------\n";
        foreach ($daftarKaryawan as $index => $k) {
            echo str_pad($index + 1, 3) . " | " . 
                 str_pad($k->nama, 10) . " | " . 
                 str_pad($k->golongan, 5) . " | " . 
                 str_pad($k->jamLembur, 6) . " | Rp" . number_format($k->totalGaji, 0, ',', '.') . "\n";
        }
    } 
    elseif ($pilihan == "2") {
        // TAMBAH DATA (CREATE)
        echo "Nama: "; $nama = trim(fgets(STDIN));
        echo "Golongan (Ib-IVd): "; $gol = trim(fgets(STDIN));
        echo "Jam Lembur: "; $lembur = (int)trim(fgets(STDIN));
        
        $daftarKaryawan[] = new Karyawan($nama, $gol, $lembur);
        echo "Data berhasil ditambahkan!\n";
    } 
    elseif ($pilihan == "3") {
        // UPDATE DATA (UPDATE)
        echo "Masukkan No data yang ingin diubah: "; $no = (int)trim(fgets(STDIN)) - 1;
        if (isset($daftarKaryawan[$no])) {
            echo "Nama Baru: "; $nama = trim(fgets(STDIN));
            echo "Golongan Baru: "; $gol = trim(fgets(STDIN));
            echo "Lembur Baru: "; $lembur = (int)trim(fgets(STDIN));
            
            $daftarKaryawan[$no] = new Karyawan($nama, $gol, $lembur);
            echo "Data berhasil diperbarui!\n";
        } else {
            echo "Data tidak ditemukan.\n";
        }
    } 
    elseif ($pilihan == "4") {
        // HAPUS DATA (DELETE)
        echo "Masukkan No data yang ingin dihapus: "; $no = (int)trim(fgets(STDIN)) - 1;
        if (isset($daftarKaryawan[$no])) {
            // Memanggil destructor secara tidak langsung dengan unset
            unset($daftarKaryawan[$no]);
            // Reset index array agar urutan 'No' kembali rapi
            $daftarKaryawan = array_values($daftarKaryawan);
            echo "Data berhasil dihapus!\n";
        } else {
            echo "Data tidak ditemukan.\n";
        }
    } 
    elseif ($pilihan == "5") {
        echo "Keluar dari program. Terima kasih!\n";
        break; // Berhenti dari loop
    } 
    else {
        echo "Pilihan menu tidak tersedia.\n";
    }
}