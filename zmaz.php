<?php
global $spojenie;
include 'spojenie.php';



$prem = $_GET['id'];
$sql = "DELETE FROM dbauta WHERE id=$prem";
$spojenie->query($sql);
header("Location: index.php");

?>