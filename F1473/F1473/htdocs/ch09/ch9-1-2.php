<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-1-2.php</title>
</head>
<body>
<?php 
$file = "ch9-1-2.php";
// 顯示檔案屬性
echo "檔案名稱: " . $file . "<br/>";
echo "檔案類型: " . filetype($file) . "<br/>";
echo "最後存取: " . 
   date("n/d/Y h:i:s", fileatime($file)) . "<br/>";
echo "最後修改: " . 
   date("n/d/Y h:i:s", filemtime($file)) . "<br/>";
echo "檔案大小: " . filesize($file) . " 位元組<br/>";
echo "是否是目錄: [" . is_dir($file) . "]<br/>";
echo "是否是檔案: [" . is_file($file) . "]<br/>";
echo "是否可讀: [" . is_readable($file) . "]<br/>";
echo "是否可寫: [" . is_writeable($file) . "]<br/>";
echo "是否是上傳檔案: [".is_uploaded_file($file)."]";
?>
</body>
</html>