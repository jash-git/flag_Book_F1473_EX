<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-4-4.php</title>
</head>
<body>
<?php
$str1="How To Programming PHP"; // 字串變數
$str2="How To Programming php";
print("測試字串1: \"".$str1."\"<br/>");
print("測試字串2: \"".$str2."\"<br/>");
// 比較兩字串
if  (!strcmp($str1, $str2))
   echo "\$str1與\$str2相等<br/>";
else
   echo "\$str1與\$str2不相等<br/>";
// 區分英文大小寫的比較
if  (!strcasecmp($str1, $str2))
   echo "\$str1與\$str2不區分英文大小寫相等<br/>";
else
   echo "\$str1與\$str2不區分英文大小寫不相等<br/>";
// 只比較前幾個字元
if  (!strncmp($str1, $str2, 12))
   echo "\$str1與\$str2前12個字元相等<br/>";
else
   echo "\$str1與\$str2前12個字元不相等<br/>";
?>
</body>
</html>