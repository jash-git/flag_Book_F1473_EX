<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-1-1.php</title>
</head>
<body>
<?php 
$file = basename($_SERVER["PHP_SELF"],".php");
$path = realpath($file.".php"); // 取得檔案實際路徑
echo "實際路徑: $path<br/>";
$parts = pathinfo($path);  // 取得路徑資訊
echo "路徑: ".$parts["dirname"]."<br/>";
echo "檔名: ".$parts["basename"]."<br/>";
echo "副檔名: ".$parts["extension"]."<hr/>";
// 檢查檔案是否存在
if ( file_exists($file. ".php") )
      print "檔案: $file.php 存在<br/>";
else  print "檔案: $file.php 不存在<br/>";
// 複製檔案
if (!copy($file. ".php", $file. ".bak")) 
   print ("檔案: $file.php複製成bak失敗<br/>");
else
   print "檔案: $file.php 複製成bak成功<br/>";
rename($file. ".bak", "test.txt");  // 檔案更名
print "檔案: $file.bak 更名成test.txt<br/>";
$file = "test.txt";
unlink($file);   // 刪除檔案
print "檔案: $file 已經刪除<br/>";
?>
</body>
</html>