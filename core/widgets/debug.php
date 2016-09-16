<?php 
require_once (__DIR__.'tools/xmltojson.php');

$json=XmlToJson::Parse("http://symbion.dk/index.php?id=2471&type=9818");
$data=json_decode($json,true);
?>
<?php echo json_encode($data); ?>
