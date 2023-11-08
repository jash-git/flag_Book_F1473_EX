<?php
// <!-- 程式範例：ch8-2-1e.php -->
// 設定為XML文件
header("Content-type: text/xml");
// 建立XML文件
print "<?xml version='1.0' encoding='UTF-8'?>";
print "<library>";
print "<book>";
print "<title>PHP與MySQL網頁設計範例教本</title>";
print "<author>陳會安</author>";
print "</book>";
print "</library>";
?>