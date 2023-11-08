<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>shoppingcart.php</title>
</head>
<body bgcolor="#FFCC77" text="blue">
<center><table border="0">
<tr bgcolor="#CC99FF">
   <td>功能</td><td>商品編號</td><td>商品名稱</td>
   <td>訂價</td><td>數量</td><td>小計</td></tr>
<?php
// 設定報告等級
error_reporting(E_ERROR | E_WARNING);
require_once "class.Cart.php";  // 插入購物車的PHP類別檔
session_start();  // 啟用交談期
$cart =& $_SESSION['classCart']; // 指向購物車物件
if( !is_object($cart) ) {
   $cart = new Cart([  // 建立購物車物件
      "cartMaxItem"      => 0,
      "itemMaxQuantity"  => 99,
      "useCookie"        => false,
   ]);
} 
$flag = false;
if(!$cart->isEmpty()) { // 檢查購物車是否有商品
   $total = 0;
   // 顯示購物車的內容
   foreach($cart->getItems() as $items) {
	   if ($flag) {   // 切換顯示色彩
         $flag = false;
         $color="#FF99CC";
      } else {
         $flag = true;
         $color="#99FFC";
      }      
      foreach($items as $item) {
         $quantity = $item['quantity'];
         $price = $item['attributes']['price'];
         $subtotal = $quantity * $price;
         echo "<tr bgcolor='".$color."'>";
         echo "<td><a href='delete.php?Id=".$item['id']."'>";
         echo "刪除</a></td>";     
         // 顯示選購的商品資料
         echo "<td>".$item['id']."</td>";
         echo "<td>".$item['attributes']['title']."</td>";
         echo "<td>".number_format($price,2)."</td>";
         echo "<td>".$quantity."</td>";
         echo "<td>".number_format($subtotal,2)."</td>";
      }
      $total = $total + $subtotal;
   }
   echo "<tr bgcolor=yellow><td colspan='6' align='right'>";
   echo "總金額 = NT$".number_format($total,2)."元</td></tr>";	
} 
else {
   echo "目前購物車沒有選購商品!";
}
?>
</table>
<hr/> | <a href="shop.php">網路商店</a>
| <a href="shoppingcart.php">檢視購物車內容</a> |
</center>
</body>
</html>