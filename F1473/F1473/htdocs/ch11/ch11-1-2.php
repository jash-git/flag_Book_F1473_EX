<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-1-2.php</title>
</head>
<body>
<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost", "root", "A12345678") 
        or die("無法開啟MySQL資料庫連接!<br/>");
// 指定開啟的資料庫名稱myschool
$dbname = "myschool";
// 開啟指定的資料庫
if ( !mysqli_select_db($link, $dbname) )
   die("無法開啟 $dbname 資料庫!<br/>");
else
   echo "資料庫: $dbname 開啟成功!<br/>";
// 指定開啟的資料庫名稱mysql
$dbname = "mysql";
// 開啟指定的資料庫
if ( !mysqli_select_db($link, $dbname) ) 
   die("無法開啟 $dbname 資料庫!<br/>");
else
   echo "資料庫: $dbname 開啟成功!<br/>";
mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>