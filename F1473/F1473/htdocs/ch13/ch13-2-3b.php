<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-3b.php</title>
</head>
<body>
<?php
class BMIClass {   // 宣告BMIClass類別
   // 建構子方法
   public function __construct(
		public $w = 75,
		public $h = 175
   ) {}
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