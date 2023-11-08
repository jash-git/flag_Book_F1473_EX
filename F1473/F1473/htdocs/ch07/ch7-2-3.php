<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-2-3.php</title>
</head>
<body>
<?php 
// 使用array()指定結合陣列的元素
$arr = array( "color"=>"黑色", "name"=>"陳會安", 
              "shape"=>"三角形", "fruit"=>"蘋果" ); 
print_r(array_keys($arr));   // 顯示鍵值
echo "<br/>";
print_r(array_values($arr)); // 顯示元素值
echo "<br/>";
// 使用內部陣列指標走訪陣列
reset($arr); // 重設陣列元素到開頭
echo "第1個元素: ".current($arr)."/".key($arr)."<br/>";
next($arr); // 下1個元素
echo "下1個元素: ".current($arr)."/".key($arr)."<br/>";
end($arr); // 最後1個元素
echo "最後1個元素: ".current($arr)."/".key($arr)."<br/>";
prev($arr); // 前1個元素
echo "前1個元素: ".current($arr)."/".key($arr)."<br/>";
reset($arr);
?>
</body>
</html>