<!-- 程式範例：delete.php -->  f
<?php
$id = $_GET["Id"];  // 取得URL參數
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
$cart->remove($id);  // 刪除商品
header("Location: shoppingcart.php");  // 轉址
?>