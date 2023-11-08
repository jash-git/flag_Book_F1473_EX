<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-1-3object.php</title>
</head>
<body>
<?php
// 建立mysqli物件 
$mysqli = new mysqli("localhost","root","A12345678","myschool")
        or die("無法開啟MySQL資料庫連接!<br/>");
echo "資料庫myschool開啟成功!<br/>";
echo "主機資訊: ".$mysqli->host_info."<br/>";
echo "伺服器資訊: ".$mysqli->server_info;
echo "通訊協定版本: ".$mysqli->protocol_version;
echo "<br/>客戶端函式庫資訊: " .
             $mysqli->client_info . "<br/>";
echo "客戶端函式庫版本: " . $mysqli->client_version;
$mysqli->close();  // 關閉資料庫連接
?>
</body>
</html>
