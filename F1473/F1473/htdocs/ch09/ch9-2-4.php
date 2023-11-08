<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-2-4.php</title>
</head>
<body>
<?php
$file = 'mybooks.txt';  // 檔案名稱
// 檢查檔案是否存在
if (file_exists($file)) {
   $fp = fopen($file, "r"); // 開啟檔案
   // 讀取檔案內容.
   $contents = fread($fp, filesize($file));
   print "檔案內容: <br/>";
   echo nl2br($contents);
   fclose($fp);  // 關閉檔案
} else 
   print "檔案 $file 不存在<br/>";
?>
</body>
</html>