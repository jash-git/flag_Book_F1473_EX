<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-6a.php</title>
</head>
<body>
<?php
// 使用define()建立常數陣列
define("ANIMALS", [
    "狗", 
    "猫",
    "猴子",
    "鳥",
]);
echo ANIMALS[1];
echo "<br/>";
echo ANIMALS[2];
echo "<br/>";
?>
</body>
</html>
