<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-4.php</title>
</head>
<body>
<?php 
class Author {       // 宣告Author類別
   public $name;     // 成員變數
   // 建構子方法
   function __construct($name) { $this->name=$name; }   
}
class BookView {     // 宣告BookView類別
   private $id;      // 成員變數
   private $title;
   private $author;  // 物件的成員變數
   private $price;
   private $page;    // 儲存網頁內容
   // 建構子方法
   function __construct($id,$title,$author,$price=650) {
      $this->id = $id;
      $this->title = $title;
      $this->author = new Author($author); // 建立物件
      $this->price = $price;
   }   
   // 成員方法
   function header() {   // HTML網頁開頭
      $this->page = "<html><head><title>";
      $this->page .= "使用物件的成員變數</title>";
      $this->page .= "</head><body>";
   }
   function content() {
      $this->page .= "<hr/>";
      $this->bookinfo();
      $this->page .= "<hr/>";
   }
   private function bookInfo() { // 圖書資料
      $this->page .="書號: ".$this->id."<br/>";
      $this->page .="書名: ".$this->title."<br/>";
      $this->page .="作者: ".$this->author->name."<br/>";
      $this->page .="書價: ".$this->price."<br/>";
   }   
   function footer() {   // HTML網頁結尾
      $this->page .= "</body></html>";
   }
   function getPage() {
      return $this->page; // 傳回網頁內容
   }
}
// 建立物件
$page = new BookView("P789","Python程式設計範例教本",
                     "陳會安", 580);
$page->header();         // 呼叫成員方法
$page->content();
$page->footer();
echo $page->getPage();   // 顯示網頁內容
?>
</body>
</html>