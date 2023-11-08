<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-3-3.php</title>
</head>
<body>
<?php
$year = 0;   // 變數的初值
$amount = 10000;
$rate = 0.12;
// do/while迴圈敘述
do {
    $interest = $amount * $rate;
    $amount = $amount + $interest;
    $year = $year + 1;
} while ( $amount < 20000 );
print $year . "年的本利和 = " . $amount . "<br/>";
?>
</body>
</html>