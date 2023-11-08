<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-4.php</title>
</head>
<body>
<?php 
$a = array(5, 6, 7);  // 指定陣列元素
$b = array(1, 2, 3, 4);
$c = $a + $b;  // 陣列的指定敘述與聯集
echo "\$a=>"; print_r($a); echo "<br/>";
echo "\$b=>"; print_r($b); echo "<br/>";
echo "\$c=\$a+\$b=>"; print_r($c); echo "<br/>";
// 陣列運算子
if ( $a == $b ) 
   echo "\$a和\$b陣列相等!<br/>";  // 相等
if ( $a != $b )
   echo "\$a和\$b陣列不相等!<br/>";// 不相等
?>
</body>
</html>