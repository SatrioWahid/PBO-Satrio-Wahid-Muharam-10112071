<?php
//ini adalah function
function formatRupiah($angka) : string {
    return "Rp " . number_format(num: ($angka), decimals: 0, decimal_separator: ',', thousands_separator: '.');
}

class Belanja {

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    //ini adalah method yang ...
    public function hitungSubtotal(): float|int {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon($persenDiskon): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
}
//buat array data pembelian
$data = [
    'namaPembeli' =>'Miftah',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang'=> 12000,
    'jumlahBeli'=>12
];
//instansiasi objek belanja dari class belanja
$belanja = new Belanja();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $data["jumlahBeli"];

//output

echo "<h2> STRUK BELANJA WARUNG A </h2>";
echo "Pembeli: " . $belanja->namaPembeli . "<br>";
echo "Barang: " . $belanja->namaBarang . "<br>";
echo "Subtota: " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
echo "total (diskon 10%): " . formatRupiah($belanja->hitungTotalDenganDiskon(10));
?>
