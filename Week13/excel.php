<meta charset = 'utf-8'>

<?php
header("Pragma: public");
header("Expires: 0");
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Content-type: application/vnd.ms-excel');
header('Content-Disposition: inline; filename="applicant.xls";');
header('Content-Transfer-Encoding: binary');

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

/*
if (!$link)
    die("無法開啟資料庫!<br/>");
else
    echo "資料庫:開啟成功!<br/>"; 
*/

//SQL語法
$SQL="SELECT * FROM students";
//送出查詢
$result = mysqli_query($link, $SQL);
//結果轉陣列

echo "<table border ='1'>";
echo "<tr>";
echo "<td>NO.</td>";
echo "<td>中文姓名</td>";
echo "<td>系所</td>";
echo "</tr>";

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
        echo "<td>".$row["sNo"]."</td>";
        echo "<td>".$row["sName"]."</td>";
        echo "<td>".$row["sMajor"]."</td>";
    echo "</tr>";
    }
?>