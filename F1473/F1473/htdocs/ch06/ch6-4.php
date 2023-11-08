<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-4.php</title>
</head>
<body>
<?php
// 建立匿名函數
$func = function($length, $width=10, $height=15) {
   print $length."x".$width."x".$height."= ";
   return $length * $width * $height; 
};
// 指定變數值
$l = 15;   $w = 20;   $h = 25; 
print "盒子體積: ".$func($l, $w, $h)."<br/>";
print "盒子體積: ".$func($l, $w)."<br/>";
?>
</body>
</html>