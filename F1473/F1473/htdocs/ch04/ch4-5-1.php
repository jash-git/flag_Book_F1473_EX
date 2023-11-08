<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-5-1.php</title>
</head>
<body>
<?php
// 指定變數值
$a = 12;    $b = 23.45;
$c = $a + $b;  // 整數轉成浮點數
echo "整數(12) + 浮點數('23.45') = $c<br/>";
$a = "12";
$c = 2 + $a;  // 字串轉成整數
echo "整數(2) + 整數字串('12') = $c<br/>";
$c = 4.5 + $a;  // 字串轉換成浮點數
echo "浮點數(4.5) + 整數字串('12') = $c<br/>";
$a = "13.4";
$c = 5.5 + $a; //  字串轉成浮點數
echo "浮點數(5.5) + 浮點數字串('13.4') = $c<br/>";
?>
</body>
</html>