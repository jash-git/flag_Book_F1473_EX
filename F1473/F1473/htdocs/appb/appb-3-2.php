<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appb-3-2.php</title>
<?php
interface IArea {    // IArea介面宣告
   function area();  // 介面方法
}
class Circle implements IArea { // Circle類別宣告
   private $r;     // 半徑
   // 建構子方法
   function __construct($r) { $this->r = $r; }
   // 成員方法: 實作介面方法area()
   function area() { return 3.1416*$this->r*$this->r; }
}
class Rectangle implements IArea { // Rectangle類別宣告
   private $width;     // 寬
   private $height;    // 高
   // 建構子方法
   function __construct($w, $h) {
      $this->width = $w;  $this->height = $h;
   }
   // 成員方法: 實作介面方法area()
   function area() { return $this->height*$this->width; }
}
?>
</head>
<body>
<?php
$c = new Circle(8.0);  // 建立物件
$r = new Rectangle(20.0, 15.0);
// 呼叫物件的方法area()
$obj = $c;   // 圓形
if ($obj instanceof Circle) echo "圓面積 : ";
echo $obj->area() . "<br/>";
$obj = $r;   // 長方形
if ($obj instanceof Rectangle) echo "長方形面積 : ";
echo $obj->area() . "<br/>";
?>
</body>
</html>