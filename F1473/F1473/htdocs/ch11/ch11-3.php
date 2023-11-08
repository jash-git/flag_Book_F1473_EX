<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-3.php</title>
</head>
<body>
<?php
$records_per_page = 2;  // 每一頁顯示的記錄筆數
// 取得URL參數的頁數
if (isset($_GET["page"])) $page = $_GET["page"];
else                       $page = 1;
require_once("myschool_open.inc");
// 執行SQL查詢
$result = mysqli_query($link, $sql);
$total_fields=mysqli_num_fields($result); // 取得欄位數
$total_records=mysqli_num_rows($result);  // 取得記錄數
// 計算總頁數
$total_pages = ceil($total_records/$records_per_page);
// 計算這一頁第1筆記錄的位置
$offset = ($page - 1)*$records_per_page;
mysqli_data_seek($result, $offset); // 移到此記錄
echo "記錄總數: $total_records 筆<br/>";
echo "<table border=1><tr>";
while ( $meta=mysqli_fetch_field($result) )
   echo "<td>".$meta->name."</td>";
echo "</tr>";
$j = 1;
while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)
       and $j <= $records_per_page) {
   echo "<tr>";
   for ( $i = 0; $i<= $total_fields-1; $i++ )
      echo "<td>".$rows[$i]."</td>";
   echo "</tr>";
   $j++;
}
echo "</table><br>";
if ( $page > 1 )  // 顯示上一頁
   echo "<a href='ch11-3.php?page=".($page-1).
        "'>上一頁</a>| ";
for ( $i = 1; $i <= $total_pages; $i++ )
   if ($i != $page)
     echo "<a href=\"ch11-3.php?page=".$i."\">".
          $i."</a> ";
   else
     echo $i." ";
if ( $page < $total_pages )  // 顯示下一頁
   echo "|<a href='ch11-3.php?page=".($page+1).
        "'>下一頁</a> ";
mysqli_free_result($result);  // 釋放佔用的記憶體
require_once("myschool_close.inc");
?>
</body>
</html>
