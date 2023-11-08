<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-6-3.php</title>
</head>
<?php
// 設定報告等級
error_reporting(E_ERROR | E_WARNING | E_NOTICE);
// 自訂的錯誤處理函數
function myErrorHandler($type,$msg,$file,$line) {
   switch( $type ) {
      case E_ERROR: echo "<b>致命錯誤:</b><br/>";
         break;
      case E_WARNING: echo "<b>警告錯誤:</b><br/>";
         break;
      case E_NOTICE: echo "<b>注意錯誤</b><br/>";
         break;
   }
   $err = "檔案: $file 第: $line 行<br/>"; // 建立錯誤訊息
   $err .= "錯誤訊息: <b>$msg</b> <br/>";
   echo $err;                         // 顯示錯誤訊息
   error_log($err, 3, "errors.log");  // 寫入記錄檔案
   if ( $type == E_ERROR ) {
      echo "<font color=red>終止程式執行</font>";
      die();  // 終止程式執行
   }
}
set_error_handler('myErrorHandler'); // 指定錯誤處理函數
?>
</head>
<body>
<?php
$var++;       // 產生警告錯誤
echo "測試自訂PHP的錯誤處理函數結束....<br/>";
?>
</body>
</html>