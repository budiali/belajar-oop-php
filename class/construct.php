<?php 

class classConstruct{

    var $nama;

    //__construct adalah function yang pertama kali dijalankan!
    // tidak perlu memanggil lagi func __construct pada saat instantiate
    function __construct()
    {
        echo "Ini adalah pesan function __construct!<br>";
    }

    function tampilNama(){
        echo "Nama saya Ulil Albab";
    }

}

$instantiate = new classConstruct();
$instantiate->tampilNama();

?>