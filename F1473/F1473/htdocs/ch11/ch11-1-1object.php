<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-1-1object.php</title>
</head>
<body>
<?php
// 建立mysqli物件 
$mysqli = new mysqli( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'A12345678',  // 密碼 
            'myschool');  // 預設使用的資料庫名稱 
if ( $mysqli->errno ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   echo "MySQL資料庫myschool連接成功!<br/>";
}
$mysqli->close();  // 關閉資料庫連接
?>
</body>
</html>
