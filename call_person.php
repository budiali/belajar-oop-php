<?php 
include "class/person.php";

$objPerson = new Person();
$objPerson->set_name("Muhammad Sultan Ali");

$objPerson->perkenalan($objPerson->get_name());

?>