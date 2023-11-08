<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-7a.php</title>
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
// 使用巢狀if條件檢查null
$city = null;
if ($std !== null) {
    $address = $std->getAddress();
    if ($address !== null) {
        $city = $address->city;
    }
}
var_dump($city);
?>
</body>
</html>
