<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-3-2.php</title>
<?php 
// 函數不使用靜態變數
function nonStaticVar() {
   $count = 0;  $count += 2;   // 區域變數加一
   return $count;
}
// 函數使用靜態變數 */ 
function staticVar() {
   static $count = 0;  $count += 2; // 靜態變數加一
   return $count;
}
?>
</head>
<body>
<?php 
$v1 = nonStaticVar();  // 函數呼叫
$v2 = nonStaticVar();
$v3 = nonStaticVar();
print "不使用靜態變數: $v1, $v2, $v3<br/>";
$v1 = staticVar();     // 函數呼叫
$v2 = staticVar();
$v3 = staticVar();
print "使用靜態變數: $v1, $v2, $v3<br/>"; 
?>
</body>
</html>