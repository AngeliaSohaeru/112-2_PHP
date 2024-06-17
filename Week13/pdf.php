<?php
    ob_start();
?>

<meta charset = 'utf8'>

<?php
require_once('TCPDF/tcpdf.php');

//連接資料庫
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

//SQL語法
$SQL="SELECT * FROM students";
//送出查詢
$result = mysqli_query($link, $SQL);
//結果轉陣列

// // create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set font
$pdf->SetFont('msungstdlight', '', 10);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$html = '<table border = "1">';
$html.= '<tr><td>編號</td><td>姓名</td><td>系所</td></tr>';
while($row=mysqli_fetch_assoc($result)){
    $html.= "<tr>";
    $html.= "<td>".$row["sNo"]."</td><td>".$row["sName"]."</td><td>".$row["sMajor"]."</td>";
    $html.= "</tr>";
}
$html.= "</table>";

// output the HTML content
$pdf->writeHTML($html);
//file send to file address
$path = "/123info.pdf";
ob_end_clean();
//Close and output PDF document
$pdf->Output(__DIR__ .$path, 'D');
//$pdf->Output($No."-tableinfo.pdf", 'D');
ob_end_flush();
?>