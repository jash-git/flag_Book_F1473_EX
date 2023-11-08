<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-1-1.php</title>
</head>
<body>
<?php
// 建立MySQL的資料庫連接 
$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'A12345678',  // 密碼 
            'myschool');  // 預設使用的資料庫名稱 
if ( !$link ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   echo "MySQL資料庫myschool連接成功!<br/>";
}
mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>