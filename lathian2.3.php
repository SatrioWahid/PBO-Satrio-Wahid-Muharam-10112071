<?php

class BelanjaWarung {

    // Property
    public $namaBarang;
    public $harga;
    public $jumlah;
    public $diskon = 0.1; // 10%
    public $uangDibayar;

    public static $pajak = 0.02; // 2%

    public $subtotal;
    public $nilaiDiskon;
    public $nilaiPajak;
    public $totalAkhir;

    // Method hitung total
    public function hitungTotal() {
        $this->subtotal = $this->harga * $this->jumlah;

        $this->nilaiDiskon = $this->subtotal * $this->diskon;

        $setelahDiskon = $this->subtotal - $this->nilaiDiskon;

        $this->nilaiPajak = $setelahDiskon * self::$pajak;

        $this->totalAkhir = $setelahDiskon + $this->nilaiPajak;
    }

    // Method hitung kembalian
    public function hitungKembalian() {
        return $this->uangDibayar - $this->totalAkhir;
    }
}


// =====================
// Membuat Object
// =====================

$belanja = new BelanjaWarung();

$belanja->namaBarang = "sampo";
$belanja->harga = 12000;
$belanja->jumlah = 2;
$belanja->uangDibayar = 130000;

$belanja->hitungTotal();


// =====================
// Output
// =====================

echo "=========== Warung Resyan =========== <br>";
echo "Kasir   : Ipin <br>";
echo "Pembeli : Revan <br>";
echo "--------------------------------- <br>";
echo "{$belanja->namaBarang} x {$belanja->jumlah} @ Rp " . number_format($belanja->harga,0,",",".") . "<br>";
echo "--------------------------------- <br>";
echo "SUBTOTAL    : Rp " . number_format($belanja->subtotal,0,",",".") . "<br>";
echo "DISKON 10%  : Rp " . number_format($belanja->nilaiDiskon,0,",",".") . "<br>";
echo "PAJAK 2%    : Rp " . number_format($belanja->nilaiPajak,0,",",".") . "<br>";
echo "--------------------------------- <br>";
echo "TOTAL BAYAR : Rp " . number_format($belanja->totalAkhir,0,",",".") . "<br>";
echo "UANG BAYAR  : Rp " . number_format($belanja->uangDibayar,0,",",".") . "<br>";
echo "KEMBALIAN   : Rp " . number_format($belanja->hitungKembalian(),0,",",".") . "<br>";

?>
