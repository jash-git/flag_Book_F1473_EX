<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-7.php</title>
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
$city = $std->getAddress()->city;
?>
</body>
</html>
