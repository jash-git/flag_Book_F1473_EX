<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-2-4.php</title>
</head>
<body>
<?php 
$GPA = 'B';  // 指定變數值
echo "學生成績: $GPA<br/>";
switch ( $GPA ) { // switdh條件敘述
   case 'A':
      print "學生成績超過80<br/>";
      break;
   case 'B':
      print "學生成績超過70,低於80<br/>";
      break;
   case 'C':
      print "學生成績超過60,低於70<br/>";
      break;
   default:
      print "學生成績不及格<br/>";
}
?>
</body>
</html>