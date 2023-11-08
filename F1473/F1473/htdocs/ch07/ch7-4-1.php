<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-4-1.php</title>
</head>
<body>
<?php 
$str1 = "PHP and MySQL Web Programming"; // 字串變數
$str2 = " PHP與MySQL網頁設計範例教本 ";
print("測試英文字串: \"".$str1."\"<br/>");
print("測試中文字串: \"".$str2."\"<br/>");
// 顯示字串長度
print("英文字串長度: ".strlen($str1)."<br/>");
print("中文字串長度: ".strlen($str2)."<br/>");
// 轉換大小寫
print("全部小寫: ".strtolower($str1)."<br/>");
print("全部大寫: ".strtoupper($str1)."<br/>");
// 刪除空白字元
print("刪除兩端空白字元: \"".trim($str2)."\"<br/>");
print("刪除開頭空白字元: \"".ltrim($str2)."\"<br/>");
print("刪除結尾空白字元: \"".rtrim($str2)."\"<br/>");
print("刪除結尾空白字元: \"".chop($str2)."\"<br/>");
?>
</body>
</html>