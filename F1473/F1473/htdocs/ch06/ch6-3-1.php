<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-3-1.php</title>
<?php 
$a = 1;   $b = 2;   // 指定全域變數
// 函數A
function funcA($a) {
   $a = 3;   // 指定參數
   $b = 4;   // 指定區域變數
}
// 函數B
function funcB() {
   global $a, $b;
   $a = 3; $b = 4;  // 指定全域變數
}
?>
</head>
<body>
PHP程式擁有全域變數$a, $b<br/>
funcA()擁有參數$a. 區域變數$b<br/>
funcB()沒有區域變數<br/>
<table border="1">
<?php 
print "<tr><td>執行過程</td><td>全域變數\$a</td>";
print "<td>全域變數\$b</td></tr>";
print "<tr><td>初值</td><td>".$a."</td>";
print "<td>".$b."</td></tr>";
funcA($a);  // 呼叫funcA()
print "<tr><td>呼叫funcA()後</td><td>".$a."</td>";
print "<td>".$b."</td></tr>";
funcB();   // 呼叫funcB()
print "<tr><td>呼叫funcB()後</td><td>".$a."</td>";
print "<td>".$b."</td></tr>";
?>
</table>
</body>
</html>