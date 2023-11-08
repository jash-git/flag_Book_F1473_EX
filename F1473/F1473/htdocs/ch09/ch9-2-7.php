<?php
// 程式範例: ch9-2-7.php
$file = "Cabo.JPG";
$fileData = exif_read_data($file);
// HTTP標頭資訊
header("Content-Type: " . $fileData['MimeType']);
header("Content-Length: " . $fileData['FileSize']);
// 讀取檔案內容
readfile($file);
?>