<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-3.php</title>
</head>
<body>
<?php 
// 指定陣列元素
$scores = array(22, 16, 30, 24);
$total = 0;
// 使用foreach迴圈計算小費總和
foreach ($scores as $element) {
   echo "$element ";
   $total += $element;
}
echo "<br/>得分總和: ". $total. "<br/>";
print_r($scores);   // 顯示小費
echo "<br/>";
?>
</body>
</html>