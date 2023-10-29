<?php
// $x= 321;
// $y = 32.1;
// var_dump(is_int($x));
// echo "<br>";
// var_dump(is_int($y));
?>
<!-- echo <br> -->

<!-- //PHP Constant -->

<?php
// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;
// echo "<br>";

// // echo greeting;// return warning bcs this variable is case sensitive
// function myTest(){
// echo GREETING;
// }
// myTest()
?>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
$z = array("e" => "White", "f" =>"Black" );

print_r($x + $y + $z); // union of $x and $y;
echo "<br>";
var_dump($x == $y);//	Returns true if $x and $y have the same key/value pairs
echo "<br>";

var_dump($x != $y);//Returns true if $x is not equal to $y
?>  

<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user2 = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user2)) ? "anonymous" : "logged in";
?>  