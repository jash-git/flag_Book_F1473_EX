<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>edit.php</title>
</head>
<body text="blue">
<?php
$id = $_GET["id"];  // 取得URL參數的編號
$action = $_GET["action"];  // 取得操作種類
require_once("mycontacts_open.inc");
// 執行操作
switch ($action) {
   case "update": // 更新操作    
      $name = $_POST["Name"]; // 取得欄位資料
      $tel = $_POST["Tel"];
      $sql = "UPDATE contact SET name='".$name.
             "', tel='".$tel."' WHERE id=".$id;
      mysqli_query($link, $sql);  // 執行SQL指令
      header("Location: contacts.php"); // 轉址
      break;
   case "del":    // 刪除操作
      $sql = "DELETE FROM contact WHERE id=".$id;
      mysqli_query($link, $sql);  // 執行SQL指令
      header("Location: contacts.php"); // 轉址
      break;
   case "edit":   // 編輯操作
      $sql = "SELECT * FROM contact WHERE id=".$id;
      $result = mysqli_query($link, $sql); // 執行SQL指令
      $row = mysqli_fetch_assoc($result); // 取回記錄
      $name = $row['name']; // 取得欄位name
      $tel = $row['tel'];   // 取得欄位tel
// 顯示編輯表單
?>
<center>
<form action="edit.php?action=update&id=<?php echo $id ?>"
      method="post">
<table border="1">
<tr><td><font size="2">姓名: </font></td>
   <td><input type="text" name="Name" size="20" 
   maxlength="10" value="<?php echo $name ?>"/></td></tr>
<tr><td><font size="2">電話 : </font></td>
   <td><input type="text" name="Tel" size="20"
   maxlength="20" value="<?php echo $tel ?>"/></td></tr>
<tr><td colspan="2" align="center">
    <input type="submit" value="更新連絡資料"/></td></tr>
</table>
</form>
<hr/><a href="contacts.php">首頁</a>
| <a href="add.php">新增聯絡資料</a>
| <a href="search.php">搜尋通訊錄</a></center>
<?php   
       break;
} 
require_once("mycontacts_close.inc");
?>
</body>
</html>

