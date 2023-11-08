<?php
// JSON字串 
$jsontxt = '{ "Boss": "陳會安", ' .
  '"Employees": [' .
  '  { "name" : "陳允傑", "tel" : "02-22222222" },'.
  '  { "name" : "江小魚", "tel" : "03-33333333" }'.
  ']}';
// 解碼成結合陣列
$arrJson = json_decode($jsontxt, TRUE);
echo "<pre>";
print_r($arrJson);
echo "</pre>";
echo "老闆姓名: " . $arrJson['Boss'];
echo "<br/>";
echo print_r($arrJson['Employees']);
?>
