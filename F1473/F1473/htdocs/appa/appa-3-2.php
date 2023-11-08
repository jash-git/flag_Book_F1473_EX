<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appa-3-2.php</title>
</head>
<body>
<?php 
$d = getdate();
$date=$d["year"]."/".$d["mon"]."/".$d["mday"];
echo "測試的日期字串: ".$date."<br/>";
// 檢查日期格式
if ( mb_ereg("([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
          $date, $regs) ) {
   echo "合法的日期字串格式: ";
   echo $regs[3]."-".$regs[2]."-".$regs[1]."<br/>";
   echo "第2個參數: ".$regs[0]."<br/>";
} else 
   echo "不合法的字串格式<br/>";
$array = mb_split("/", $date, 3);  // 分割字串
echo "年: ". $array[0]."<br/>";
echo "月: ". $array[1]."<br/>";
echo "日: ". $array[2]."<br/>";
$str = "This is a pen."; // 字串變數
print("測試的字串: \"" . $str . "\"<br/>");
if (mb_eregi("p", $str)) // 是否擁有子字串
   echo "'$str 字串擁有字元  'p' 或 'P'<br/>";
$newstr = mb_ereg_replace("is", ":", $str);  // 取代字串
echo $newstr."<br/>";
?>
</body>
</html>