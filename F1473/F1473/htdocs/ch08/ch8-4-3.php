<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-4-3.php</title>
</head>
<body>
<?php
$username = $_POST["User"];
$password = $_POST["Pass"];
print "姓名: ".$username."<br/>";
print "密碼: ".$password."<br/>";
$address = $_POST["Address"];
print "地址: <br/>".nl2br($address)."<br/>";
$type = $_POST["Type"];
print "種類: ".$type."<br/>";
?>
</body>
</html>