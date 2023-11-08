<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-4-1.php</title>
<?php
// 檢查使用者密碼, 產生例外物件
function validPassword($pass) {
   if ( trim($pass) == "" )  // 空字串
      throw new Exception("密碼是空字串!");
   if ( strlen($pass) <= 4 ) // 密碼太短
      throw new Exception("密碼太短!");
   if ( is_numeric($pass) )  // 全是數字 
      throw new Exception("密碼全是數字!");
}
?>
</head>
<body>
<?php
// 例外處理程式敘述
try {
   validPassword("1234567");   // 呼叫函數
} catch ( Exception $e ) {  // 處理例外物件
   print "檔案: " . $e->getFile() . "<br/>";
   print "行號: " . $e->getLine() . "<br/>";
   print "錯誤訊息: " . $e->getMessage() . "<br/>";
   exit();
}
echo "例外處理的程式敘述結束....<br/>";
?>
</body>
</html>