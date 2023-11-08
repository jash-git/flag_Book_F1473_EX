<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch12-4-2Delete_object.php</title>
</head>
<body>
<?php
// 是否是表單送回
if (isset($_POST["Delete"])) {
   // 建立mysqli物件
   $mysqli = new mysqli("localhost","root","A12345678") 
         or die("無法開啟MySQL資料庫連接!<br/>");
   $mysqli->select_db("myschool");  // 選擇資料庫
   // 建立刪除記錄的SQL指令字串
   $sql = "DELETE FROM students ";
   $sql.= " WHERE sno = '".$_POST["Sno"]."'";
   echo "<b>SQL指令: $sql</b><br/>";
   // 送出UTF8編碼的MySQL指令
   $mysqli->query('SET NAMES utf8');
   if ( $mysqli->query($sql) ) // 執行SQL指令
      echo "資料庫刪除記錄成功, 影響記錄數: ". 
           $mysqli->affected_rows . "<br/>";
   else
      die("資料庫刪除記錄失敗<br/>");   
   $mysqli->close();      // 關閉資料庫連接
}
?>
<form action="ch12-4-2Delete-object.php" method="post">
<table border="1">
<tr><td>學號:</td>
   <td><input type="text" name="Sno" size ="6"/></td>
</tr>
</table><hr>
<input type="submit" name="Delete" value="刪除"/>
</form>
</body>
</html>