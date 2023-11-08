<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-4-2.php</title>
</head>
<body>
<?php
$a = 18;  $b = 13;  // 指定變數值
?>
$a = <?php echo $a ?><br/>
$b = <?php echo $b ?><br/>
負號運算: -$a    = <?php echo -$a ?><br/>
乘法運算: $a * $b = <?php echo $a * $b ?><br/>
除法運算: $a / $b = <?php echo $a / $b ?><br/>
餘數運算: $a % $b = <?php echo $a % $b ?><br/>
加法運算: $a + $b = <?php echo $a + $b ?><br/> 
減法運算: $a - $b = <?php echo $a - $b ?><br/>
指數運算: $a ** 2 = <?php echo $a ** 2 ?><br/>
</body>
</html>