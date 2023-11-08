<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-4-6.php</title>
</head>
<body>
<?php
// 指定變數值
$a = 1;  // 0001
$b = 2;  // 0010
$c = 3;  // 0011
$d = 16; // 1000
?>
Not運算 :  ~$a = <?php echo ~$a ?><br/>
左移運算: $c << 2 = <?php echo $c << 2 ?><br/>
右移運算: $b >> 1 = <?php echo $b >> 1 ?><br/> 
And運算: $a & $c = <?php echo $a & $c ?><br/>
Xor運算: $a ^ $b = <?php echo $a ^ $b ?><br/>
Or運算: $a | $b = <?php echo $a | $b ?><br/>
</body>
</html>