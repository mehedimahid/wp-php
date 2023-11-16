
<?php include 'footer.php';
// echo "I have a $color $car.";
?>

<?php
  // $myfile = fopen(BPR_PATH . 'php/webdictionary.txt', "r") or die("Unable to open file!");
  // echo fread($myfile,filesize(BPR_PATH . 'php/webdictionary.txt'));
  // fclose($myfile);
?>
<?php
  // echo readfile(BPR_PATH . 'php/webdictionary.txt');
?>

<?php
$myfile = fopen(BPR_PATH . 'php/webdictionary.txt', "r") or die('Unable to open file!');
// echo fgets($myfile); //first line 
// echo fgets($myfile); //second line
// echo fgets($myfile); //third line
echo fgetc($myfile);//first single character

fclose($myfile)
?>
<?php
  $createFile = fopen(BPR_PATH . 'php/createFile.txt', "w") or die('Unable to create  file');
  $txt1 = "Jhone Dao\n";
  $txt2 = "Jhon\n";
  $txt3 = "Mehedi Hasan\n";
  fwrite($createFile, $txt1);
  fwrite($createFile, $txt2);
  fwrite($createFile, $txt3);
  fclose($createFile)
?>

<?php
  $myfile = fopen(BPR_PATH . 'php/createFile.txt', "a") or die('Unable to open file');
  $txt = "Sakib\n";
  fwrite($myfile, $txt);
  $txt = "Tamim\n";
  fwrite($myfile, $txt);
  fclose($myfile)

?>