<?php
$myObj = new StdClass;
$myObj->ndate = date("Y/m/d");
$myObj->ntime = date("h:i:sa");
$myObj->ntitle = $_POST['ntitle'];
$myObj->ndesc = $_POST['ndesc'];

$fp = fopen('results.json', 'a');

$stat = fstat($fp);
ftruncate($fp, $stat['size']-1);
fwrite($fp,",");
fwrite($fp, json_encode($myObj , JSON_PRETTY_PRINT));
fwrite($fp,"]");
fclose($fp);

header("Location: ../news3.php");
die();

?>