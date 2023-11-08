<!DOCTYPE html>
<html>     
<head>
<meta charset="utf-8" />
<title>contacts.php</title>
</head>
<body text="blue">
<center>
<?php
session_start();  // 啟動交談期
$records_per_page = 3;  // 每一頁顯示的記錄筆數
// 取得URL參數的頁數
if (isset($_GET["page"])) $page = $_GET["page"];
else                       $page = 1;
require_once("mycontacts_open.inc");
// 設定SQL查詢字串
if ( isset($_SESSION["SQL"]))
  $sql = $_SESSION["SQL"];
else
  $sql = "SELECT * FROM contact ORDER BY name";
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
echo "<table border=1><tr><td>編號</td>";
echo "<td>姓名</td><td>電話</td><td>功能</td></tr>";
$j = 1;
while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)
       and $j <= $records_per_page) {
   echo "<tr>";
   for ( $i = 0; $i<= $total_fields-1; $i++ )
      echo "<td>".$rows[$i]."</td>";
   echo "<td><a href='edit.php?action=edit&id=";
      echo $rows[0]."'><b>編輯</b> | ";
      echo "<a href='edit.php?action=del&id=";
      echo $rows[0]."'><b>刪除</b></td>";
      echo "</tr>";   
   echo "</tr>";
   $j++;
}
echo "</table><br>";
if ( $page > 1 )  // 顯示上一頁
   echo "<a href='contacts.php?page=".($page-1).
        "'>上一頁</a>| ";
for ( $i = 1; $i <= $total_pages; $i++ )
   if ($i != $page)
     echo "<a href=\"contacts.php?page=".$i."\">".
          $i."</a> ";
   else
     echo $i." ";
if ( $page < $total_pages )  // 顯示下一頁
   echo "|<a href='contacts.php?page=".($page+1).
        "'>下一頁</a> ";
mysqli_free_result($result);  // 釋放佔用的記憶體
require_once("mycontacts_close.inc");
?>
<hr/><a href="contacts.php">首頁</a>
| <a href="add.php">新增聯絡資料</a>
| <a href="search.php">搜尋通訊錄</a></center>
</body>
</html>