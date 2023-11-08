<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch12-4-2Insert.php</title>
</head>
<body>
<?php
// 是否是表單送回
if (isset($_POST["Insert"])) {
   // 開啟MySQL的資料庫連接
   $link = @mysqli_connect("localhost","root","A12345678") 
         or die("無法開啟MySQL資料庫連接!<br/>");
   mysqli_select_db($link, "myschool");  // 選擇資料庫
   // 建立新增記錄的SQL指令字串
   $sql ="INSERT INTO students (sno, name, address, ";
   $sql.="birthday) VALUES ('";
   $sql.=$_POST["Sno"]."','".$_POST["Name"]."','";
   $sql.=$_POST["Address"]."','".$_POST["Birthday"]."')";
   echo "<b>SQL指令: $sql</b><br/>";
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8'); 
   if ( mysqli_query($link, $sql) ) // 執行SQL指令
      echo "資料庫新增記錄成功, 影響記錄數: ". 
           mysqli_affected_rows($link) . "<br/>";
   else
      die("資料庫新增記錄失敗<br/>");
   mysqli_close($link);      // 關閉資料庫連接
}
?>
<form action="ch12-4-2Insert.php" method="post">
<table border="1">
<tr><td>學號:</td>
   <td><input type="text" name="Sno" size ="6"/></td>
</tr><tr><td>姓名:</td>
   <td><input type="text" name="Name" size="12"/></td>
</tr><tr><td>住址:</td>
   <td><input type="text" name="Address" size="25"/></td>
</tr><tr><td>生日:</td>
   <td><input type="text" name="Birthday" size="10"/>
	 </td></tr>
</table><hr/>
<input type="submit" name="Insert" value="新增"/>
</form>
</body>
</html>