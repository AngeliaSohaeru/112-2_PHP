<meta charset = 'utf-8'>

<?php

$sNo = $_GET["sNo"];
echo $sNo;

//鏈接資料庫
$link = @mysqli_connect(
    'localhost', //MYSQL主機
    'root', //使用者名稱
    '', //密碼
    'gathering'); //預設使用的資料庫名稱

//SQL語法
$SQL = "DELETE FROM gathering WHERE No = '$sNo'";

// 送出查詢
if($result = mysqli_query($link, $SQL)){
    echo "<br/>刪除成功";
}
echo "<br/><a href = 'index.php'>查看資料庫資料</a>"
?>