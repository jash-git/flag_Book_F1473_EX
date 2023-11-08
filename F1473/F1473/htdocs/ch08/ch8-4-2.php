<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-4-2.php</title>
</head>
<body>
<?php
$id = $_GET["Id"];  //  取得URL參數
$name = $_GET["Name"];
// 顯示參數值
echo "學號: " . $id . "<br/>姓名: " . $name . "<br/>";
?>
</body>
</html>