<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-2-4.php</title>
</head>
<?php
function sum() {
   $count = func_num_args();
   echo "參數個數: $count <br/>";
   // 顯示參數值
   for ( $i = 0; $i < $count; $i++ ) {
      $para = func_get_arg($i);
      echo "參數$i=>$para ";
   }
   $total = 0;
   $array = func_get_args();  // 取得陣列
   // 計算總和
   for ( $i = 0; $i < $count; $i++ )
      $total += $array[$i];
   echo "<br/>參數總和: $total<br/>";
}
?>
</head>
<body>
<?php 
sum(34, 56);      // 2個參數
echo "--------------------<br/>";
sum(23, 56, 90);  // 3個參數
?>
</body>
</html>