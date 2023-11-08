<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-5a.php</title>
<?php
function welcome(?string $name) {
    echo $name;
}
?>
</head>
<body>
<?php
welcome("陳會安");
welcome(null);
// welcome();
?>
</body>
</html>