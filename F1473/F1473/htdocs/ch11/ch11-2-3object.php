<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-3object.php</title>
</head>
<body>
<?php
require_once("myschool_open_object.inc");
// 執行SQL查詢
$result = $mysqli->query($sql);
// 一筆一筆的以表格顯示記錄
echo "<table border=1><tr>";
// 顯示欄位名稱
while ( $meta = $result->fetch_field() )
   echo "<td>".$meta->name."</td>";
echo "</tr>"; // 取得欄位數
$total_fields = $result->field_count;
// 顯示每一筆記錄
while ($row = $result->fetch_row()) {
   echo "<tr>"; // 顯示每一筆記錄的欄位值
   for ($i=0; $i <= $total_fields-1; $i++)
      echo "<td>" . $row[$i] . "</td>";
   echo "</tr>";
}
echo "</table>";
$result->close();    // 釋放佔用的記憶體  
require_once("myschool_close_object.inc");
?>
</body>
</html>
