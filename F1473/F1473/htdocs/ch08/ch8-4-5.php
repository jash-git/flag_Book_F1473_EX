<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-4-5.php</title>
</head>
<?php 
$error = "";   $msg = ""; // 初始變數值
$name = "";  // 保留的欄位值
$username = "";
$showform = true;  // true顯示表單
// 檢查是否是表單送回
if ( isset($_GET["Reg"]) ) {
    // 取得表單欄位值
    $name = $_GET["Name"];
    $username = $_GET["UserName"];
    $pass1 = $_GET["Pass1"];
    $pass2 = $_GET["Pass2"];
    // 檢查帳號欄位是否有輸入資料
    if  (empty($username)) {
         // 欄位沒填
         $error = "帳號欄位空白<br/>";
    }
    else {
        if  (empty($pass1)) {
           // 欄位沒填
           $error = "密碼欄位空白<br/>";
        }
        else {
           // 檢查兩次密碼是否相同
           if ($pass1 != $pass2) {
              // 密碼錯誤
              $error = "密碼輸入不相同<br/>";
           } else { 
              // 表單處理, 顯示欄位輸入的資料
              $showform = false;
              $msg = "姓名: ".$name."<br/>";
              $msg .= "帳號: ".$username."<br/>";
              $msg .= "密碼: ".$pass1."<br/>";
           }
        }   
    }
}
?>
</head>
<body>
<?php if ( $showform ) { // 顯示網頁表單
?>
<div style="color:red"><?php echo $error ?></div>
<form action="ch8-4-5.php" method="get">
姓名: <input type="text" name="Name" size ="10" 
             value="<?php echo $name ?>"/><br/>
帳號: <input type="text" name="UserName" size="10"
             value="<?php echo $username ?>"/><br/>
請輸入密碼: <input type="password" 
                   name="Pass1" size="10"/><br/>
再輸一次密碼: <input type="password" 
                   name="Pass2" size="10"/><br/><br/>
<input type="submit" name="Reg" value="註冊使用者"/>
</form>
<?php 
} else
   echo $msg;  // 顯示表單處理結果
?>
</body>
</html>