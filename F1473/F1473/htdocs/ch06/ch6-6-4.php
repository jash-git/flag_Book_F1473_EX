<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-6-4.php</title>
</head>
<?php
// 檢查使用者密碼, 產生自訂錯誤
function validPassword($pass) {
   if ( trim($pass) == "" )  // 空字串
      trigger_error("密碼是空字串!", E_USER_ERROR);
   if ( strlen($pass) <= 4 ) // 密碼太短
      trigger_error("密碼太短!", E_USER_WARNING);
   if ( is_numeric($pass) )  // 全是數字 
      trigger_error("密碼全是數字!",E_USER_WARNING);
}
// 自訂的錯誤處理函數
function myErrorHandler($type,$msg,$file,$line) {
   switch( $type ) {
      case E_USER_ERROR:
         echo "<b>自訂致命錯誤</b><br/>"; break;
      case E_USER_WARNING:
         echo "<b>自訂警告錯誤</b><br/>"; break;
      case E_USER_NOTICE:
         echo "<b>自訂注意錯誤</b><br/>"; break;
   }
   echo "檔案: $file 第: $line 行<br/>"; // 顯示錯誤訊息
   echo "錯誤訊息: <b>$msg</b> <br/>";
   if ( $type == E_USER_ERROR ) {
      echo "<font color=red>終止程式執行</font>";
      die();  // 終止程式執行
   }
}
set_error_handler('myErrorHandler'); // 指定錯誤處理函數
?>
</head>
<body>
<?php
validPassword("123456"); // 全是數字
validPassword("a123");   // 密碼太短
validPassword("");       // 空密碼
echo "測試產生使用者的自訂錯誤結束....<br/>";
?>
</body>
</html>