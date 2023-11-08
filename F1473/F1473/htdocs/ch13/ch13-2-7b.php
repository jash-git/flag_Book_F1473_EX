<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-7b.php</title>
<?php
// Student類別
class Student {
    public function getAddress() {}
}
?>
</head>
<body>
<?php
$std = new Student();
// PHP 8的 Nullsafe 運算子
$city = $std?->getAddress()?->city;
var_dump($city);
?>
</body>
</html>
