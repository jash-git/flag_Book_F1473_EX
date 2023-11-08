<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>shop.php</title>
<?php
// 設定報告等級
error_reporting(E_ERROR | E_WARNING);
require_once "class.Cart.php";  // 插入購物車的PHP類別檔
session_start();    // 啟用交談期
$cart =& $_SESSION['classCart']; // 指向購物車物件
if( !is_object($cart) ) {
   $cart = new Cart([  // 建立購物車物件
      "cartMaxItem"      => 0,
      "itemMaxQuantity"  => 99,
      "useCookie"        => false,
   ]);
}
$msg = "";
// 檢查是否是表單送回
if ( isset($_POST["Order"]) ) {      
   // 新增至購物車
   $id = $_POST["BookID"];  // 取得表單欄位
   $title = $_POST["BookTitle"];
   $price = $_POST["BookPrice"];
   $quantity = $_POST["Quantity"];
   if ( $quantity == "" ) $quantity = 1;
   $cart->add($id,$quantity,[
      "price" => $price,
      "title" => $title
   ]);
   $msg = "<font color='red'>已將選購商品".$id;
   $msg .= "放入購物車!</font><br/>";
}
?>
</head>
<body bgcolor="#FFCC77" text="blue">
<center><table border="0">
<tr bgcolor="#CC99FF">
   <td>編號</td><td>圖書名稱</td>
   <td>價格</td><td>數量</td><td>訂購</td>
</tr>
<?php
// 插入函式庫的PHP檔案
require_once("dataAccess.php");
// 建立dataAccess物件的資料庫連接
$dao = new dataAccess("localhost","root",
                      "A12345678","shop");
$sql = "SELECT * FROM books";  // 建立SQL指令字串
$dao->fetchDB($sql);  // 執行SQL查詢指令字串
$flag = false;
// 顯示資料庫內容
while ( $row = $dao->getRecord() ) {
   if ($flag) {
      $flag = false;
      $color="#FF99CC";
   } else {
      $flag = true;
      $color="#99FFC";
   }
   // 顯示選購商品的表單
?>
<form action="shop.php" method="post">
   <input type="hidden" name="BookID" 
          value="<?php echo $row["bookid"] ?>"/>
   <input type="hidden" name="BookTitle" 
          value="<?php echo $row["booktitle"] ?>"/>
   <input type="hidden" name="BookPrice"
          value="<?php echo $row["bookprice"]; ?>"/>
<tr bgcolor="<?php echo $color ?>">
   <td><?php echo $row["bookid"] ?></td>
   <td><?php echo $row["booktitle"] ?></td>
   <td><?php echo $row["bookprice"] ?></td>
   <td valign="top">
   <input type="text" size="5" name="Quantity" value="1"/>
   </td><td valign="top">
      <input type="submit" name="Order" value="訂購"/>
   </td>
</tr>
</form>
<?php
} ?>
</table><?php echo $msg ?>
<hr/>| <a href="shop.php">網路商店</a>
| <a href="shoppingcart.php">檢視購物車內容</a> |
</center>
</body>
</html>
