<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-2-5.php</title>
</head>
<body>
<?php
// 指定變數值
$hour = 20;
// 條件敘述運算子
$str = ($hour >= 12) ? " PM" : " AM";
$hour = ($hour >= 12) ? $hour-12 : $hour;
print "目前時間為: " . $hour . $str;
?>
</body>
</html>