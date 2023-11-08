<!-- 程式範例：myschool_open_object.inc -->
<?php
// 建立mysqli物件
$mysqli = new mysqli("localhost", "root", "A12345678") 
        or die("無法開啟MySQL資料庫連接!<br/>");
$mysqli->select_db("myschool");  // 選擇myschool資料庫
// 設定SQL查詢字串
$sql = "SELECT * FROM students";
?>