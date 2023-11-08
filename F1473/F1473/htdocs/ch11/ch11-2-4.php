<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-4.php</title>
</head>
<body>
<?php
require_once("myschool_open.inc");
// 執行SQL查詢
$result = mysqli_query($link, $sql);
echo "將記錄指標移動到第3筆記錄<br/>";
mysqli_data_seek($result, 2);
$row = mysqli_fetch_row($result);
echo "sno = ".$row[0]."，name = ".$row[1]."<hr/>";
echo "將記錄指標移動到第5筆記錄<br/>";
mysqli_data_seek($result , 4);
$row = mysqli_fetch_row($result);
echo "sno = ".$row[0]."，name = ".$row[1]."<br/>";
mysqli_free_result($result); // 釋放佔用的記憶體  
require_once("myschool_close.inc");
?>
</body>
</html>
