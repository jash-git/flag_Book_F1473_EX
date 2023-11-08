<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-2.php</title>
</head>
<body>
<?php 
// 指定陣列元素
$grades = array(78, 55, 69, 93);
$names[] = "江小魚";
$names[] = "陳允傑";
$names[] = "楊過";
// 計算成績總分
$grades[2] = 65;  // 更改陣列值
$total = 0;
for ( $i = 0; $i < count($grades); $i++ ) {
   echo "$i=>$grades[$i] ";
   $total += $grades[$i];
}
echo "<br/>成績總分: ".$total."分<br/>";
// 顯示名稱清單
for ( $i = 0; $i < count($names); $i++ )
   echo "$i=>$names[$i] ";
echo "<br/>";
$names[] = "陳會安";  // 新增陣列元素
// 顯示名稱清單
for ( $i = 0; $i < count($names); $i++ )
   echo "$i=>$names[$i] ";
echo "<br/>";
?>
</body>
</html>