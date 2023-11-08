<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-5.php</title>
<?php
// 函數顯示陣列元素
function showArray($title, $arr) {
   echo $title; print_r($arr); echo "<br/>";
}
?>
</head>
<body>
<?php 
// 指定陣列元素
$tips = array(10, 20, 30, 30);
showArray("參數陣列:",$tips);
$result = array_pad($tips, -5, 40); // 擴充陣列元素
showArray("向左擴充陣列:",$result);
$result = array_pad($tips, 5, 50);
showArray("向右擴充陣列:",$result);
$result = array_unique($tips); // 刪除重複的元素
showArray("刪除重複元素:",$result);
$tips = array(10, 20, 30, 30);
$offset = 2;   $len = 1;
array_splice($tips, $offset, $len); // 刪除陣列元素
showArray("刪除位移2的1個元素:",$tips);
$tips = array(10, 20, 30, 30);
array_splice($tips,1,1,array(40,50)); // 取代陣列元素
showArray("刪除索引1元素後取代陣列:<br/>",$tips);
$tips = array(10, 20, 30, 30);
$result = array_reverse($tips); // 反轉陣列
showArray("反轉陣列:",$result);
list($var1, $var2, $var3) = $tips;  // 將陣列轉換成變數
echo "0: $var1, 1: $var2, 2: $var3<br/>"
?>
</body>
</html>