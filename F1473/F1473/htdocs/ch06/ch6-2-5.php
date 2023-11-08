<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-5.php</title>
</head>
<body>
<?php
error_reporting(E_ERROR);
// 指定變數值
$test = 15;
var_dump($test);
unset($test);
var_dump($test); 
?>
</body>
</html>