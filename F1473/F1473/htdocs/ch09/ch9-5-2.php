<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-5-2.php</title>
</head>
<body>
<font color="red">
<?php
// 是否是表單送回
if (isset($_POST["Send"])) { 
   $to = $_POST["To"]; // 取得表單欄位內容
   $from = $_POST["From"];
   $subject = $_POST["Subject"];
   $body = $_POST["TextBody"];
   // 建立郵件標頭
   $header = "From: $from \nReply-To: $from \n"; 
   // 送出郵件
   if (mail($to, $subject, $body, $header))
      echo "郵件已經成功的寄出! <br/>";
   else
      echo "郵件寄送失敗!<br/>";
}
?>
</font>
<form action="ch9-5-2.php" method="post">
<table>
  <tr><td>收件者:</td>
  <td><input type="text" size="30" name="To"/>
  </td></tr>
  <tr><td>寄件者:</td>
  <td><input type="text" size="30" name="From"/>
  </td></tr>
  <tr><td>主旨:</td>
  <td><input type="text" size="40" name="Subject"/>
  </td></tr>
  <tr><td>郵件內容:</td><td>  
  <textarea rows="5" cols="40" name="TextBody">
  </textarea>
  </td></tr>
</table>
<input type="submit" name="Send" value="寄送郵件"/>
</form>
</body>
</html>