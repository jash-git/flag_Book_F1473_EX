<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-1-2.php</title>
</head>
<body>
<?php 
$ip = $_SERVER["REMOTE_ADDR"]; // 取得指定伺服器變數
$path = $_SERVER["SCRIPT_NAME"];
$server = $_SERVER["SERVER_SOFTWARE"];
print "IP位址: ".$ip."<br/>";
print "路徑: ".$path."<br/>";
print "Web伺服器: ".$server."<br/>";
?>
<table border="1"><tr><td>名稱</td><td>值</td></tr>
<?php
// 顯示所有$_SERVER變數
foreach ($_SERVER as $key=>$value) {
   echo "<tr><td>" . $key . "</td>";
   echo "<td>" . $value . "</td></tr>";
}
?>
</table>
</body>
</html>