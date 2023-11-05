<?php
$cars = array('Volvo', "BMW", "Toyoto");
$carsLength = count($cars);
echo("I love ". $cars[0]. "," . $cars[1]. "," . $cars[2] . "<br>");
for($i = 0; $i< $carsLength; $i++){
echo($cars[$i]);
echo("<br>");
}
?>

<?php
 $age = array("Mehedi"=>"23", "Ben"=>"30","Forhad" =>"22", "Ahosan" =>"23");
 echo("Mehedi is ". $age["Mehedi"] . " years old ." . "<br>");

 foreach($age as $x=>$value){
  echo $x ." is " . $value . " years old .";
  echo "<br>";
 }
?>

<?php
$cars = array(
  array("Volvo" ,10 , 25),
  array("BMW" ,15 , 30),
  array("Land Rover" ,5 , 20)
);
$carsLength = count($cars);

echo $cars[0][0] . ": In Stock :" . $cars[0][1] . ", Sold :" . $cars[0][2] . "<br>";
// echo $cars[1][0] . ": In Stock :" . $cars[1][1] . ", Sold :" . $cars[1][2]. "<br>";
// echo $cars[2][0] . ": In Stock :" . $cars[2][1] . ", Sold :" . $cars[2][2]. "<br>";

for($i =0; $i< 3; $i++){
echo "<p><b>Row number $i</b></p>";
echo("<ul>");
for($j = 0; $j<3; $j++){
   echo "<li>".$cars[$i][$j]."</li>";
  
}
echo("</ul>");
}

?>