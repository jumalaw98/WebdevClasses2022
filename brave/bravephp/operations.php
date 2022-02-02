<?php
echo "<h3>Arithmetic Operators</h3>";

$num1 = 12;
$num2 = 45;

$sum = $num1+$num2 ;
$diff = $num1-$num2;
$prod = $num1*$num2;
$div =  $num2/$num1;
$mod =  $num2%$num1;

echo "the sum of $num1 & $num2 is $sum";
echo "<br>";
echo "the diff of $num1 & $num2 is $diff";
echo "<br>";
echo "the product  of $num1 & $num2 is $prod";
echo "<br>";
echo "the div of $num1 & $num2 is $div";
echo "<br>";
echo "the mod of $num1 & $num2 is $mod";


echo "<hr>";

echo "<h3>Assignment Operators</h3>";

$a = 10;

echo "a is $a";
echo "<br>";

$a +=10;

echo "a is $a";
echo "<br>";

$a*=5;

echo "a is $a";
echo "<br>";

$a-=5;
echo "a is $a";
echo "<br>";

$a/=10;

echo "a is $a";
echo "<br>";

$a%=2;

echo "a is $a";
echo "<br>";

echo "<h3>Increment & Decrement Operators</h3>";


$b = 10;

$b++;
echo "b is $b";
echo "<br>";

++$b;

echo "b is $b";
echo "<br>";


$b--;

echo "b is $b";
echo "<br>";

--$b;
echo "b is $b";
echo "<br>";

echo "<hr>";

echo "<h3>Comparison Operators</h3>";

$age = -18;


if ($age>=18){
    echo "You are an adult";
}else {

    echo "You are a child";
}
echo  "<hr>";



if ($age>18){
    echo "You are an adult";
}elseif ($age>12){
    echo "you are a teenager";
} else{
    echo "You are a child";
}

echo "<hr>";


if ($age>18 and $age<100){
    echo "You are an adult";
}elseif ($age>12 and $age<=18){
    echo "you are a teenager";
} elseif($age>0 and $age<=12) {
    echo "You are a child";
}else{
    echo "No such age";
}


$data = 100;

$data > 100 and $data <500;

$data > 100 or $data >500;

$data > 100 xor $data<500;

// Create a simple php code if else statement that grades students

$marks =67;
