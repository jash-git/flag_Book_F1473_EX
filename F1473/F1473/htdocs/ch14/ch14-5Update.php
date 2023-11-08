<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch14-5Update.php</title>
<script src="jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
   $("form").submit( function() {
      var form = $(this);
      var $id = $('#id').val();
      // 使用HTTP POST方法送出Ajax請求
      $.ajax({
        type: 'POST',
        url:  'http://localhost:8080/ch14/restAPI/book/update/' + $id,
        data: form.serialize(), 
        success: function(data) {
          // 顯示傳回的資料
          $("#result").empty();
          $.each(data["output"], function (key, val) {
            $("#result").append("<b>" + key + ":" + val + "</b>");
          });
        } 
      });
      return false;
   });
});
</script>
</head>
<body>
<div>
   <label for="name">書號:</label>
   <input type="text" name="id" id="id" value="P100"/>
</div><hr/>
<form action="">
<table border="1">
<tr><td>書名:</td>
   <td><input type="text" name="title" id="title" size="20" value="Python程式設計2"/></td>
</tr><tr><td>作者:</td>
   <td><input type="text" name="author" id="author" size="12" value="陳允傑"/></td>
</tr><tr><td>書價:</td>
   <td><input type="text" name="price" id="price" size="10" value="650"/>
	 </td></tr>
</table><hr/>
<input type="submit" value="更新圖書"/>
</form><br/>
<div id="result"></div>
</div>
</body>
</html>