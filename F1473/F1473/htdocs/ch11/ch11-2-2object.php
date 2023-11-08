<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-2object.php</title>
</head>
<body>
<?php
// 建立mysqli物件 
$mysqli = new mysqli("localhost","root","A12345678","myschool")
        or die("無法開啟MySQL資料庫連接!<br/>");
// 指定SQL查詢字串
$sql = "SELECT * FROM students";
// 送出查詢的SQL指令
if ( $result = $mysqli->query($sql) ) { 
   echo "資料表: students<br>";
   // 取得欄位數
   $total_fields = $result->field_count;
   echo "欄位數: $total_fields 個<br/>";
   // 取得記錄數
   $total_records = $result->num_rows;
   echo "記錄數: $total_records 筆<br/>"; 
   echo "<table border=1>";
   echo "<tr><td>欄位名稱</td><td>資料表</td>";
   echo "<td>最大長度</td><td>資料類型</td></tr>";
   // 顯示欄位資訊
   while ( $meta = $result->fetch_field() ) {
      echo "<tr><td>" . $meta->name . "</td>";
      echo "<td>" . $meta->table . "</td>";
      echo "<td>" . $meta->max_length . "</td>";   
      echo "<td>" . $meta->type . "</td></tr>";   
   }
   echo "</table>";
   $result->close(); // 釋放佔用記憶體 
} 
$mysqli->close();  // 關閉資料庫連接
?>
</body>
</html>
