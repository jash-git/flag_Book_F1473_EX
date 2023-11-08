<!DOCTYPE html>
<html>   
<head>
<meta charset="utf-8" />
<title>guestbook.php</title>
<?php
$msg = "";
// 檢查是否是表單送回
if ( isset($_POST["Name"]) ) {
   $file = "guestbook.txt";
   if ( !file_exists($file) ) { // 檔案不存在
      $fp = fopen($file, "w");  // 建立檔案
      fclose($fp);
   }
   $email = $_POST["Email"];  // 取得郵件地址
   $name = "<a href='email.php?address=";
	 $name .= $email."'>".$_POST["Name"]."</a>";
   $messages = nl2br($_POST["Message"]);
   $fp = fopen($file, "a");  // 開啟檔案
   $today = date("Y年m月d日 h:i:s");
   // 建立留言訊息
   $msg  = "<b>留言時間：</b>".$today."<br/>";
   $msg .= "<b>姓名：</b>".$name."<br/>";   
   $msg .= "<b>留言：</b>".$messages."<br/><hr/>";
   fputs($fp, $msg);  // 寫入檔案
   fclose($fp);       // 關閉檔案
   $msg = "新增留言成功!<br/>";
}
?>
</head>
<body>
<form action="guestbook.php" method="post">
<table border="1">
  <tr>
    <td><font size="2">姓名:</font></td>
    <td><input type="text" size="30" name="Name"/></td>
  </tr>
  <tr>
    <td><font size="2">郵件地址: </font></td>
    <td><input type="text" size="30" name="Email"/></td>
  </tr>  
  <tr>
    <td><font size="2">留言內容:</font></td>    
    <td>
       <textarea name="Message" rows="4" cols="30"></textarea>
    </td>
  </tr>
  <tr>    
    <td colspan="2" align="center">
    <input type="submit" name="Send" value="送出留言"/>
    <input type="reset" name="Reset" value="重設欄位"/></td>
  </tr>
</table>
</form><?php echo $msg ?><br/>
| <a href="guestbook.php">新增留言</a>
| <a href="showmessage.php">檢視留言</a> |
</body>
</html>