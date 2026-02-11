<?php

class Belanja {
    public $namaPembeli="Miftah";
    public $namaBarang="sampo";
    public $hargaBarang="9000";
    public $jumlahbarang=2;
    public $totalBayar;
    public $diskon=0.1;
public static $pajak = 0.02;

public function totalHarga() : float|int {
    $subtotal = $this->hargaBarang * $this->jumlahbarang;

    return $subtotal;
}

}






?>