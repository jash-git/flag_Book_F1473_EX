<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-4-5.php</title>
</head>
<body>
<?php
$a = 23; $b = 24;  // 指定變數值
?>
$a = <?php echo $a ?><br/>
$b = <?php echo $b ?><br/>
Not運算:!($a >= $b) 結果為: [<?php echo !($a >= $b) ?>]<br/>
And運算:($a <= $b) && ($a == $b ) 結果為:
[<?php echo ($a <= $b) && ($a == $b)?>]<br/>
Or運算:($a <= $b) || ($a == $b ) 結果為:
[<?php echo ($a <= $b) || ($a == $b)?>]<br/>
Xor運算:($a <= $b) xor ($a == $b ) 結果為:
[<?php echo ($a <= $b) xor ($a == $b)?>]<br/>
Xor運算:($a <= $b) xor ($a != $b ) 結果為:
[<?php echo ($a <= $b) xor ($a != $b)?>]<br/>
</body>
</html>