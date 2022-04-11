<?php 

include "class/database.php";
$db = new Database();

$aksi = $_GET['aksi'];
if($aksi == 'tambah_data'){
    $db->input($_POST['nama'], $_POST['alamat'], $_POST['usia']);
    header("location:tampil_data.php");
}

?>