<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-2-1.php</title>
</head>
<body>
<?php
$grade = 75;   // 指定變數值
$name = "陳會安";
// if條件敘述
if ( $grade >= 60) 
   print $name. "成績: ". $grade . "及格!<br/>";
$value = -25;  // 指定變數值
// if條件敘述
if ( $value < 0 ) {
   $value = -$value;
}
print "絕對值= ". $value . "<br/>";
?>
</body>
</html>