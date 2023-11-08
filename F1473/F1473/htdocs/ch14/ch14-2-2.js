$(document).ready(function() {
   $("form").submit( function() {
      // 取得表單欄位值
      var typeVal = $('#type').val();
      var nameVal = $('#name').val();
      // 使用HTTP GET方法送出Ajax請求
      $.ajax({
        type: 'GET',
        url:  'getDateTime.php',
        data: { name : nameVal,
                type : typeVal }, 
        success: function(data) {
          // 顯示傳回的資料
          $('#date').html($(data).find('date').text());
          $('#myname').html($(data).find('name').text());
        } 
      });
      return false;
   });
   $('a.tabs').click(function() {
      $.ajax({
        type: 'GET',
        url:  'postDateTime.php',
        error: function() {
           alert("載入網頁錯誤!");
        },        
        success: function(data) {
           alert("載入網頁成功!");
        } 
      });    
      return false;
   });
});