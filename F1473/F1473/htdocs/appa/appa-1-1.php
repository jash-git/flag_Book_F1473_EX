<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appa-1-1.php</title>
</head>
<body>
<?php 
// 取得UNIX的時間刻記
$stamps = mktime (0 ,0 ,0 , 12, 31, 2021);
print "12/31/2021 0:00:00的時間刻記";
print "mktime(): ".$stamps."<br/>";
$stamps = time();
print "現在時間刻記time(): ".$stamps."<br/>";
// 將時間刻記轉換成日期時間
$today = getdate($stamps); 
$month = $today["month"]; 
$day = $today["mday"]; 
$year = $today["year"]; 
echo "今天日期: $month $day, $year<br>";
$time = $today["hours"] . ":" . $today["minutes"]
                        . ":" . $today["seconds"];
echo "現在時間: $time<br/>";
// 檢查日期是否正確
if ( checkdate(11, 31, 2021) ) 
   echo " 11/31/2021是正確的日期<br/>";
else 
   echo " 11/31/2021是不正確的日期<br/>";   
?>
</body>
</html>