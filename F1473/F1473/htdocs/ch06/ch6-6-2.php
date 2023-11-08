<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-6-2.php</title>
</head>
<body>
<?php
$filename = "ch6-6-2.txt";
$fp = @fopen($filename, "r")  // 開啟檔案
     or exit("錯誤: 檔案 $filename 開啟錯誤!<br/>");
fclose($fp);  // 關閉檔案
?>
</body>
</html>