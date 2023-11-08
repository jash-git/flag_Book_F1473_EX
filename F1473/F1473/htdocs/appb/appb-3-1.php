<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appb-3-1.php</title>
<?php
abstract class Shape {   // Shape抽象類別宣告
   public $x;   // X座標
   public $y;   // y座標
   abstract function area(); // 抽象方法   
}
class Circle extends Shape {   // Circle類別宣告
   private $r;   // 半徑
   // 建構子方法
   function __construct($x, $y, $r) {
      $this->x = $x;    $this->y = $y;
      $this->r = $r;
   }
   // 成員方法: 實作抽象方法area()
   function area() { return 3.1416*$this->r*$this->r; }
}
class Rectangle extends Shape { // Rectangle類別宣告
   private $width;     // 寬
   private $height;    // 高
   // 建構子方法
   function __construct($x, $y, $w, $h) {
      $this->x = $x;     $this->y = $y;
      $this->width = $w; $this->height = $h;
   }
   // 成員方法: 實作抽象方法area()
   function area() { return $this->height*$this->width; }
}
?>
</head>
<body>
<?php
$c = new Circle(15.0, 15.0, 8.0);  // 建立物件
$r = new Rectangle(10.0, 10.0, 20.0, 15.0);
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