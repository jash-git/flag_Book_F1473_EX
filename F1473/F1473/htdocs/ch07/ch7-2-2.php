<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-2-2.php</title>
</head>
<body>
<?php 
// 使用array()指定結合陣列的元素
$arr = array( "color"=>"黑色", "name"=> "陳會安", 
              "shape"=>"三角形", 100 ); // 沒有指定,鍵值是0
if (!isset($arr["type"])) {  // 新增元素
   $arr["type"] = "PHP";  // 不存在,所以新增
   echo "新增type元素值PHP成功!<br/>";
}  // 顯示陣列元素
foreach($arr as $key=>$value) echo "$key=>$value ";
echo "<br/>";
$arr["color"] = "紅色";  // 更改陣列元素值
$arr["name"] = "江小魚";
$arr["shape"] = "圓形";
$arr[] = 50;   // 沒有指定, 鍵值為0
unset($arr["type"]);   // 刪除結合陣列元素
echo "刪除type元素值PHP!<br/>";
print_r($arr); echo "<br/>"; // 顯示陣列元素
// 建立索引從1開始的索引陣列
$weekday = array( 1=>"Mon", "Tue", "Wed", "Thu",
                   "Fri", "Sat", "Sun");
// 顯示陣列元素
for ( $i = 1; $i <= count($weekday); $i++ )
   echo "$i : $weekday[$i] ";
echo "<br/>";?>
</body>
</html>