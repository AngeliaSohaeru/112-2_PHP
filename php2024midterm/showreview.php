<html>

<?php
include("include.inc");
?>

<b><font size = "15" color = "black">Reviewer您好, 歡迎進入論文投稿網頁</font></b><br/>
論文評審決定：
<input type = "radio" name = "sAcceptance" value = "accept">Accept
<input type = "radio" name = "sAcceptance" value = "accept">Minor Revision
<input type = "radio" name = "sAcceptance" value = "accept">Major Revision
<input type = "radio" name = "sAcceptance" value = "accept">Reject
<br/>
論文評論評語：
<textarea name = "sComment" value = "" rows = "10" cols = "50">
</textarea><br/>
<input type = "submit" value = "提交">
<a href='logout.php'>登出</a>


</html>