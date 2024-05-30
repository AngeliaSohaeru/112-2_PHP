<meta charset = 'utf-8'>

<?php

$sName = $_POST["Name"];
$sId = $_POST["Id"];
$sDepartment = $_POST["Department"];

//鏈接資料庫
$link = @mysqli_connect(
    'localhost', //MYSQL主機
    'root', //使用者名稱
    '', //密碼
    'gathering'); //預設使用的資料庫名稱

//SQL語法
$SQL = "INSERT INTO gathering(Name, Id, Department) VALUES('$sName','$sId','$sDepartment')";

// 送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>新增成功";
}
echo "<br/><a href = 'index.php'>查看資料庫資料</a>"
?>