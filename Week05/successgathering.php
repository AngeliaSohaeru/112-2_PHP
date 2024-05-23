<?php
session_start();
?>

<html>
<meta charset = "utf-8">

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "歡迎進入網頁<br/>";
        echo "<a href='gathering.php'>請填寫表單<a/>";
    }else{
        echo "非法進入網頁";
        echo "3秒鐘之後回登入書面";
        header("Refresh:3;url=logingathering.php");   
    }
}else{
    echo "非法進入網頁";
    echo "3秒鐘之後回登入書面";
    header("Refresh:3;url=logingathering.php"); 
}
?>

<?php
include("footer.inc");
?>

</html>