<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-4-1a.php</title>
</head>
<body>
<?php
// 例外處理程式敘述
try {
   throw new Exception("產生例外物件!");
} catch ( Exception ) {  // 處理例外物件
   echo "執行例外處理....<br/>";
   exit();
}
?>
</body>
</html>