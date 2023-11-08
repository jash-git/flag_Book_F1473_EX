<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-4-2.php</title>
</head>
<body>
<?php
$str1 = "PHP與MySQL網頁設計範例教本"; // 字串變數
$str2 = "username@company.com.tw";
$str3 = 'C:\xampp\htdocs\ch07';
print("測試字串1: \"".$str1."\"<br/>");
print("測試字串2: \"".$str2."\"<br/>");
print("測試字串3: \"".$str3."\"<br/>");
$pos = strpos($str1,"ASP");  // 搜尋子字串的位置
if ($pos === false)
   echo "在字串1沒有找到字串: \"ASP\"<br/>";
$pos = strpos($str1, "範例");
echo "在字串1找尋字串: \"範例\" 位置: $pos <br/>";
$pos = strrpos($str1, "PHP");
echo "在字串1找尋字元: \"PHP\" 位置: $pos <br/>";
$domain = strstr($str2, '@');  // 搜尋子字串
print "網域名稱 => " . $domain . "<br/>";
$dir = strchr($str3, "\\");
print "取得路徑 => " . $dir . "<br/>";
$dir = strrchr($str3, "\\");  // 反向搜尋子字串
print "反向取得路徑 => " . $dir . "<br/>";
?>
</body>
</html>