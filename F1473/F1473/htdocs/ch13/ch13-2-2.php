<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-2.php</title>
</head>
<body>
<?php
class BookView {  // 宣告BookView類別
   var $id;       // 成員變數
   public $title;
   public $price;
   protected $page;  // 儲存網頁內容
   // 成員方法
   function header() {   // HTML網頁開頭
      $this->page = "<html><head><title>";
      $this->page .= "成員變數與方法的存取</title>";
      $this->page .= "</head><body>";
   }
   public function content() {
      $this->page .= "<hr/>";
      $this->bookinfo();
      $this->page .= "<hr/>";
   }
   private function bookInfo() { // 圖書資料
      $this->page .= "書號: " . $this->id . "<br/>";
      $this->page .= "書名: " . $this->title . "<br/>";
      $this->page .= "書價: " . $this->price . "<br/>";
   }   
   function footer() {   // HTML網頁結尾
      $this->page .= "</body></html>";
   }
   function getPage() {
      return $this->page; // 傳回網頁內容
   }
}
$page = new BookView();  // 建立物件
$page->id = "P795";     // 存取成員變數
$page->title = "C/C++語言程式設計";
$page->price = 520;
$page->header();         // 呼叫成員方法
$page->content();
$page->footer();
echo $page->getPage();   // 顯示網頁內容
?>
</body>
</html>