<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-2-1.php</title>
</head>
<body>
<?php 
// 取得PHP程式本身
$file = basename($_SERVER["PHP_SELF"]);
$fp = fopen($file, "r")  // 開啟檔案
      or exit("檔案 $file 開啟錯誤<br/>");
print "檔案名稱: " . $file  . "開啟成功<br/>";
print "檔案尺寸: " . filesize($file) . "<br/>";
fclose($fp); // 關閉檔案
print "已經關閉檔案: $file <br/>";
?>
</body>
</html>