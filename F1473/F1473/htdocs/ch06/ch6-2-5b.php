<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-5b.php</title>
<?php
function welcome(?string $name = null) {
    if (is_null($name)) {
        echo "Welcome!<br/>";
    } else {
        echo "Welcome $name!<br/>";
    }        
}
?>
</head>
<body>
<?php
welcome("陳會安");
welcome(null);
welcome();
?>
</body>
</html>