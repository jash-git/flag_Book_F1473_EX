<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-2-6.php</title>
</head>
<body>
<?php 
define("PI", 3.1415926);  // 常數宣告
define("AREA", "面積");
// 計算圓的面積
print "圓半徑15的" . AREA . ": " . PI*15*15 . "<br/>";
print "圓半徑35的" . AREA . ": " . PI*35*35 . "<br/>";
?>
</body>
</html>