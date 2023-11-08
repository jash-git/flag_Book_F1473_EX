<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-4object.php</title>
</head>
<body>
<?php
require_once("myschool_open_object.inc");
// 執行SQL查詢
$result = $mysqli->query($sql);
echo "將記錄指標移動到第3筆記錄<br/>";
$result->data_seek(2);
$row = $result->fetch_row();
echo "sno = ".$row[0]."，name = ".$row[1]."<hr/>";
echo "將記錄指標移動到第5筆記錄<br/>";
$result->data_seek(4);
$row = $result->fetch_row();
echo "sno = ".$row[0]."，name = ".$row[1]."<br/>";
$result->close();  // 釋放佔用的記憶體  
require_once("myschool_close_object.inc");
?>
</body>
</html>
