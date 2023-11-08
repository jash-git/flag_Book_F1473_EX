<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-2-4.php</title>
</head>
<body>
<?php 
// 指定變數值
$name = "myName";
$$name = "陳允東";  // 指定變數$myName的值
// 取出動態變數的值
$username = $$name;
$username1 = ${$name};
// 顯示變數內容
echo "變數\$name = $name<br/>";
echo "變數$$name = $myName<br/>";
echo "變數$$name = ${$name}<br/>";
echo "變數\$username = $username<br/>";
echo "變數\$username1 = $username<br/>";
?>
</body>
</html>