<html>

<?php
include("include.inc");
?>

<form action = "check.php" method = "get">

<title>高大資管論文投稿系統</title>
<b><font size = "15" color = "black">高大資管論文投稿系統</font></b><br/>
請選擇您的角色：
<select character = "sCharacter">
<option value = "chair">Chair</option>
<option value = "reviewer">Reviewer</option>
<option value = "author">Author</option>
</select><br/>
帳號：<input type = "text" name = "sName" value = ""><br/>
密碼：<input type = "password" name = "sPWD"><br/>
<input type = "submit" value = "提交">
</form>

<?php

if(isset($_COOKIE["userName"])){
    echo $_COOKIE["userName"]."歡迎回來";
} else{
    echo "這是你第一次到網站";
}

?>

</html>