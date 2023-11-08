<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-4-5.php</title>
</head>
<body>
<?php 
$str1="How To 'Programming' \PHP\ WebSite"; // 字串變數
print("測試字串1: \"" . $str1 . "\"<br/>");
// 在字元前加上反斜線
echo addslashes($str1) ."<br/>";
// 刪除字元前的反斜線
echo stripslashes($str1) ."<br/>";
// 轉換成HTML符號
$str = "if (x < 5 && y >= 8) {\n sum();\n }\n";
echo nl2br(htmlentities($str));
// 刪除HTML標籤
$str="<table><tr><td>陳會安</td></tr></table>";
echo strip_tags($str);
?>
</body>
</html>