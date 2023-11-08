<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-4-3.php</title>
</head>
<body>
<?php 
$str1 = "username@company.com.tw";  // 字串變數
$str2 = 'C:\xampp\htdocs\ch07';
$str3 = "江小魚||陳會安||小龍女||張無忌";
print("測試字串1: \"".$str1."\"<br/>");
print("測試字串2: \"".$str2."\"<br/>");
print("測試字串3: \"".$str3."\"<br/>");
$A = chr(65);  // 取得ASCII碼的字元
echo "ASCII碼65是字元: $A <br/>";
echo "ASCII碼56是字元: ".chr(56)."<br/>";
// 取出子字串
$domain = substr(strstr($str1, '@'), 1);
print "網域名稱 => ".$domain."<br/>";
$dir = substr($str2,2,6);
print "substr(\$str2,2,6)取得路徑 => ".$dir."<br/>";
$no = substr_count($str1, "com");  // 計算次數
print "計算字串1中com出現的次數 => ".$no."<br/>";
$str = substr_replace($str2, "TEST1", 3, 5); // 取代字串
print "取代字串2的xampp => ".$str."<br/>";
print "反轉字串1 => ".strrev($str1)."<br/>";// 反轉字串
// 重複字串
print "重複字串2兩次 => ".str_repeat($str2, 2)."<br/>";
// 將字串以分隔字元轉換成陣列
$users = explode("||",$str3);
print "分割字串3: ";  print_r($users);
// 將陣列元素輸出成字串
$user_string = implode("||", $users);
print "<br/>組成字串3: ".$user_string."<br/>";
?>
</body>
</html>