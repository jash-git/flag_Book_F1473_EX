<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-5-2object.php</title>
</head>
<body>
<?php
// 是否是表單送回
if (isset($_POST["Insert"])) {
   // 建立mysqli物件
   $mysqli = new mysqli("localhost","root","A12345678") 
         or die("無法開啟MySQL資料庫連接!<br>");
   $mysqli->select_db("myschool");  // 選擇資料庫
   // 建立新增記錄的SQL指令字串
   $sql ="INSERT INTO students (sno, name, address, ";
   $sql.="birthday) VALUES (?,?,?,?)";
   if ( $stmt = $mysqli->prepare($sql) ) {
      // 連繫參數的變數
      $stmt->bind_param("ssss",$stdno,$name,$address,
                             $birthday);
      $stdno = $_POST["Sno"];
      $name = $_POST["Name"];
      $address = $_POST["Address"];
      $birthday = $_POST["Birthday"];
      $stmt->execute();  // 執行SQL指令
      echo "資料庫新增記錄成功, 影響記錄數: ". 
           $stmt->affected_rows . "<br/>";
      $stmt->close();    // 關閉Prepared Statement
   }
   else
      exit("資料庫新增記錄失敗<br/>");
   $mysqli->close();      // 關閉資料庫連接
}
?>
<form action="ch13-5-2object.php" method="post">
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