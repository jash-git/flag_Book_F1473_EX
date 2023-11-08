<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-3.php</title>
<?php 
// 傳值函數
function byValue($c) {
   $c = $c + 2;  // 將參數值加一
   print "<tr><td>在byValue()函數為</td>";
   print "<td>".$c."</td></tr>";
} 
// 傳址函數
function byRef(&$c) {
   $c = $c + 2;  // 將參數值加一
   print "<tr><td>在byRef()函數為</td>";
   print "<td>".$c."</td></tr>";
} 
?>
</head>
<body>
<table border="1">
<?php
$c = 1;  // 變數初值
print "<tr><td>過程</td><td>變數\$c</td></tr>";
print "<tr><td>變數初值</td><td>".$c."</td></tr>";
print "<tr><td>呼叫byValue()前為</td>";
print "<td>". $c . "</td></tr>";
byValue($c); // 呼叫傳值函數
print "<tr><td>呼叫byValue()後/byRef()前為</td>";
print "<td>" . $c . "</td></tr>";
byRef($c);   // 呼叫傳址函數
print "<tr><td>呼叫byRef()後為</td>";
print "<td>" . $c . "</td></tr>";
?>
</table>
</body>
</html>