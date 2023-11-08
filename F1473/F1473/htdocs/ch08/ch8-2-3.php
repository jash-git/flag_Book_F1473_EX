<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-2-3.php</title>
</head>
<body>
<?php
for ( $i = 1; $i < 30; $i++ ) {
   echo "$i ";  // 輸出字串的一個字
   if (( $i % 2 ) == 0)
      ob_flush();  // 輸出緩衝區
   else
      ob_clean();  // 清除緩衝區
}
echo "<br/>只輸出偶數的數字<br/>";
ob_end_flush();
?>
</body>
</html>