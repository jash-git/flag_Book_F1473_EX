<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-5-2.php</title>
</head>
<body>
<?php
// 檢查Cookie是否存在
if (isset($_COOKIE["ItemName"])) {   // 存在
   $itemName = $_COOKIE["ItemName"]; // 取得Cookie值
   $quantity = $_COOKIE["Quantity"];
   print "取得ItemName的Cookie值 : ".$itemName."<br/>";
   print "取得Quantity的Cookie值 : ".$quantity."<br/>";
	 // 刪除Cookie
   setcookie("ItemName", "", time()-3600);
   setcookie("Quantity", "", time()-3600);
}
else {  // 不存在
   $itemName = "白色iPhone";  // 指定變數值
   $quantity = "10";
   // 有效期限為10天後
   $date = strtotime("+10 days", time());   
   setcookie("ItemName", $itemName, $date); // 新增Cookie
   setcookie("Quantity", $quantity, $date);
   // 顯示建立的Cookie資料
   print "新增名為ItemName的Cookie: ".$itemName."<br/>";
   print "新增名為Quantity的Cookie: ".$quantity."<br/>";
   print "Cookie期限:".date("l F j Y h:i:s A",$date);
}
?>
<br/><a href="ch8-5-2.php">取得Cookie值</a>
</body>
</html>