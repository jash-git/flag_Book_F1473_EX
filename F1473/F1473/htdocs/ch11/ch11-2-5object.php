<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-5object.php</title>
</head>
<body>
<?php
require_once("myschool_open_object.inc");
// 執行SQL查詢
$result = $mysqli->query($sql);
echo "NUM類型: <br>";
echo "<table border=1>";
while ( $rows = $result->fetch_array(MYSQLI_NUM) ) {
   echo "<tr><td>$rows[0]</td>";
   echo "<td>$rows[1]</td>";
   echo "<td>$rows[2]</td>";
   echo "<td>$rows[3]</td></tr>";
}
echo "</table>";
$result->close();
// 再次執行SQL查詢
$result = $mysqli->query($sql);
echo "ASSOC類型: <br>";
echo "<table border=1>";
while ($rows = $result->fetch_array(MYSQLI_ASSOC)) {
   echo "<tr><td>".$rows["sno"]."</td>";
   echo "<td>".$rows["name"]."</td>";
   echo "<td>".$rows["address"]."</td>";
   echo "<td>".$rows["birthday"]."</td></tr>";
}
echo "</table>";
$result->close();
require_once("myschool_close_object.inc");
?>
</body>
</html>
