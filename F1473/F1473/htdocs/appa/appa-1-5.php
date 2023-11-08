<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appa-1-5.php</title>
</head>
<body>
<?php 
// 顯示數學常數
print("E: ".M_E."<br/>");
print("PI: ".M_PI."<br/>");
print("log_2 e: ".M_LOG2E."<br/>");
print("log_10 e: ".M_LOG10E."<br/>");
// 數學函數
$num = -12.345;
print("測試值\$num: ".$num."<br/>");
print("abs(\$num): ".abs($num)."<br/>");
print("ceil(\$num): ".ceil($num)."<br/>");
print("floor(\$num): ".floor($num)."<br/>");
// 指數和對數函數
$x = 45.678;   $y = 3.45;
print("測試值\$x/\$y: ".$x."/".$y."<br/>");
print("exp(\$x): ".exp($x)."<br/>");
print("log(\$x): ".log($x)."<br/>");
print("pow(\$x,\$y): ".pow($x,$y)."<br/>");
print("sqrt(\$x): ".sqrt($x)."<br/>");
// 三角函數
$deg = 45.0;            // 45度數
$rad = deg2rad($deg);   // 轉換成徑度
print("測試值\$deg/\$rad: ".$deg."/".$rad."<br/>");
print("sin(\$rad): ".sin($rad)."<br/>");
print("cos(\$rad): ".cos($rad)."<br/>");
print("tan(\$rad): ".tan($rad)."<br/>");
// 最大值和最小值
$a = 45;   $b = 34;
print("測試值\$a/\$b: ".$a."/".$b."<br/>");
print("最大值max($a,$b): ".max($a,$b)."<br/>");
print("最小值min($a,$b): ".min($a,$b)."<br/>");
print("四捨五入round($x):".round($x)."<br/>");
print("四捨五入round($x):".round($x)."<br/>");
print("產生5-15的亂數: ".rand(5, 15)."<br/>");
?>
</body>
</html>