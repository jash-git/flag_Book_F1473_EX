<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-3.php</title>
</head>
<body>
<?php
require_once("myschool_open.inc");
// 執行SQL查詢
$result = mysqli_query($link, $sql);
// 一筆一筆的以表格顯示記錄
echo "<table border=1><tr>";
// 顯示欄位名稱
while ( $meta = mysqli_fetch_field($result) )
   echo "<td>".$meta->name."</td>";
echo "</tr>"; // 取得欄位數
$total_fields = mysqli_num_fields($result);
// 顯示每一筆記錄
while ($row = mysqli_fetch_row($result)) {
   echo "<tr>"; // 顯示每一筆記錄的欄位值
   for ( $i = 0; $i <= $total_fields-1; $i++ )
      echo "<td>" . $row[$i] . "</td>";
   echo "</tr>";
}
echo "</table>";
mysqli_free_result($result); // 釋放佔用記憶體  
require_once("myschool_close.inc");
?>
</body>
</html>