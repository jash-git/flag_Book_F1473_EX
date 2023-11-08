<!-- 程式範例：ch13-3-4.inc -->
<?php 
class Vehicle {   // 父類別Vehicle類別
   public $no;    // 車號
   function setNumber($no) { $this->no=$no; }
   protected function showVehicle() {  // 顯示車輛資料
      echo "車號: " . $this->no . "<br/>";
   }
}
// Car類別宣告, 繼承自Vehicle類別 
class Car extends Vehicle {
   public $doors;    // 幾門
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
