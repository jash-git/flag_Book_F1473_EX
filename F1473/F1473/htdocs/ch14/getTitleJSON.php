<?php
class Book {  // 類別宣告 
   public $Id;
   public $Title;
}
$bk1 = new Book();  // 建立物件
$bk1->Id = "W101";
$bk1->Title = "ASP.NET程式設計";
$bk2 = new Book();  // 建立物件
$bk2->Id = "M101";
$bk2->Title = "Android程式設計";
$bk3 = new Book();  // 建立物件
$bk3->Id = "P101";
$bk3->Title = "Visual Basic程式設計";
// 建立物件陣列
$model = array($bk1, $bk2, $bk3);
echo json_encode($model);
?>
