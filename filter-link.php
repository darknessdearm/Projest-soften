<?php
require_once "dblink.php";
$filter = $_GET["filter"];
if($filter === 'all')
$sql = "SELECT * FROM product";
else 
$sql = "SELECT * FROM product where Type = '$filter'";
$result = connect_database($sql);

$outp = "[";
while($rs = $result->fetch_assoc()) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"ProductID":"'.$rs["ProductID"].'",';
    $outp .= '"ProductName":"'.$rs["ProductName"].'",';
    $outp .= '"Type":"'.$rs["Type"].'",';
    $outp .= '"Price":"'.$rs["Price"].'",';
    $outp .= '"Description":"'.$rs["Description"].'",';
    $outp .= '"Balance":"'.$rs["Balance"].'",';
    $outp .= '"img":"img/Product/'.$rs["img"].'.png"}';
}
$outp .="]";


echo($outp);
?>