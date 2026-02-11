<?php

class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahbarang;
    public $totalBayar;
    public $diskon;
public static $pajak = 0.02;

public function totalHarga() : float|int {
    $subtotal = $this->hargaBarang * $this->jumlahbarang;

    return $subtotal;
}

}



echo "<pre>";
echo "Nama Pembeli: " . $belanja1->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n";


echo "Nama Pembeli: " . $belanja2->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja2->totalHarga() . "\n";

echo "Nama Pembeli: " . $belanja3->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja3->totalHarga() . "\n";
echo "<pre>";
?>