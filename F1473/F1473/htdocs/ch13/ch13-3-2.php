<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-3-2.php</title>
<?php
class Vehicle {   // 父類別Vehicle類別
   private $no;       // 車號
   function setNumber($no) { $this->no=$no; }
   protected function showVehicle() {  // 顯示車輛資料
      echo "車號: " . $this->no . "<br/>";
   }
}
// Car類別宣告, 繼承自Vehicle類別 
class Car extends Vehicle {
   private $doors;    // 幾門
   // 建構子方法
   function __construct($no, $doors = 4) {
      parent::setNumber($no);  // 呼叫父類別的成員方法
      $this->doors = $doors;
   }
   function showCar() { // 顯示轎車資料      
      parent::showVehicle();   // 呼叫父類別的成員函數
      echo "幾門: " . $this->doors . "<hr/>";
   }
}
?>
</head>
<body>
<?php
$joe = new Car(1234567);  // 建立物件
$jane = new Car(5678924, 5); 
// 更改車號 - 呼叫繼承的成員方法
$joe->setNumber(3456789);
$joe->showCar();      // 呼叫物件的成員方法
$jane->showCar();
?>
</body>
</html>