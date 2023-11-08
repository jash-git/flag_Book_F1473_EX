<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch6-2-5c.php</title>
<?php
function welcome(?string $name): ?string {
    if (is_null($name)) {
        return null;
    } else {
        return "Welcome $name!<br/>";
    }        
}
?>
</head>
<body>
<?php
echo welcome("Joe Chen");
echo welcome(null);
?>
</body>
</html>