<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch9-4-1.php</title>
</head>
<body>
<?php
if (isset($_FILES["file"])) {
   echo "上傳檔案資訊: <hr/>";
   echo "檔案名稱: ".$_FILES["file"]["name"]."<br/>";
   echo "暫存檔名: ".$_FILES["file"]["tmp_name"]."<br/>";
   echo "檔案尺寸: ".$_FILES["file"]["size"]."<br/>";
   echo "檔案種類: ".$_FILES["file"]["type"]."<hr/>";
   // 儲存上傳的檔案
   if ( copy($_FILES["file"]["tmp_name"],
             $_FILES["file"]["name"])) {
      echo "檔案上傳成功<br/>";
      unlink($_FILES["file"]["tmp_name"]);
   }
   else echo "檔案上傳失敗<br/>";
}
?>
<form action="ch9-4-1.php" method="post" 
      enctype="multipart/form-data">
選擇上傳檔案: <input type="file" name="file"/><hr/>
<input type="submit" value="上傳檔案"/>
</form>
</body>
</html>