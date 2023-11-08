<!-- 程式範例：ch6-5-2.inc --> 
<?php 
// 匯率換算函數
function rateExchange($amount, $rate) {
   $result = $amount * $rate;
   return $result;
}
?>