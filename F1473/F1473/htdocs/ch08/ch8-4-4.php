<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-4-4.php</title>
</head>
<body>
<?php 
$gender = $_POST["Gender"];  // 取得選擇鈕值
switch (strtoupper($gender)) {
   case "MALE":
      print "性別-男<br/>"; break;
   case "FEMALE":
      print "性別-女<br/>"; break;
}  // 取得下拉式清單方塊值
$computer = $_POST["Computer"]; 
switch ($computer) {
   case "PC":
      print "使用PC<br/>";  break;
   case "MAC":
      print "使用MAC<br/>"; break;
}  // 取得核取方塊值
if (isset($_POST["GC"]))
   print "使用Google Chrome<br/>";
if (isset($_POST["SF"]))
   print "使用Safari<br/>";
if (isset($_POST["FF"]))
   print "使用Mozilla Firefox<br/>";
// 取得清單方塊複選的陣列   
$webs = $_POST["Webs"]; 
// 取得清單方塊選項陣列的各元素
foreach ($webs as $value) {
   switch (trim($value)) {
     case "w1":
        print "Yahoo!奇摩<br/>";     break;
     case "w2":
        print "PC Home Online<br/>"; break;
     case "w3":
        print "中華電信Hinet<br/>";  break;
     case "w4":
        print "Google台灣<br/>";     break;
   }
}   
?>
</body>
</html>