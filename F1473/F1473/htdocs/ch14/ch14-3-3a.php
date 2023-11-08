<?php 
// JSON字串
$jsontxt = '{ "Boss": "陳會安", ' .
  '"Employees": [' .
  '  { "name" : "陳允傑", "tel" : "02-22222222" },'.
  '  { "name" : "江小魚", "tel" : "03-33333333" }'.
  ']}';
// 解碼成物件
$objJson = json_decode($jsontxt);
echo "<pre>";
print_r($objJson);
echo "</pre>";
echo "老闆姓名: " . $objJson->Boss;
echo "<br/>";
echo print_r($objJson->Employees);
?>