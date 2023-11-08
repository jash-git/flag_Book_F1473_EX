<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-4a.php</title>
<?php
// 函數參數的傳值呼叫
function arrayByValue($a) {
   $a[0] = 0;   // 將索引0設為0
   return $a;   // 傳回陣列
}
?>
</head>
<body>
<?php 
$b = array(1, 2, 3, 4);  // 指定陣列元素
$c = arrayByValue($b);  // 函數的陣列參數
echo "執行\$c = arrayByValue(\$b);後<br/>";
echo "\$b=>"; print_r($b); echo "<br/>";
echo "\$c=>"; print_r($c); echo "<br/>";
?>
</body>
</html>