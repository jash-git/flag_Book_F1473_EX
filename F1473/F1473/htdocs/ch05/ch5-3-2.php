<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-3-2.php</title>
</head>
<body>
<?php 
$result = 1; 
$n = 1;   
// while迴圈
while ( $result <= 100 ) {
   $result = $result * $n;  // 計算階層
   $n = $n + 1;
}
$n = $n - 1;
print $n . "!=" . $result . "<br/>";
?>
</body>
</html>