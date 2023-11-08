<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-5.php</title>
</head>
<body>
<?php
require_once("myschool_open.inc");
// 執行SQL查詢
$result = mysqli_query($link, $sql);
echo "NUM類型: <br>";
echo "<table border=1>";
while ($rows=mysqli_fetch_array($result,MYSQLI_NUM)) {
   echo "<tr><td>$rows[0]</td>";
   echo "<td>$rows[1]</td>";
   echo "<td>$rows[2]</td>";
   echo "<td>$rows[3]</td></tr>";
}
echo "</table>";
mysqli_free_result($result); // 釋放佔用的記憶體
// 再次執行SQL查詢
$result = mysqli_query($link, $sql);
echo "ASSOC類型: <br>";
echo "<table border=1>";
while ($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
   echo "<tr><td>".$rows["sno"]."</td>";
   echo "<td>".$rows["name"]."</td>";
   echo "<td>".$rows["address"]."</td>";
   echo "<td>".$rows["birthday"]."</td></tr>";
}
echo "</table>";
mysqli_free_result($result); // 釋放佔用的記憶體
require_once("myschool_close.inc");
?>
</body>
</html>
