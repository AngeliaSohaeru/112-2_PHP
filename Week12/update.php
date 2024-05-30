<meta charset = 'utf8'>

<?php

$sNo = $_GET["No"];
echo $sNo;

// 鏈接資料庫
$link = @mysqli_connect(
    'localhost', //MYSQL主機
    'root', //使用者名稱
    '', //密碼
    'gathering'); //預設使用的資料庫名稱

//SQL語法
$SQL = "SELECT * FROM gathering WHERE No = '$sNo'";

if($result = mysqli_query($link, $SQL)){
    $row=mysqli_fetch_assoc($result);
    $sName = $row["Name"];
    $sId = $row["Id"];
    $sDepartment = $row["Department"];
}

?>

<form action = "updatecheck.php" method = "post">

編號:<?php echo $No ?><input type = "hidden" name = "No" value = '<?php echo $sNo?>'><br/>
姓名:<input type = "text" name = "Name" value = "<?php echo $sName?>"><br/>
學號:<input type = "text" name = "Id" value = "<?php echo $sId?>"><br/>
系所:<input type = "text" name = "Department" value = "<?php echo $sDepartment?>"><br/>
<input type = "submit">

</form>