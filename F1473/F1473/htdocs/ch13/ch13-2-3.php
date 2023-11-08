<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-3.php</title>
</head>
<body>
<?php
class BookView {     // 宣告BookView類別
   private $id;      // 成員變數
   private $title;
   private $price;
   private $page;    // 儲存網頁內容
   // 建構子方法
   function __construct($id, $title, $price = 650) {
      echo "指定成員變數值...<br>";
      $this->id = $id;
      $this->title = $title;
      $this->price = $price;
   }
   // 解構子方法
   function __destruct() {
      $fp = fopen("ch13-2-3.html", "w"); // 建立文字檔案
      echo "建立HTML檔案ch13-2-3.html...<br/>";
      if (fwrite($fp, $this->page))    // 寫入網頁內容
         echo "將網頁內容寫入HTML檔案成功...<br/>";
      else
         echo "寫入HTML檔案失敗...<br/>";
      fclose($fp);   // 關閉檔案
   }
   // 成員方法
   function header() {   // HTML網頁開頭
      $this->page = "<html><head>";
      $this->page .= "<title>建構子與解構子</title>";
      $this->page .= "</head><body>";
   }
   function content() {
      $this->page .= "<hr>";
      $this->bookinfo();
      $this->page .= "<hr>";
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
// 建立物件
$page = new BookView("P779","Java程式設計範例教本");
$page->header();         // 呼叫成員方法
$page->content();
$page->footer();
echo $page->getPage();   // 顯示網頁內容
?>
</body>
</html>