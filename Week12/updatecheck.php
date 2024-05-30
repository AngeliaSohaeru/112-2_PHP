<meta charset = 'utf8'>

<?php

$sNo = $_POST["No"];
$sName = $_POST["Name"];
$sId = $_POST["Id"];
$sDepartment = $_POST["Department"];

// 鏈接資料庫
$link = @mysqli_connect(
    'localhost', //MYSQL主機
    'root', //使用者名稱
    '', //密碼
    'gathering'); //預設使用的資料庫名稱

//SQL語法
$SQL = "UPDATE gathering SET Name = '$sName', Id = '$sId', Department = '$sDepartment' WHERE No = '$sNo'";
if($result = mysqli_query($link, $SQL)){
    echo "更新成功";
}
echo "<br/><a href = 'index.php'>查看資料庫資料</a>";
?>