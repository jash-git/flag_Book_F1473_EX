<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appa-1-4.php</title>
</head>
<body>
<?php 
// 指定測試變數值
$var1 = true;
$var2 = null;
$var3 = "1234";
$var4 = 100;
$var5 = 34.5;
// 取得資料型態名稱
echo "\$var1=$var1(" . gettype($var1) .")<br/>";
echo "\$var2=$var2 (" . gettype($var2) .")<br/>";
echo "\$var3=$var3(" . gettype($var3) .")<br/>";
echo "\$var4=$var4(" . gettype($var4) .")<br/>";
echo "\$var5=$var5(" . gettype($var5) .")<br/>";
// 取得資源名稱
$fp = fopen("appa-1-3.php","r");
echo "\$fp: " . get_resource_type($fp) ."<br/>";
// 轉換資料型態
settype($var3, "integer");
echo "\$var3 ->integer = " . $var3 ."<br/>";
settype($var5, "int");
echo "\$var5 ->integer  = " . $var5 ."<br/>";
settype($var1, "string");
echo "\$var1 ->string  = " . $var1 ."<br/>";
?>
</body>
</html>