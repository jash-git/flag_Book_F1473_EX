<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-4.php</title>
</head>
<?php
function error_handle($link) {
   echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
   echo "錯誤訊息: ".mysqli_error($link)."<br/>";
   exit();
}
?>
<body>
<?php
// 取得URL參數
if (isset($_GET["db"])) $dbname=$_GET["db"];
else                    $dbname = "myschool";
if ( isset($_GET["sql"]) ) $sql = $_GET["sql"];
else           $sql = "SELECT * FROM students";
// 建立MySQL的資料庫連接
$link = mysqli_connect("localhost","root","A12345678");
if ( mysqli_errno($link) != 0) {  // 是否有錯誤
   error_handle($link);  
} else {
   echo "開啟MySQL資料庫連接成功!<br/>";
   if ( !mysqli_select_db($link, $dbname) )
      error_handle($link);
   else  echo "選擇資料庫: $dbname 成功!<br/>";
   $result = mysqli_query($link, $sql);
   if ( mysqli_errno($link) != 0 ) error_handle($link);
   else  echo "SQL指令: $sql 查詢成功!<br/>";
   mysqli_free_result($result);
   mysqli_close($link);  // 關閉資料庫連接
}
?>
</body>
</html>