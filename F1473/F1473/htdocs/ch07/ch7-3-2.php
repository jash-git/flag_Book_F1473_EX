<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-3-2.php</title>
</head>
<body>
<?php 
// 指定陣列元素
$data = array(200, 140, 50, 67, 56, 320);
print_r($data); echo "<br/>"; // 顯示陣列元素
if (in_array("50", $data)) {  // in_array()函數
   print "陣列\$data有50<br/>";
}
sort($data);  // 排序索引陣列元素
foreach($data as $ele) echo "$ele  ";
echo "<br/>";
// 指定陣列元素
$colors = array("d"=>"Blue藍色","a"=>"Red紅色",
                "b"=>"Green綠色","c"=>"White白色");
print_r($colors); echo "<br/>"; // 顯示陣列元素
// array_search()函數
if (($k = array_search("red",$colors)) != false) {
   print "陣列\$colors有red => $k <br/>";
}
else {
   print "陣列\$colors沒有red<br/>";
}
asort($colors);  // 排序結合陣列的值
// 顯示陣列元素
var_dump($colors);
echo "<br/>";
ksort($colors);  // 排序結合陣列的鍵值
// 顯示陣列元素
var_dump($colors);
echo "<br/>";
?>
</body>
</html>