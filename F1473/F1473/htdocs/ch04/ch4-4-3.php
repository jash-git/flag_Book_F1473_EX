<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-4-3.php</title>
</head>
<body>
<?php
$a = 10;  $b = 10;  // 指定變數值
?>
$a = <?php echo $a ?><br/>
$b = <?php echo $b ?><br/>
在後遞增運算: $a++    = <?php echo $a++ ?><br/>
運算後的結果: $a = <?php echo $a ?><br/>
在前遞減運算: --$b = <?php echo --$b ?><br/>
運算後的結果: $b = <?php echo $b ?><br/>
</body>
</html>