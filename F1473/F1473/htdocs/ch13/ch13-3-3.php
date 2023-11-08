<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-3-3.php</title>
<?php
class Vehicle {  // 父類別Vehicle類別
   private $no;  // 車號
   // 建構子方法
   function __construct($no) { $this->no = $no; }
   protected function showVehicle() { // 顯示車輛資料
      echo "車號: " . $this->no . "<br/>";
   }    
}
// Car類別宣告, 繼承自Vehicle類別 
class Car extends Vehicle {
   private $doors;     // 幾門
   // 建構子方法
   function __construct($no, $doors = 4) {
      parent::__construct($no);  // 呼叫父類別的建構子
      $this->doors = $doors;
   }
   // 覆寫父類別的成員方法
   function showVehicle() {   // 顯示轎車資料
      parent::showVehicle(); // 呼叫父類別的成員函數
      echo "幾門: " . $this->doors . "<hr/>";
   }    
}
?>
</head>
<body>
<?php
$joe = new Car(1234567);  // 建立物件
$jane = new Car(5678924, 5); 
$joe->showVehicle();      // 呼叫物件的成員方法
$jane->showVehicle();
?>
</body>
</html>