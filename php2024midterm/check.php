<?php 
ob_start();
session_start();
?>

<?php
$uName1 = "chair";
$uPWD1 = "123";
$uName2 = "reviewer";
$uPWD2 = "234";
$uName3 = "author";
$uPWD3 = "345";

$sName = $_GET["sName"];
$sPWD = $_GET["sPWD"];

if ($uName1 == $sName && $uPWD1 == $sPWD){
    $_SESSION["check"]="Yes";
    setcookie("userName",$uName1);
    header("Location: chair.php");
}elseif ($uName2 == $sName && $uPWD2 == $sPWD){
    $_SESSION["check"]="Yes";
    setcookie("userName",$uName2);
    header("Location: reviewer.php");
}elseif ($uName3 == $sName && $uPWD3 == $sPWD){
    $_SESSION["check"]="Yes";
    setcookie("userName",$uName3);
    header("Location: author.php");
}else{
    $_SESSION["check"]="No";
    header("Location: fail.php");
}

?>

