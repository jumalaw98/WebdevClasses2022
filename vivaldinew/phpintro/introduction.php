<?php

echo "Welcome to php class";

// Hypertext Preproccesor | Personal Home Page
// Open source
// Scripting Language
//

// Wordpress |  Facebook

// Create pages | link HTML<CSS<JS<BS
// CRUD |
// Data collection
// Cookies & Sessions
// Authentication
// Encrytpter

//PHP RULES

/*
 1. Case Sensitive
 2. Every statement must end with a semicolon
 3.


 */


// Variable  are used to store data

$username = "Francis Atwoli";

$USERNAME = "Jane Kamau";

$userName ="Kimani John";

$_age = 12;
$age1=12;
$age2=15;

/*
 1. Start with a $
 2. followed by a letter or _
 3. you cannot begin a variable with a number
 4. Variables do not have spaces.

 */

echo "<hr>";

echo "The clients name is $username";
echo "<br>";
echo "The clients name is $USERNAME";
echo "<br>";


define("WEB_URL","http://localhost/dashboard/");
define("PROFIT",0.3);



echo "This is the link to our server dashboard ".WEB_URL;
echo "<br>";

$payment = 100000*PROFIT;

echo  "Your payment is $payment";


print "<br>";

print "We have printed this item using print()";


print "<hr>";
// DATA TYPES
$a = "This is  a String ";
$b ="A";


var_dump($a);
print "<br>";
var_dump($b);

// Integers - no decimal place

$c = 1245647748;
$d = -12;

print "<br>";
var_dump($c);
print "<br>";
var_dump($d);

//Float  - has a decimal place


$e= 34.76;
$f= -89.093234;



print "<br>";
var_dump($e);
print "<br>";
var_dump($f);


$g = true;
$h=  false;

print "<br>";
var_dump($g);
print "<br>";
var_dump($h);

$y = null;
print "<br>";

var_dump($y);

$colors = array("Red","Blue","Green");
print "<br>";

var_dump($colors);


