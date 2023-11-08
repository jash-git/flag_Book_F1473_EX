<?php
// 一維索引陣列
$data = array('陳會安', '江小魚', '陳允傑');
$json_string = json_encode($data);
echo $json_string;
echo "<br/>";
$grades = array(78, 55, 89, 93);
echo json_encode($grades);
echo "<br/>";
// 結合陣列
$arr = array("color"=>"Yellow", "name"=> "Joe", 
             "shape"=>"Triangle", 100 );
echo json_encode($arr); 
?>
