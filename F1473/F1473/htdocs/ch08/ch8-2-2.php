<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-2-2.php</title>
</head>
<body>
PHP檔案在快取保留到 : <br/>
<?php
header("Expires: ". gmdate("D, d M Y H:i:s", 
             mktime(0,0,0,12,31,2021))." GMT" );
echo date("D, d M Y H:i:s",
           mktime(0,0,0,12,31,2021))."<br/>";
echo gmdate("D, d M Y H:i:s", 
          mktime(0,0,0,12,31,2021))." GMT"."<br/>";
?>
</body>
</html>