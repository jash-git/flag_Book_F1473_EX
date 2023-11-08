<?php 
// PHP物件
class User {  // 類別宣告
   public $name;
   public $age;
   public $birthday;
}
$user = new User();  // 建立物件
$user->name = "joe";
$user->age = 22;
echo json_encode($user);
echo "<br/>";
$user->birthday = new DateTime();
echo json_encode($user);
?>
