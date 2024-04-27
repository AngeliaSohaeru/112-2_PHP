<?php
session_start();
?>

<html>
<meta charset = "utf-8">

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "<a href='showreview.php'>歡迎進入網頁</a><br/>";
        echo "<a href='fail.php'>登出<a/>";
    }else{
        echo "非法進入網頁";
        echo "3秒鐘之後回登入書面";
        header("Refresh:3;url=index.php");   
    }
}else{
    echo "非法進入網頁";
    echo "3秒鐘之後回登入書面";
    header("Refresh:3;url=index.php"); 
}
?>

</html>