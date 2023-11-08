<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch11-2-1.php</title>
</head>
<body>
<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("localhost","root",
                       "A12345678","myschool")
        or die("無法開啟MySQL資料庫連接!<br/>");
echo "資料庫myschool開啟成功!<br/>";
$sql = "SELECT * FROM students"; // 指定SQL查詢字串
echo "SQL查詢字串: $sql <br/>";
// 送出查詢的SQL指令
if ( $result = mysqli_query($link, $sql) ) { 
   echo "<b>學生資料:</b><br/>";  // 顯示查詢結果
   while( $row = mysqli_fetch_assoc($result) ){ 
      echo $row["sno"]."-".$row["name"]."<br/>";
   }     
   mysqli_free_result($result); // 釋放佔用記憶體
} 
mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>