<?php


class Manusia{

    var $nama;

    public function beriNama($saya){
        return $this->nama = $saya." dari kelas ".__CLASS__;
    }

}

class Teman extends Manusia{

    var $namaTeman;
    function beriNamaTeman($namaTeman){
        return $this->namaTeman = $namaTeman ." dari kelas ".__CLASS__;
    }

}

$panggilKelas = new Teman();
echo $panggilKelas->beriNama("Malas Ngoding");
echo "<br>";
echo $panggilKelas->beriNamaTeman("Budi Ali");

?>