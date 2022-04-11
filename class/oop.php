<?php 

class Manusia{

    var $nama;
    var $warnaKulit;

    function set_nama($namaBaru){
        $this->nama = $namaBaru;
    }

    function set_warna_kulit($warnaKulitBaru){
        $this->warnaKulit = $warnaKulitBaru;
    }

    function tampilkan_nama(){
        return "Nama Saya $this->nama";
    }

    function tampilkan_warna_kulit(){
        return "Warna kulit saya $this->warnaKulit";
    }
}

$manusia = new Manusia();
$manusia->set_nama("Muhammad Sultan Ali");
$manusia->set_warna_kulit("Coklat");

echo $manusia->tampilkan_nama()."<br>";
echo $manusia->tampilkan_warna_kulit();

?>