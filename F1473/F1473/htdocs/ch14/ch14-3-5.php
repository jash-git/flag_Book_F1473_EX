<?php
// JSON字串 
$jsontxt = '{ "Boss": "陳會安" ' .
  '"Employees": [' .
  '  { "name" : "陳允傑", "tel" : "02-22222222" },'.
  '  { "name" : "江小魚", "tel" : "03-33333333" }'.
  ']}';
// 解碼成物件
$objJson = json_decode($jsontxt);
switch(json_last_error()) {
    case JSON_ERROR_NONE:
       echo "JSON剖析成功...";
       break;
    case JSON_ERROR_SYNTAX:
       echo "錯誤! JSON剖析語法錯誤...";
       break;
    case JSON_ERROR_DEPTH:
       echo "錯誤! JSON字串超過最大允許的遞迴深度...";
       break;
    case JSON_ERROR_CTRL_CHAR:
       echo "錯誤! 控制字元錯誤...";
       break;
}
?>