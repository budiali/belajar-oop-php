<?php 

/*
public
private
protected
*/

class Encapsulation{

    protected $nama = "Ulil Albab";

    protected function tampilkan_nama(){
        return "Nama saya ". $this->nama;
    }

    public function coba(){
        return $this->tampilkan_nama();
    }

}

$x = new Encapsulation();
echo $x->coba();

?>