<?php
$data = array('陳會安', '江小魚', '陳允傑'); 
$json_string = json_encode($data);
$arrJson = json_decode($json_string);
echo "<pre>";
print_r($arrJson);
echo "</pre>";
?>
