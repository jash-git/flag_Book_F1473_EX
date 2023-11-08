<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-5.php</title>
<body>
<?php
class Student {  // 宣告Student類別
   const MAX_STUDENTS = 50;            // 類別常數
   public static $teacherNo = "1002";// 類別變數
   private static $count = 0;
   private $name;                      // 成員變數
   private $score;  
   // 建構子方法
   function __construct($name, $score) {
      $this->name = $name;
      $this->score = $score;      
      self::$count++;              // 學生人數加一
   }
   // 類別方法
   static function numOfStudents() {return self::$count;}
   // 成員方法
   function printStudent() {
      echo "學生姓名 : " .$this->name. "<br/>";
      echo "學生成績 : " .$this->score. "<br/>";
   }
}
?>
</head>
<body>
<?php
$std1 = new Student("陳會安", 68.5);  // 建立物件
$std2 = new Student("江小魚", 77.6);
echo "最大學生數: ".Student::MAX_STUDENTS."<br/>";
echo "指導老師編號: ".Student::$teacherNo."<br/><hr/>";
$std1->printStudent();  // 呼叫成員方法
$std2->printStudent();
echo "<hr>目前學生數: ".Student::numOfStudents()."<br/>";
?>
</body>
</html>