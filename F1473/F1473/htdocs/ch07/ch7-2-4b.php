<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-2-4b.php</title>
</head>
<?php
function sum(mixed ...$array) {  
   $count = count($array); 
   echo "參數個數: $count <br/>";
   $total = 0;
   for ( $i = 0; $i < $count; $i++ ) {
      echo "參數$i=>$array[$i] ";
      $total += $array[$i];
   }  
   echo "<br/>參數總和: $total<br/>";
}
?>
</head>
<body>
<?php 
sum(34, "56");      // 2個參數
echo "--------------------<br/>";
sum("23", 56, 90);  // 3個參數
echo "--------------------<br/>";
sum(34.5, "56.4");      // 2個參數
echo "--------------------<br/>";
sum("23.1", 56.2, 90.3);  // 3個參數
?>
</body>
</html>