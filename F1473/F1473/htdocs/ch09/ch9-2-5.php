<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-2-5.php</title>
</head>
<body>
<?php 
$file = 'mybooks.txt';  // 檔案名稱
// 檢查檔案是否存在
if (file_exists($file)) {
   $lines = file($file);  // 將檔案讀入陣列
   // 一行一行的顯示檔案內容
   foreach ($lines as $line_num => $line) {
      echo "$line_num : " . $line . "<br/>";
   }
} else 
   print "檔案 $file 不存在<br/>";
?>
</body>
</html>