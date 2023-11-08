<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-2-6.php</title>
</head>
<body>
<?php 
$grade = 65;  // 指定變數值
echo "學生成績: $grade 分<br/>";
$result = match(true) { // Match運算式
    $grade > 80  => "甲等!<br/>",
    $grade >= 70 => "乙等!<br/>",
    $grade >= 60 => "丙等!<br/>",
    defulat => "丁等!<br/>"
};
echo $result;
?>
</body>
</html>