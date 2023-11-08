<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appa-1-3.php</title>
</head>
<body>
<?php 
// 指定測試變數值
$var1 = true;
$var2 = null;
$var3 = "1234";
$var4 = 100;
$var5 = 34.5;
$var6 = 0;
if (empty($var6))
   echo "\$var6變數值是0, 或尚未指定值<br/>";
if (!isset($var6)) 
   echo "\$var6變數尚未指定值<br/>";
else
   echo "\$var6 = $var6 <br/>";
unset($var6);  // 刪除變數指定的值
if (!isset($var6)) 
   echo "\$var6變數尚未指定值<br/>";
?>
var1~6是測試變數<br/>
is_bool($var1) : [<?php echo is_bool($var1) ?>]<br/>
is_null($var2) : [<?php echo is_null($var2) ?>]<br/>
is_numeric($var3) : [<?php echo is_numeric($var3) ?>]<br/>
is_string($var3) : [<?php echo is_string($var3) ?>]<br/>
is_int($var4) : [<?php echo is_int($var4) ?>]<br/>
is_float($var5) : [<?php echo is_float($var5) ?>]<br/>
is_array($var4) : [<?php echo is_array($var4) ?>]<br/>
is_object($var3) : [<?php echo is_object($var3) ?>]<br/>
is_resource($var2) : [<?php echo is_resource($var2) ?>]<br/>
</body>
</html>