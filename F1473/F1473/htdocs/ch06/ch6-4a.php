<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-4a.php</title>
</head>
<body>
<?php
function callFunc1(Closure $closure) {
    $closure();
}
function callFunc2(Callable $callback) {
    $callback();
}
// 匿名函數
$hello = function() {
    echo "Hello, World!<br/>";
};
// 一般函數
function hi() {
    echo "Hi, World!<br/>";
}
// callFunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);
?>
</body>
</html>