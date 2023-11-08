<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-2-1c.php</title>
</head>
<body>
<?php
header("Refresh: 2");
$value = rand (10, 30);  // 取得亂數值
echo "更新的亂數值: ". $value. "<br/>";
?>
</body>
</html>