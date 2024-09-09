<?php

Class Kendaraan
{
    var $bahanbakar;
    var $tahunpembuatan;
    var $harga;
    var $hargabekas;
    var $pajak;
    var $plat;


    function statusharga() {
        if($this->harga > 50000000) {
            $status = "Harga Mahal";
        } else {
            $status = "Harga Murah";
        }
        return $status;
    }

    function statusbahanbakar() {
        if($this->bahanbakar == "Premium" && $this->tahunpembuatan < 2005) {
            $status = "Dapat Subsidi";
        } else {
            $status = "Tidak Dapat Subsidi";
        }
        return $status;
    }

    function hargabekas() {
        if ($this->tahunpembuatan > 2005) {
            ($hargabekas = $this->harga - ($this->harga * 20/100));
            return $hargabekas;
        } elseif ($this->tahunpembuatan >= 2000 && $this->tahunpembuatan <= 2005) {
            ($hargabekas = $this->harga - ($this->harga * 30/100));
            return $hargabekas;
        } elseif ($this->tahunpembuatan < 2000) {
            ($hargabekas = $this->harga - ($this->harga * 40/100));
            return $hargabekas;
        }
    }

    function pajak() {
        if ($this->tahunpembuatan < 2017) {
            $this->pajak = $this->hargabekas() * 0.025;
            return $this->pajak;
        }
    }

    function platnomor() {
        if ($this->plat %2 == 0) {
            $harioperasi = "Selasa, Kamis dan Sabtu";
            return $harioperasi;
        } elseif ($this->plat %2 == 1) {
            $harioperasi = "Senin, Rabu dan Jumat";
            return $harioperasi;
        }
    }
}

$objekkendaraan1 = new Kendaraan();
$objekkendaraan1->bahanbakar = "Premium";
$objekkendaraan1->harga = 50000000;
$objekkendaraan1->tahunpembuatan = 1999;
$objekkendaraan1->plat = 2128;

echo "Status Harga : " . $objekkendaraan1->statusharga() . "<br/>";
echo "Tahun Pembuatan : " . $objekkendaraan1->statusbahanbakar() . "<br/>";
echo "Harga Bekas : " . $objekkendaraan1->hargabekas() . "<br/>";
echo "Jumlah Pajak : " . $objekkendaraan1->pajak() . "<br/>";
echo "Hari Operasi : " . $objekkendaraan1->platnomor() . "<br/>";
?>