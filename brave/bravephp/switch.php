<?php

echo "<h4>The Switch Statement</h4>";

 $day ="Wed";

 switch ($day){

     case "Mon":
         echo "Today is Monday, Learn PHP";
         break;
     case "Tue":
         echo "Tuesday, get some JS done";
         break;
     case "Wed":
         echo "Wednesday, Kotlin for Android";
         break;
     case "Thur":
         echo "Thursday, front end Boostrap";
         break;
     default:
         echo "The Weekend, take a break";

 }

echo "<h4>LOOPS IN PHP</h4>";

 $a = 1;

 while ($a <=10){
     $a++;
     echo "The number is $a <br>";
 }

echo "<hr>";

$b = 0;
 do{
     $b++;
     echo "The value of b is $b <br>";
 } while($b<12);

echo "<hr>";

 for ($c=1; $c<=10; $c++){
     echo "The value of c is $c <br>";
 }

 // using a for loop , display even numbers between 0-50
 // using a  loop , display odd numbers between 0-50
 // using a loop, display the following pattern
/*


*
**
***
****
*****
*****
******
*/


for ($star=1; $star<=8;$star++){
    for ($pat=1; $pat<$star; $pat++){
        echo "*";
    }
    echo "<br>";

}



