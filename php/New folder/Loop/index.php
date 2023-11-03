<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

<?php
$favCar = 'Ferrari';
switch ($favCar) {
  case 'BMW':
    echo "Your favorite car is BMW";
    break;
  case 'Audi':
    echo "Your favorite car is Audi";
    break;
  case 'Ferrari':
    echo "Your favorite car is Ferrari";
    break;
   case 'Bugatti':
    echo "Your favorite car is Bugatti";
    break;
  
  default:
    echo "Your favorite car is neither BMW, Audi,Ferrari nor Bugatti!";
    break;
}
?>

<?php
 $x = 1;
 while ($x <= 10) {
 echo("the number is: $x  <br>");
 $x++;
 }
?>
<?php
 $x = 1;
 do {
  echo("the number is: $x  <br>");
  $x++;
 } while ($x <= 10);
 
?>

<?php
for($a = 0; $a<= 10; $a++){
  echo("the number is: $a  <br>");
}
?>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x =>$val) {
  echo "$x=> $val<br>";
}
?>

<?php
for ($i=0; $i <10 ; $i++) { 
  if ($i ==5) {
    break;//break hare
  }
  echo("this is a break statement. number $i <br>");
}
?>
<?php
for ($i=0; $i <10 ; $i++) { 
  if ($i ==5) {
    continue;//skip 5 
  }
  echo("this is a continue statement. number $i <br>");
}
?>