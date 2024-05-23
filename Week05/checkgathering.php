<?php 
ob_start();
session_start();
?>

<?php
$sId = $_GET["sId"];
$sPwd = $_GET["sPwd"];

if ($sId == $sId && $sPwd == $sPwd){
    $_SESSION["check"]="Yes";
    setcookie("id",$sId,time()+36000);
    header("Location:successgathering.php");
}else{
    $_SESSION["check"]="No";
    header("Location:failgathering.php");
}
?>

<?php
include("footer.inc");
?>

