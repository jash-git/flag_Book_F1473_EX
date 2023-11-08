<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-2-5.php</title>
</head>
<body>
<?php
$name = "陳會安";  // 指定變數值
$username1 = "陳允傑";
$username2 = "江小魚";
// echo()顯示內容
echo("PHP的echo()使用<br/>");
echo "PHP的echo()使用<br/>";
echo $username1,$username2;
echo "Hi! " . $name . "<br/>";
echo "Hi! $name  $username1  $username2<br/>";
echo("Hi! " . $name . " " . $username1 . "<br/>");
echo("Hi! $name<br/>");
// print()顯示內容
print("PHP的print()使用<br/>");
print "PHP的print()使用<br/>";
print "Hi! " . $name . "<br/>";
print "Hi! $name $username1 $username2<br/>";
print("Hi! " . $name . " " . $username1 . "<br/>");
print("Hi! $name<br/>");
?>
</body>
</html>