<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-4.php</title>
<?php 
// 函數計算體積
function volume($length, $width=10, $height=15) {
   print $length."x".$width."x".$height."= ";
   return $length * $width * $height; 
}
?>
</head>
<body>
<?php
// 指定變數值
$l = 15;   $w = 20;   $h = 25; 
// 計算盒子體積 
print "盒子體積: ".volume($l, $w, $h)."<br/>";
print "盒子體積: ".volume($l, $w)."<br/>";
print "盒子體積: ".volume($l)."<hr/>";
// 使用命名參數呼叫函數
print "盒子體積: ".volume(length : $l, width : $w)."<br/>";
print "盒子體積: ".volume(width : $w, length : $l, height : 20)."<br/>";
print "盒子體積: ".volume($l, height : 30, width : 5)."<br/>";
?>
</body>
</html>