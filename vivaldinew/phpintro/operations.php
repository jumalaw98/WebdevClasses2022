<?php

$a=12; $b=13; $c=45; $d=89;

echo "<h4>Arithmetic Operators</h4>";

$sum = $a+$b;

echo "The sum of $a and $b is $sum <br>";

$diff= $d-$c;

echo "The difference of $d and $c is $diff <br>";

$prod = $a*$c;

echo "The product of $a and $c is $prod <br>";

$quo = $c/$a;

echo "The quotient of $c and $a is $quo <br>";

$rem =$b%$a;

echo "The remainder when $b divides $a is $rem <br>";

echo "<hr>";



echo "<h4>Assignment Operators</h4>";

$num1=12; $num2=40;

echo "value of num1 is $num1 <br>";

$num1+=$num2;

echo "value of num1 is $num1 <br>";

$num1-=$num2;

echo "value of num1 is $num1 <br>";

$num1*=$num2;

echo "value of num1 is $num1 <br>";

echo "<hr>";
echo "<h4>Comparison Operators</h4>";


$age = 13 ;

if ($age>18){
    echo "You are an adult<br>";
}else{
    echo "You are a child<br>";
}

$x=16; $y=16;

if ($a == $num1){
    print ("its true <br>");
}else{
    print ("not true <br>");
}

if ($x === $y){
    print ("its true <br>");
}else{
    print ("not true <br>");
}

if ($a != $num1){
    print ("its true <br>");
}else{
    print ("not true <br>");
}


if ($age>=20 and $age<100){
    echo "You are an adult";
}elseif ($age>=12 and $age<20){
    echo "You are a Teenager";
}elseif ($age>0 and $age<12){
    echo "You are a Child";
}else{
    echo "No such age";
}

// write a program in php that grades students

// 80-100 -> A , Marks between 0-100.



// write code to calculate the gross salary;


/*
$salary = 100000;

BS.<= 10000, Medical Allowance -20%, House Allowance =50% , Tax - 10%
BS.<=20000, Medical Allowance -25%, House Allowance =60% , Tax - 10%
BS.<=30000, Medical Allowance -30%, House Allowance =65% , Tax - 12%
BS.>40000, Medical Allowance -40%%, House Allowance =70% , Tax - 12%
*/



echo "<h4>The Switch Statement</h4>";

$day = "Thur";


switch ($day) {

    case "Mon":
        echo "Today is Monday, Read a book";
        break;
    case "Tue":
        echo "Today is Tuesday, Learn Javascript";
        break;
    case "Wed":
        echo "Leo is Wednesday,Code PHP Files";
        break;
    case "Thur":
        echo "Its Thursday, Go Swimming";
        break;
    default:
        echo "Rest its the weekend";
        break;
}

echo "<hr>";

echo "<h4>Loops in php</h4>";
echo "<h4>While in php</h4>";

$a = 1;

while ($a<10) {
    echo "The value of a is $a <br>";
    $a++;
}
echo "<hr>";
echo "<h4> Do While in php</h4>";


$b=1;

do{
    echo "The value of b is $b <br>";
    $b++;
}while($b <= 5);
echo "<hr>";
echo "<h4> The For Loop in php</h4>";



for ($i=10; $i>1;$i--){

    echo "The value of i is  $i <br>";

}


## using php , print even numbers between 0-50;
## using php , print odd numbers between 0-50

#print this pattern using a loop
/*


*
**
***
****
*****
******



 */