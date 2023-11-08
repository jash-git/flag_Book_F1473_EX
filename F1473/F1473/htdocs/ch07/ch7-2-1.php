<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-2-1.php</title>
</head>
<body>
<?php
$row0 = array(64, 65); // 各列的一維陣列元素
$row1 = array(77, 81);
$row2 = array(89, 93);
// 建立二維陣列
$grades = array($row0, $row1, $row2);
$grades[1][0] = 56;  // 指定元素值
// 使用巢狀迴圈計算總和
$total = 0;
for ( $j=0; $j < count($grades); $j++) {
   $sum = 0;
   for ( $i=0; $i < count($grades[$j]); $i++) {
      print($grades[$j][$i] . " ");
      $sum += $grades[$j][$i]; 
      $total += $grades[$j][$i];
   }
   print("=>成績小計: ".$sum."<br/>");
}
print("==>成績總分: ".$total."<br/>");
?>
</body>
</html>