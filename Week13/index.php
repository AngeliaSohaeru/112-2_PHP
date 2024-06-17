<meta charset='utf8'>

<?php
//連接資料庫
$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '',  // 密碼
            'school');  // 預設使用的資料庫名稱
    
    if (!$link)
            die("無法開啟資料庫!<br/>");
    else
            echo "資料庫:開啟成功!<br/>"; 

//SQL語法
$SQL="SELECT * FROM students";
//送出查詢
$result = mysqli_query($link, $SQL);
//結果轉陣列

echo "<table border='1'>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
    echo "<td>".$row["sNo"]."</td><td>".$row["sName"]."</td><td>".$row["sMajor"]."</td><td><a href='del.php?No=".$row["sNo"]."'>刪除</a></td><td><a href='update.php?No=".$row["sNo"]."'>修改</a></td>";
echo "</tr>";
}
echo "</table>";

echo "<br/>";
echo "<a href='excel.php'>下載Excel檔";

echo "<br/>";
echo "<a href='pdf.php'>下載PDF檔";

mysqli_close($link);
?>
