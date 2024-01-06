<?php
require_once("database.php");
require_once("scanne.php");
require_once("sign_upfct.php");




$database = new database();
$scanne = new scanne($database->getConnectionDB());
$signupfct = new signupfct($database->getConnectionDB());

?>