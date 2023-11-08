<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>add.php</title>
</head>
<body text="blue">
<center>
<?php
// 取得欄位資料
if (isset($_POST["Name"]) && isset($_POST["Tel"]) ) {
   $name = $_POST["Name"];
   $tel = $_POST["Tel"];
   // 檢查是否有輸入欄位資料
   if ($name != "" && $tel != "") {
      require_once("mycontacts_open.inc");
      // 建立SQL字串
      $sql = "INSERT INTO contact (name, tel) values('";
      $sql.= $name."', '".$tel."')";        
      if ( mysqli_query($link, $sql) ) { // 執行SQL指令
         echo "<font color=red>新增聯絡資料成功!";
         echo "</font><br/>";
      }
      require_once("mycontacts_close.inc");
   }
}
?>
<form action="add.php" method="post">
<table border="1" width="300">
<tr><td><font size="2">姓名: </font></td>
   <td><input type="text" name="Name" 
              size="20" maxlength="10"/></td></tr>
<tr><td><font size="2">電話: </font></td>
   <td><input type="text" name="Tel" 
              size="20" maxlength="20"/></td></tr>
<tr><td colspan="2" align="center">
   <input type="submit" value="新增聯絡資料"/></td></tr>
</table>
</form>
<hr/><a href="contacts.php">首頁</a>
| <a href="add.php">新增聯絡資料</a>
| <a href="search.php">搜尋通訊錄</a></center>
</body>
</html>