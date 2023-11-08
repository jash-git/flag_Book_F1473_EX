<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-2-7a.php</title>
</head>
<body>
<?php 
$file = "Cabo.JPG";
$fileData = exif_read_data($file);
$fileEncode = base64_encode(file_get_contents($file));
// 輸出 <img> 標籤
echo '<img src="data:'.$fileData['MimeType'].';base64,'.$fileEncode.'"/>';
?>
</body>
</html>