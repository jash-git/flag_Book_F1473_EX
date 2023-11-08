<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-2-3.php</title>
</head>
<body>
<?php 
// 指定變數值
$stdName  = "陳允如";
$nickname = $stdName;   // 指定變數值 
print "學生姓名: " . $stdName . "<br/>";
print "學生綽號: " . $nickname . "<br/>";
$username = &$stdName;      // 參考變數$stdName
$username = "江小魚";    // 即指定變數$stdName的值
// 顯示變數的內容
print "學生姓名: " . $stdName . "<br/>";
print "使用者名稱: " . $username . "<br/>";
?>
</body>
</html>