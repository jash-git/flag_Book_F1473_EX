<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-3-1.php</title>
</head>
<body>
<?php 
$total = 0;   // 指定變數值
// for遞增迴圈
for ( $i = 1; $i <= 10; $i++ ) {
   print "|". $i;
   $total += $i;
}
print "|<br/>for遞增迴圈從1加到10=".$total."<br/>";
$total = 0;   // 重設變數值
// for遞減迴圈
for ( $i = 60; $i >= 20; $i-- ) $total += $i;
print "for遞減迴圈從60加到20=".$total."<br/>";
?>
</body>
</html>