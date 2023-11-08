<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch5-2-3.php</title>
</head>
<body>
<?php 
$grade = 65;  // 指定變數值
echo "學生成績: $grade 分<br/>";
// if/elseif條件敘述
if ( $grade >= 80 ) {
    print "甲等!<br/>";
}
elseif ( $grade >= 70 ) {
       print "乙等!<br/>";
    }
elseif ( $grade >= 60 ) {
            print "丙等!<br/>";
        }
        else {
            print "丁等!<br/>";
        }
?>
</body>
</html>