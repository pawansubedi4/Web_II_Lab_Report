<?php
// creating variable
$name = "Pawan";               
$age = 20;                     
$height = 5.7;                 
$isStudent = true;
$address = null;             
$subjects = array("PHP", "Java", "Python"); 

echo "<br>Displaying values using echo:<br>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . $isStudent . "<br>";

echo "<br>Displaying values using print:<br>";
print "Name: " . $name . "<br>";
print "Age: " . $age . "<br>";
print "Height: " . $height . "<br>";
print "Is Student: " . $isStudent . "<br>";

echo "<br>Array contents using print_r():<br>";
print_r($subjects);
echo "<br>Array contents using var_dump():<br>";
var_dump($subjects);

echo "<br><br>Checking Data Types:<br>";
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($height) . "<br>";
echo gettype($isStudent) . "<br>";
echo gettype($subjects) . "<br>";
echo gettype($address);
?>