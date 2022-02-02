<?php

// Declaring Variables
print "<h4> Introduction to PHP </h4>";

$first_name =  "Meg";
$first_name3 =  "Meg";
$firstName= "Jane";
$second_name = "Nyakeno";
$age = 10;

//1. All variables start with a $ followed by name]
//2. must start with a letter a-2 or _
//3. Cannot start with a number
//4. alapha a-z, numeric 0-9 , _
//5.No spaces allowed


echo "My name is $firstName";

echo "<br>";
echo "My second name is $second_name";

echo "<br>";

// Constant

define("GOOGLE","https://www.google.com/");
define("AGE",12);

echo "Search something here ".GOOGLE;
echo "<br>";

echo  "Am ".AGE;

echo "<br>";


print "<h3>DATA TYPES </h3>";

// integers
$a = 123;
var_dump($a);

echo "<br>";
$b = -7694903;
var_dump($b);

echo "<br>";

// Floats & Doubles

$c=1.90448;
var_dump($c);

echo "<br>";

$d = 10.2e3;
var_dump($d);

echo "<br>";

//Boolean
$e = true;
var_dump($e);

echo "<br>";
$f=false;

var_dump($f);

echo "<br>";
//array

$colors = array("red","green","yellow");
var_dump($colors);

echo "<br>";

$g= "Lucy";

var_dump($g);
echo "<br>";

$astring= "the quick brown fox jumps over the lazy dog";

// counting the length
echo strlen($astring);

echo "<br>";
// word count in a string
echo  str_word_count($astring);

echo "<br>";

echo strrev($astring);