<?php

Class Belanja {
    var $kartu;
    var $totalbelanja;
    var $diskon;
    var $biayadikeluarkan;

    function kartumember() {
        if ($this->kartu == true) {
            $status = "Ya";
        } else {
            $status = "Tidak";
        }
        return $status;
    }

    function totalbelanja() {
        if ($this->totalbelanja > 100000 && $this->kartu == true) {
            return $this->totalbelanja - 15000;
        } elseif ($this->totalbelanja > 500000 && $this->kartu == true) {
            return $this->totalbelanja - 50000;
        } elseif ($this->totalbelanja > 100000 && $this->kartu == false) {
            return $this->totalbelanja - 5000;
        }
    }
}

$pembeli1 = new Belanja();
$pembeli1->kartu = true;
$pembeli1->totalbelanja = 200000;
$pembeli1->biayadikeluarkan = 185000;

echo "Apakah ada kartu member : " . $pembeli1->kartumember() . "<br/>";
echo "Total Belanjaan : " . $pembeli1->totalbelanja . "<br/";
echo "Total Bayar : " . $pembeli1->totalbelanja($this->totalbelanja) . "<br/>";
?>