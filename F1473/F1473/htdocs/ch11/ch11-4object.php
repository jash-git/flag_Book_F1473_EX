<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-4object.php</title>
</head>
<?php
function error_handle($mysqli) {
   echo "錯誤代碼: ".$mysqli->errno."<br/>";
   echo "錯誤訊息: ".$mysqli->error."<br/>";
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
// 建立mysqli物件 
$mysqli = new mysqli("localhost","root","A12345678");
if ( $mysqli->errno != 0) {  // 是否有錯誤
   error_handle($mysqli);  
} else {
   echo "開啟MySQL資料庫連接成功!<br/>";
   if ( !$mysqli->select_db($dbname) )
      error_handle($mysqli);
   else  echo "選擇資料庫: $dbname 成功!<br/>";
   $result = $mysqli->query($sql);
   if ( $mysqli->errno != 0 ) error_handle($mysqli);
   else  echo "SQL指令: $sql 查詢成功!<br/>";
   $result->close();
   $mysqli->close();  // 關閉資料庫連接
}
?>
</body>
</html>
