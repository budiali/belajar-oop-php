<?php 

class Database{

    var $host = "localhost";
    var $uname = "root";
    var $password = "";
    var $db = "malasngoding";
    
    function __construct()
    {
        $koneksi = $this->connection_db();
        if($koneksi){
            echo "Database berhasil terhubung!";
        }else{
            echo "Database gagal terhubung";
        }
    }

    function connection_db(){
        // static $conn;
        $conn = mysqli_connect($this->host, $this->uname, $this->password);
        mysqli_select_db($conn, "malasngoding");
        return $conn;
    }

    function ambil_data(){
        $koneksi = $this->connection_db();
        $data = mysqli_query($koneksi,"Select * from user");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

}

// $newDb = new Database();

?>