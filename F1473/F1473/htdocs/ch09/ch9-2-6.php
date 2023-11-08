<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-2-6.php</title>
</head>
<body>
<?php 
$file = 'mybooks.txt';  // 檔案名稱
// 檢查檔案是否存在
if (file_exists($file)) {
   echo "<pre>";
   $num = readfile($file);
   echo "</pre>";
   echo "檔案擁有: $num 個位元組<br/>";
} else 
   print "檔案 $file 不存在<br/>";
?>
</body>
</html>