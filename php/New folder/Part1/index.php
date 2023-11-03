<!-- <?php
// $x = 5 + /*this is comment */ +10;
// $txt = "W3Schools.com";
// $txt2 = 'I love';
// echo "$txt2  $txt  !";
// // echo $x;
// // echo "My first PHP script!";

// ?>

// <?php
// $x = 5;
// $y = 4;
// echo $x + $y;
// ?> -->

<!-- PHP Variables Scope -->

<!-- /* <?php
// $x = 10 ;//Global variable
// function myfunction(){
//   //Global variable can't access inside a function
//   echo " <p>Variable x inside function is: $x </p>";
// }
// myfunction();
// echo " <p>Variable x outside function is: $x </p>";
?> */ -->

<?php
function myfunction(){
  $x = 10 ;//local variable;
  echo " <p>Variable x inside function is: $x </p>";
}
myfunction();
//local variable can't access outside a function
echo " <p>Variable x outside function is: $x </p>";
?>