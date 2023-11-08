<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-2-6a.php</title>
</head>
<body>
<?php 
$GPA = 'B';  // 指定變數值
echo "學生成績: $GPA<br/>";
$msg = match($GPA) { // Match運算式
   'A' => "學生成績超過80<br/>",
   'B' => "學生成績超過70,低於80<br/>",
   'C' => "學生成績超過60,低於70<br/>", 
   default => "學生成績不及格<br/>"
};
echo $msg;
?>
</body>
</html>