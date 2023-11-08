<?php
header("Content-Type: text/xml"); // XML文件
// 取得欄位值
$name = (isset($_POST["name"]) ) ? $_POST["name"] : $_GET["name"];
$type = (isset($_POST["type"]) ) ? $_POST["type"] : $_GET["type"];
echo "<?xml version=\"1.0\" ?>";
if ($type == "date")
   $dt = date("m/j/Y");
else
   $dt = date("h:i:s A");
echo "<result>"; 
echo "<name>" . $name . "</name>";
echo "<date>" . $dt . "</date>";
echo "</result>";
?> 
