<?php 
$input=$_POST['input'];
include "qrlib.php";
QRcode::png($input);
return QRcode::png($input);
?>