<meta charset = 'utf-8'>

<?php

//鏈接資料庫
$link = @mysqli_connect(
            'localhost', //MYSQL主機
            'root', //使用者名稱
            '', //密碼
            'gathering'); //預設使用的資料庫名稱

if (!$link)
        die("無法開啓資料庫!<br/>");
else
        echo "資料庫:開啓成功!<br/>";

//SQL語法
$SQL = "SELECT * FROM gathering";

// 送出查詢
$result = mysqli_query($link, $SQL);

// 結果轉陣列
echo "<table border = '1'>";
while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Id"]."</td><td>".$row["Department"]."</td><td><a href = 'del.php?sNo=".$row["No"]."'>刪除</a></td><td>修改</td>";
        echo "</tr>";
}
echo "</table";

mysqli_close($link);
?>
