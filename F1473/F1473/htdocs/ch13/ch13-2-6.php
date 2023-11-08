<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch13-2-6.php</title>
<?php
// 使用匿名類別建立物件
$cal = new class(10) {
    private $opd1;
    // 建構子
    function __construct($opd1){
        $this->opd1 = $opd1;
    }
    // 成員方法
    function multiply($opd2){
        return $this->opd1 * $opd2;
    }
};
?>
</head>
<body>
<?php
$result = $cal->multiply(15);
echo "10 * 15 = " . $result;
?>
</body>
</html>
