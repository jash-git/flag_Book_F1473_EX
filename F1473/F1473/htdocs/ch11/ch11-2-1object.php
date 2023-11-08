<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-1object.php</title>
</head>
<body>
<?php
// 建立mysqli物件
$mysqli = new mysqli("localhost","root","A12345678","myschool")
        or die("無法開啟MySQL資料庫連接!<br/>");
echo "資料庫myschool開啟成功!<br/>";
// 指定SQL查詢字串
$sql = "SELECT * FROM students";
echo "SQL查詢字串: $sql <br/>";
// 送出查詢的SQL指令
if ( $result = $mysqli->query($sql) ) { 
   echo "<b>學生資料:</b><br/>";  // 顯示查詢結果
   while( $row = $result->fetch_assoc() ){ 
      echo $row["sno"]."-".$row["name"]."<br/>";
   }    
   $result->close(); // 釋放佔用記憶體 
} 
$mysqli->close();  // 關閉資料庫連接
?>
</body>
</html>
