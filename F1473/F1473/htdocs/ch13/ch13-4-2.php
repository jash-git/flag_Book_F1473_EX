<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-4-2.php</title>
<?php
// ValidException類別
class ValidException extends Exception {
   function getMyMessage() {
      print "檔案: ".$this->getFile()."<br/>";
      print "行號: ".$this->getLine()."<br/>";
      print "錯誤訊息: ".$this->getMessage()."<br/>";
   }
}
// 檢查使用者密碼, 產生例外物件
function validPassword($pass) {
   if ( trim($pass) == "" )  // 空字串
      throw new ValidException("密碼是空字串!");
   if ( strlen($pass) <= 4 ) // 密碼太短
      throw new ValidException("密碼太短!");
   if ( is_numeric($pass) )  // 全是數字 
      throw new ValidException("密碼全是數字!");
}
?>
</head>
<body>
<?php
// 例外處理程式敘述
try {
   validPassword("a123");       // 呼叫函數
} catch ( ValidException $e ) { // 處理例外物件
   $e->getMyMessage();          // 顯示錯誤訊息
   exit();
}
echo "例外處理的程式敘述結束....<br/>";
?>
</body>
</html>