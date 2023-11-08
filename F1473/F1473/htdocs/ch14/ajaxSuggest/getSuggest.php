<?php
// 程式範例：getSuggest.php
header("Content-Type: text/json");
header("Expires: Mon, 5 Jul 2021 05:00:00 GMT");
// 建立資料庫連接
$link=mysqli_connect("localhost","root","A12345678","mysuggests");
$arr = array();
// 檢查是否有輸入查詢字串
if ( isset($_GET["search"]) && $_GET["search"] != '' ) {
   // 處理特殊字元
   $search = addslashes($_GET["search"]);
   // 建立SQL指令字串
   $sql = "SELECT distinct(title) " . 
          "FROM suggest WHERE title LIKE('" . 
          $search . "%') ORDER BY title";
   // 執行SQL查詢
   $result = mysqli_query($link, $sql);
   // 取得記錄資料
   while ( $row = mysqli_fetch_row($result) ) {
      // 取得欄位值
      array_push($arr, $row[0]);
   }
}
echo json_encode($arr,JSON_UNESCAPED_UNICODE);//json編碼
mysqli_close($link);  // 關閉資料庫連接
?>



