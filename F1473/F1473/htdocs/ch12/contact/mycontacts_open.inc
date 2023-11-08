<!-- 程式範例：mycontacts_open.inc -->
<?php
// 建立MySQL的資料庫連接
$link = mysqli_connect("localhost", "root", "A12345678") 
        or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "mycontacts");  // 選擇mycontacts資料庫
?>