<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appb-2.php</title>
<?php
abstract class Shape {   // Shape抽象類別宣告
   public $x;   // X座標
   public $y;   // y座標   
}
interface AreaInterface { // AreaInterface介面宣告
   function area(); // 介面方法
}
class Circle extends Shape   // Circle類別宣告
             implements AreaInterface {
   public $r;   // 半徑
   // 建構子方法
   function __construct($x, $y, $r) {
      $this->x = $x;
      $this->y = $y;
      $this->r = $r;
   }
   // 成員方法: 實作介面方法area()
   function area() {
      return 3.1416*$this->r*$this->r;
   }
}
?>
</head>
<body>
<?php
$c = new Circle(15.0, 15.0, 8.6);  // 建立物件
// 顯示圓形c的資料
echo "圓形c物件的資料<hr/>";
echo "X 座標: " . $c->x . "<br/>";
echo "Y 座標: " . $c->y . "<br/>";
echo "圓半徑: " . $c->r . "<br/>";
// 呼叫物件的成員方法
echo "圓面積: " . $c->area() . "<br/>";
?>
</body>
</html>