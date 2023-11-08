<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>appa-1-2.php</title>
<?php
function show($stamps) {
   $d = getdate($stamps);    
   echo $d["month"]."/".$d["mday"]."/".$d["year"]. " ";
   echo $d["hours"].":".$d["minutes"].":".$d["seconds"];
}
?>
</head>
<body>
<?php
$date = date("l F j Y h:i:s A", time());
echo $date . "<br/>";
$date = mktime(0, 0 ,0 ,12 ,1 , 2021);
echo show($date)."<br/>";
echo show(strtotime("+10 days",$date))."<br/>";
echo show(strtotime("-3 days",$date))."<br/>";
echo show(strtotime("+4 months +5 days",$date))."<br/>";
echo show(strtotime
  ("+1 week 2 days 4 hours 2 seconds",$date))."<hr/>";
echo show(strtotime("now"))."<br/>";
echo show(strtotime("next Thursday")). "<br/>";
echo show(strtotime("last Monday")). "<br/>";
?>
</body>
</html>