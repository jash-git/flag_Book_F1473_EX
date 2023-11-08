<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-5-2.php</title>
</head>
<body>
<?php
// 指定變數值
$a = 27;  $b = 5;
echo "\$a = $a : ";
echo "\$b = $b<br/>";
$c = $a / $b;
echo "\$a / \$b = $c<br/>";
$c = (int) ($a / $b);
echo "(int)(\$a / \$b) = $c<br/>";
$c = (string) $a . (string) $b;
echo "(string)\$a . (string)\$b = $c<br/>";
?>
</body>
</html>