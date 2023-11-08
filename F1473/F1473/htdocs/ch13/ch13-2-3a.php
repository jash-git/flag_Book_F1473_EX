<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-3a.php</title>
</head>
<body>
<?php
class BMIClass {   // 宣告BMIClass類別
   public $w;      // 成員變數
   public $h;
   // 建構子方法
   function __construct($w = 75, $h = 175) {
      $this->w = $w;   // 初始成員變數
      $this->h = $h;
   }
   // 成員方法
   function cal() {   // 計算BMI值
      return $this->w/($this->h/100.0)**2;
   }
}
// 建立物件
$bmi = new BMIClass();
echo $bmi->cal();
?>
</body>
</html>