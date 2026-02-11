<?php
class KalkulatorSuhu {
    public $suhu;

    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    public function cToK() {
        return $this->suhu + 273.15;
    }
}

$kalkulator = new KalkulatorSuhu(30);

echo "=== KALKULATOR SUHU === <br>";
echo "Suhu (C)     : " . $kalkulator->suhu . "<br>";
echo "Fahrenheit   : " . $kalkulator->cToF() . "<br>";
echo "Kelvin       : " . $kalkulator->cToK();
?>
