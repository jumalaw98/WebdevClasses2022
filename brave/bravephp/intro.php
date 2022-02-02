<?php

// 1. php script begins with <? and ends with
# 2. every statement MUST end in a semi-colon;

/*
  3. Case sensitive name ,NAME;
*/

// VARIABLE -stores for data

/*
 NAMING CONVENTIONS OF DECLARING VARIABLES
1. begins with a dollar sign follow by name (a-z)
2, Begins with a letter or _
3. Cannot start with a number
4. CannotContainSpaces
*/



$name="";

$first_name = "Meg";
$_second_name ="YUILI";
$otherName ="Njeri";
$CAR ="Benz";
$car ="prado";


print "<h3>Introduction to PHP </h3>";

echo "<br>";

echo "My name is $first_name";

echo "<br>";

echo "I enjoy driving a $car";
echo "<br>";
#PHP CONSTANT


define("PROFIT",200);
define("WEBSITE_URL","https://www.google.com/");


echo "The profit constant for the week is ".PROFIT;
echo "<br>";
echo  "Search Something here ".WEBSITE_URL;

echo "<br>";
//DATA TYPES

#INTEGER

$a = 3453;
var_dump($a);
echo "<br>";
$b = -90;
var_dump($b);

#Floting Point

echo "<br>";
$c = 1.45890;
var_dump($c);

echo "<br>";
$d=10.2e3;
var_dump($d);

echo "<br>";


#BOOLEAN

$e=true;
var_dump($e);

echo "<br>";
$f=false;
var_dump($f);

echo "<br>";

#ARRAYS
$colors = array("Red","Green","Yellow");
var_dump($colors);

echo "<br>";
#STRINGS

$grade = 'A';
var_dump($grade);
echo "<br>";
var_dump($first_name);

echo "<br>";
$sentensi = "The quick brown fox jumped over the lazy dog";

var_dump($sentensi);
echo "<br>";

// length of string
 echo  strlen($sentensi);
echo "<br>";

//number of words
echo str_word_count($sentensi);
echo "<br>";
//reversing a string

echo strrev($sentensi);
echo "<br>";

echo strrev($first_name);
echo "<br>";



