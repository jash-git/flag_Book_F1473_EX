<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch2-1error.php</title>
</head>
<body>
<?php
begin = 12;
$end = 18;
for ($i = $begin; $i <= $end; $i += 3) {
?>
<p style="font-size:<?php echo $i;?>pt">
我的第一個PHP程式
<?php
print "</p>";
} ?>
</body>
</html>
