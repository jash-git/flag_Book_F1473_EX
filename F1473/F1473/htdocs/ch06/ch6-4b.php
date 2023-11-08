<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-4b.php</title>
</head>
<body>
<?php
// 指定變數值 
$weight = 75;
$bmi = function ($height) use ($weight) {
    $height = $height / 100.0;
    return $weight/$height/$height;
};
$h = 175;
// 呼叫匿名函數
echo "BMI = ". $bmi($h) . "<br/>";
?>
</body>
</html>