<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-4-2.php</title>
</head>
<body>
<?php 
if (isset($_FILES["file"])) {
   //  處理多個檔案 
   for ( $i = 0; $i < 3; $i++) {
      $name = $_FILES["file"]["name"][$i];
      $tmp = $_FILES["file"]["tmp_name"][$i];
      if ( !empty($name) ) {  // 上傳檔案
         copy($tmp, $name);
         echo "檔案$name 上傳成功<br/>";
         unlink($tmp);
      }
   }
}
?>
<form action="ch9-4-2.php" method="post" 
      enctype="multipart/form-data">
選擇檔案:<input type="file" name="file[]"/><br/>
選擇檔案:<input type="file" name="file[]"/><br/>
選擇檔案:<input type="file" name="file[]"/><hr/>
<input type="submit" name="Upload" value="上傳檔案"/>
</form>
</body>
</html>