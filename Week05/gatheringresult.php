<meta charset = 'utf8'>

<?php
    $sName = $_POST["sName"];
    $sId = $_POST["sId"];
    $sMajor = $_POST["sMajor"];
    $sGender = $_POST["sGender"];
    $sCity = $_POST["sCity"];
    $sDate = $_POST["sDate"];
    $sScore = $_POST["sScore"];
    $sComment = $_POST["sComment"];
    $sColor = $_POST["sColor"];
    $sSize = $_POST["sSize"];
    
    echo "<center><font><b>Your responses</b><font></center>";
    echo "<table border = '1'>";
    echo "<tr><td>你的姓名：</td><td>".$sName."</td></tr>";
    echo "<tr><td>你的學號：</td><td>".$sId."</td></tr>";
    echo "<tr><td>你的系所：</td><td>".$sMajor."</td></tr>";
    echo "<tr><td>你的性別：</td><td>".$sGender."</td></tr>";
    echo "<tr><td>你的原住地：</td><td>".$sCity."</td></tr>";
    echo "<tr><td>你的出生日：</td><td>".$sDate."</td></tr>";
    echo "<tr><td>你對活動的滿意度百分比：</td><td>".$sScore."</td></tr>";   
    echo "<tr><td>你對活動的意見：</td><td>".$sComment."</td></tr>";
    echo "<tr><td>你想要的服裝顔色：</td><td>".$sColor."</td></tr>";
    echo "<tr><td>你的衣服大小：</td><td>".$sSize."</td></tr>";

?>