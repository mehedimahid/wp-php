<?php
// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.";
// ?>
// <?php
// $txt1 = "Learn PHP";
// $txt2 = "W3Schools.com";
// $x = 5;
// $y = 4;

// print "<h2>" . $txt1 . "</h2>";
// print "Study PHP at " . $txt2 . "<br>";
// print $x + $y;

?>
<?php
$cars  = array('Volvo', 'BMW', 'audi');
// var_dump($cars);
?>
<?php
$txt = 'Hello World';
$text = 'How much length is this sentence';
echo strlen($text);
echo "<br>";
echo str_word_count($text);
echo "<br>";
echo strpos($text,'much');
echo "<br>";
echo str_replace('World', 'Dolly', $txt)
?>