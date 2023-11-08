<!DOCTYPE html>
<html>  
<head>
<meta charset="utf-8" />
<title>email.php</title>
<?php
if (isset($_GET["address"])) 
   $to = $_GET["address"]; // 取得收件地址
else
   $to = "";
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
</head>
<body>
<form action="email.php" method="post">
<table border="1">
  <tr><td><font size="2">收件者:</font></td>
  <td><input type="text" size="30" name="To"
	     value="<?php echo $to ?>" readonly="true"/>
  </td></tr>
  <tr><td><font size="2">寄件者:</font></td>
  <td><input type="text" size="30" name="From"/>
  </td></tr>
  <tr><td><font size="2">主旨:</font></td>
  <td><input type="text" size="40" name="Subject"/>
  </td></tr>
  <tr><td><font size="2">郵件內容:</font></td><td>  
  <textarea rows="5" cols="40" name="TextBody">
  </textarea>
  </td></tr>
</table><br/>
<input type="submit" name="Send" value="寄送郵件"/>
</form><br/>
| <a href="guestbook.php">新增留言</a>
| <a href="showmessage.php">檢視留言</a> |
</body>
</html>