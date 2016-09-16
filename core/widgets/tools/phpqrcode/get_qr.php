<?php 
$input=$_GET['input'];
include "qrlib.php";
QRcode::png($input);
?>