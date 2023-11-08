<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-3-4.php</title>
<?php include_once "ch13-3-4.inc"; ?>
</head>
<body>
<?php  
if (class_exists("Vehicle")) { // 建立物件
   $vehicle = new Vehicle(); 
   echo "建立\$vehicle物件<br>";
}
if (class_exists("Car")) {
   $car = new Car(1234567);
   echo "建立\$car物件<br>";
}
// 顯示物件所屬的類別
echo "\$vehicle物件是類別: ".get_class($vehicle)."<br>";
echo "\$car物件是類別: ".get_class($car). "<br>";
echo "\$car物件的父類別: ".get_parent_class($car)."<br>";
echo "\$car物件的成員變數: <br>";  // 顯示成員變數
$array = get_object_vars($car);
var_dump($array);
// 顯示成員方法
echo "<br>\$car物件的成員方法: <br>";
$array = get_class_methods(get_class($car));
foreach ($array as $method)
   echo "$method() ";
echo "<br>";
// 檢查物件方法是否存在
if (method_exists($car, "printCar"))
   echo "\$car物件的printCar()成員方法存在<br>";
if (is_subclass_of($car, "Vehicle"))
   echo "\$car物件是Vehicle的子類別<br>";
?>
</body>
</html>