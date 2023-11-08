<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch14-2-2.php</title>
<link rel="stylesheet" href="ch14-2-2.css">
<script src="jquery-3.6.0.min.js"></script>
<script src="ch14-2-2.js"></script>
</head>
<body>
<form action="">
    <div>
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" value="陳會安"/>
    </div><br/>
    <div>
        <select id="type" name="type">
          <option value="date" selected>日期</option>
          <option value="time">時間</option>
        </select>
    </div><br/>  
    <input type="submit" value="送出"/>     
</form><br/>
<div class="box">
    <div id="date"></div><br/>
    <div id="myname"></div>
</div><br/>
<a href="" class="tabs">載入網頁</a><br/>
</body>
</html>