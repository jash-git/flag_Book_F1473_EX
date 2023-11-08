<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appb-1-2.php</title>
<?php
class Member {     // Member類別宣告
   var $username;  // 成員資料
   var $password;
   private $status;
   // 成員方法
   final function isLogon() { return $this->status; }
   final function setStatus($s) { $this->status=$s; }
}
// CarMember類別宣告, 繼承自Member類別
final class CarMember extends Member {
   private $age;
   // 建構子方法
   function __construct($name, $pass, $age) {
      $this->username = $name;
      $this->password = $pass;
      $this->age = $age;
      $this->setStatus(false);    
   }
}
?>
</head>
<body>
<?php
$joe = new CarMember("Joe","5678",36);  // 建立物件
$tom = new CarMember("Tom","1234",28);
if ( $joe->isLogon() ) echo "會員Joe已經登入<br/>";
else echo "會員Joe尚未登入<br/>";
$tom->setStatus(true);   // 呼叫成員方法
if ( $tom->isLogon() ) echo "會員Tom已經登入<br/>";
else echo "會員Tom尚未登入<br/>";
?>
</body>
</html>