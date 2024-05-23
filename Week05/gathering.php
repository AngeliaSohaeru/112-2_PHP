<html>

<head>
<meta charset = "utf-8">
</head>

<form action = "gatheringresult.php" method = "post">

<center>
<font size = "5"><b>活動調查卷</b></font><br/>
</center>

<font><b>個人訊息</b></font><br/>
姓名：<input type = "test" name = "sName" value = "" required><br/>

學號：<input type = "test" name = "sId" value = "" required><br/>

系所：<input type = "test" name = "sMajor" value = "" required><br/>

性別：
<input type = "radio" name = "sGender" value = "male">男
<input type = "radio" name = "sGender" value = "female">女
<br/>

原住地： <br/>
<input type = "radio" name = "sCity" value = "Kaohsiung">高雄
<input type = "radio" name = "sCity" value = "New Taipei">新北
<input type = "radio" name = "sCity" value = "Taichung">臺中
<input type = "radio" name = "sCity" value = "Tainan">臺南
<input type = "radio" name = "sCity" value = "Taipei">臺北
<input type = "radio" name = "sCity" value = "Taoyuan">桃園
<input type = "radio" name = "sCity" value = "Chiayi">嘉義
<input type = "radio" name = "sCity" value = "Hsinchu">新竹
<input type = "radio" name = "sCity" value = "Keelung">基隆
<input type = "radio" name = "sCity" value = "Changhua">彰化
<input type = "radio" name = "sCity" value = "Hualien">花蓮
<input type = "radio" name = "sCity" value = "Miaoli">苗慄
<input type = "radio" name = "sCity" value = "Nantou">南投
<input type = "radio" name = "sCity" value = "Pingtung">屏東
<input type = "radio" name = "sCity" value = "Taitung">臺東
<input type = "radio" name = "sCity" value = "Yilan">宜蘭
<br/>

出生日：<br/>
<input type = "date" name = "sDate" value = ""><br/>    

對活動的滿意度百分比：<input type = "range" name = "sScore" min = "0" max = "100" value = "50"><br/>

對活動的意見：<br/>
<textarea name = "sComment" value = "" rows = "2" cols = "50">
</textarea><br/><br/>

<font><b>服裝調查</b></font><br/>
衣服顔色：
<input type = "color" name = "sColor" value = ""><br/>

衣服大小：<br/>
<select name = "sSize" multiple>
<option value = "s">S</option>
<option value = "m" selected>M</option>
<option value = "l">L</option>
<option value = "xl">XL</option>
</select><br/><br/>

<input type = "submit" value = "送出吧">

<input type = "reset" value = "寫錯了"><br/>

<center>
<font color = "grey">Your responses will be recorded. Please re-check your responses before submitting.</font>
</center>

</form>

</html>