<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch14-5List.php</title>
<script src="jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
   $("form").submit( function() {
      // 取得表單欄位值
      var $id = $('#id').val();
      // 使用HTTP GET方法送出Ajax請求
      $.ajax({
        type: 'GET',
        url:  'http://localhost:8080/ch14/restAPI/book/list/' + $id,
        success: function(data) {
          // 顯示傳回的資料
          $("#result").empty();
          $.each(data["output"], function (key, val) {
               var str = '<li id="' + key + '">' +
                   val.bookid + ' : ' + val.booktitle + ' : ' +
                   val.bookauthor + ' : ' + val.bookprice + '</li>';
               $("#result").append(str);
          });
        } 
      });
      return false;
   });
});
</script>
</head>
<body>
<ul id="books"></ul>    
<form action="">
    <div>
        <label for="name">書號:</label>
        <input type="text" name="id" id="id" value="P703"/>
    </div><br/>
    <input type="submit" value="查詢圖書">  
</form><br/>
<ul id="result"></ul>
</div>
</body>
</html>