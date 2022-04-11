<?php 

class classConstruct{

    var $nama;

    //__construct adalah function yang pertama kali dijalankan!
    // tidak perlu memanggil lagi func __construct pada saat instantiate
    function __construct()
    {
        echo "Ini adalah pesan function __construct!<br>";
    }

    /*
    jika __construct yang pertama kali dijalankan
    __destruct kebalikannya, yaitu yang paling akhir dijalankan
    */
    function __destruct()
    {
        echo "Ini adalah pesan function __destruct!<br>";
    }

    function tampilNama(){
        echo "Nama saya Ulil Albab || function -> ". __FUNCTION__ ."() <br>";
    }

}

$instantiate = new classConstruct();
$instantiate->tampilNama();

?>