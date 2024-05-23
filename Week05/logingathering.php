<html>

<?php
include("setting.inc");
?>

<form action = "checkgathering.php" method = "get">

學號：<input type = "id" name = "sId" value = ""><br/>
密碼：<input type = "password" name = "sPwd"><br/>
<input type = "submit" value = "登入">
</form>

<?php
// header("Refresh:1");
date_default_timezone_set("Asia/Taipei");
// echo date("Y/M/d H:i:sa");

if(isset($_COOKIE["id"])){
    echo $_COOKIE["id"]."歡迎回來";
} else{
    echo "這是你第一次到網站";
}

?>

<?php
include("footer.inc");
?>

</html>
