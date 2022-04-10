<?php 

class Person{

    var $name;
    function set_name($newName){
        $this->name = $newName;
    }

    function get_name(){
        return $this->name;
    }

    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam.", Nama saya $nama";
    }

}

?>