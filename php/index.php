<?php
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
?>
<?php

date_default_timezone_set("Asia/Dhaka");
echo("Today is :" . date('d/m/Y'). "<br>");
echo("Today is :" . date('d-m-y'). "<br>");
echo("Today is :" . date('d.m.y'). "<br>");
echo("Today is :" . date('l'). "<br>");
echo("The time is :" . date('h:m:sa'). "<br>");

?>
 //Automatic Copyright Year -->
&copy;2010-
<?php
echo date('Y')
?>

<?php
$d= strtotime('14 April 2015 11:53am');
$x= strtotime(' tomorrow ');
$y= strtotime(' next Saturday ');
$z= strtotime(' +5 month ');
echo("Create time is ". date(" Y-m-d h:m:sa ", $d). "<br>");
echo("Create time is ". date("Y-m-d h:m:sa", $x). "<br>");
echo("Create time is ". date("Y-m-d h:m:sa", $y). "<br>");
echo("Create time is ". date("Y-m-d h:m:sa", $z). "<br>");
?>
<?php
$startdate = strtotime('sunday');
$endDay = strtotime("+5 week",$startdate );
while($startdate< $endDay){
  echo( date("M d", $startdate). "<br>");
  $startdate = strtotime('+1 week', $startdate);
}
?>

<?php
include footer.php;
?>