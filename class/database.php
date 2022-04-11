<?php 

class Database{

    var $host = "localhost";
    var $uname = "root";
    var $password = "";
    var $db = "malasngoding";
    
    function __construct()
    {
        $koneksi = mysqli_connect($this->host, $this->uname, $this->password);
        mysqli_select_db($koneksi, $this->db);

        if($koneksi){
            echo "Database berhasil terhubung";
        }else{
            echo "Database gagal terhubung";
        }
    }

}

$newDb = new Database();

?>