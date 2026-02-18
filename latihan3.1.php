<?php
class kendaraan
{
    var $jumlahRoda; 
    var $warna;
    var $bahanBakar; 
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function statusHarga()
    {
        if ($this->harga > 5000000) 
            $status = 'Mahal';
        else 
            $status = 'Murah';
        return $status;
    }

    function statusBBM()
    {
        if ($this->bahanBakar == "Premium") 
            $status = "Menggunakan BBM Premium";
        else if ($this->bahanBakar == "Pertalite")
            $status = "Menggunakan BBM Pertalite";
        else if ($this->bahanBakar == "Pertamax")
            $status = "Menggunakan BBM Pertamax";
        else
            $status = "BBM tidak diketahui";

        return $status;
    }

   function hargaBekas()
{
    return $this->harga - ($this->harga * 0.10);
}

}

$objekKendaraan1 = new kendaraan();
$objekKendaraan1->merek = "Yamaha MIO"; // set properti
$objekKendaraan1->harga = "10000000";   // set properti
$objekKendaraan1->tahunPembuatan = "2010";
$objekKendaraan1->bahanBakar = "Pertalite";
$objekKendaraan1->warna = "Merah";
$objekKendaraan1->jumlahRoda = "Dua";

$objekKendaraan2 = new kendaraan();
$objekKendaraan2->merek = "Toyota Avanza"; // set properti
$objekKendaraan2->harga = "10000000";    // set properti
$objekKendaraan2->tahunPembuatan = "2011";
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->warna = "Silver";
$objekKendaraan2->jumlahRoda = "Empat";

echo "Merek: ".$objekKendaraan2->merek; // Merek: Toyota Avanza
echo "<br>";
echo "Nominal Harga: ".$objekKendaraan2->harga; // Nominal Harga: 10000000
echo "<br>";
echo "Status Harga Kendaraan: ".$objekKendaraan2->statusHarga();
echo "<br>"; // Status Harga Kendaraan : Mahal
echo "Status Bahan Bakar: ".$objekKendaraan2->statusBBM();
echo "<br>";
echo "Status Harga Kendaraan Bekas: ".$objekKendaraan2->hargaBekas();
echo "<br>";
echo "warna: ".$objekKendaraan2->warna;
echo "<br>";
echo "jumlah Roda: ".$objekKendaraan2->jumlahRoda;
echo "<br>";
echo "Tahun Pembuatan: ".$objekKendaraan2->tahunPembuatan;
echo "<br>";

echo "--------------------------<br>";

echo "Merek: ".$objekKendaraan1->merek; // Merek: Toyota Avanza
echo "<br>";
echo "Nominal Harga: ".$objekKendaraan1->harga; // Nominal Harga: 10000000
echo "<br>";
echo "Status Harga Kendaraan: ".$objekKendaraan1->statusHarga();
echo "<br>"; // Status Harga Kendaraan : Mahal
echo "Status Bahan Bakar: ".$objekKendaraan1->statusBBM();
echo "<br>";
echo "Status Harga Kendaraan Bekas: ".$objekKendaraan1->hargaBekas();
echo "<br>";
echo "warna: ".$objekKendaraan1->warna;
echo "<br>";
echo "jumlah Roda: ".$objekKendaraan1->jumlahRoda;
echo "<br>";
echo "Tahun Pembuatan: ".$objekKendaraan1->tahunPembuatan;


?>
