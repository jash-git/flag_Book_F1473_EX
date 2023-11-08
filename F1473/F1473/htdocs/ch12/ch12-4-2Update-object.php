<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch12-4-2Update_object.php</title>
</head>
<body>
<?php
// 是否是表單送回
if (isset($_POST["Update"])) {
   // 建立mysqli物件
   $mysqli = new mysqli("localhost","root","A12345678")
         or die("無法開啟MySQL資料庫連接!<br/>");
   $mysqli->select_db("myschool");  // 選擇資料庫
   // 建立更新記錄的SQL指令字串
   $sql = "UPDATE students SET ";
   $sql.= "address='".$_POST["Address"]."'";
   $sql.= " WHERE sno = '".$_POST["Sno"]."'";
   echo "<b>SQL指令: $sql</b><br/>";
   // 送出UTF8編碼的MySQL指令
   $mysqli->query('SET NAMES utf8');
   if ( $mysqli->query($sql) ) // 執行SQL指令
      echo "資料庫更新記錄成功, 影響記錄數: ". 
           $mysqli->affected_rows . "<br/>";
   else
      die("資料庫更新記錄失敗<br/>");   
   $mysqli->close();      // 關閉資料庫連接
}
?>
<form action="ch12-4-2Update-object.php" method="post">
學號: <input type="text" name="Sno" size ="6"/>
<table border="1">
<tr><td>住址:</td>
   <td><input type="text" name="Address" size="25"/>
	 </td></tr>
</table><hr/>
<input type="submit" name="Update" value="更新"/>
</form>
</body>
</html>