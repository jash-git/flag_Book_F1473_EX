<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch4-3-4.php</title>
</head>
<body>
<?php 
// 指定字串變數值
$str1 = 'PHP+MySQL+AJAX網頁程式設計';
$str2 = "Hello World!";
// 顯示字串變數值, 內含逸出字元
echo "\$str1 = $str1<br/>";
echo "\$str2 = $str2<br/>";
echo "換行\t符號<br/>";
echo "\"Escape\"逸出字元<br/>";
echo "'PHP'與MySQL網頁\\設計\\<br/>";
var_dump($str1, $str2);
?>
</body>
</html>