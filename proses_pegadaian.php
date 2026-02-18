<?php

class Pegadaian {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $terlambat;

    public function totalPinjaman(): float {
        return $this->pinjaman + ($this->pinjaman * ($this->bunga / 100));
    }

    public function angsuran(): float {
        return $this->totalPinjaman() / $this->lama;
    }

    public function denda(): float {
        return $this->angsuran() * 0.0015 * $this->terlambat;
    }

    public function totalBayar(): float {
        return $this->angsuran() + $this->denda();
    }
}

$data = new Pegadaian();

$data->pinjaman   = (float) htmlspecialchars($_POST['pinjaman']);
$data->bunga      = (float) htmlspecialchars($_POST['bunga']);
$data->lama       = (int) htmlspecialchars($_POST['lama']);
$data->terlambat  = (int) htmlspecialchars($_POST['terlambat']);

echo "<h2>Data Pegadaian</h2>";
echo "Total Pinjaman : Rp " . number_format($data->totalPinjaman(),0,',','.') . "<br>";
echo "Besaran Angsuran : Rp " . number_format($data->angsuran(),0,',','.') . "<br>";
echo "Denda Keterlambatan : Rp " . number_format($data->denda(),0,',','.') . "<br>";
echo "Total Pembayaran : Rp " . number_format($data->totalBayar(),0,',','.') . "<br>";

?>
