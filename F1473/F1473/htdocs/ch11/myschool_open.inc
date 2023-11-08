<!-- 程式範例：myschool_open.inc -->
<?php
// 建立MySQL的資料庫連接
$link = mysqli_connect("localhost", "root", "A12345678") 
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "myschool");  // 選擇myschool資料庫
// 設定SQL查詢字串
$sql = "SELECT * FROM students";
?>