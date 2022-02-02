<?php

echo "<h3>Indexed arrays </h3>";

$languages = array("Ruby","Python","PHP","Java");


$languages[0]="Ruby";
$languages[1]="Python";
$languages[2]="PHP";
$languages[3]="Java";

//sort this arrays
print_r($languages);

echo "<br>";
#acending order
sort($languages);
print_r($languages);
echo "<br>";


#decending order
rsort($languages);
print_r($languages);
echo "<br>";

echo "<hr>";
echo "<h3>Associative arrays </h3>";

$marks = array("Peter"=>45,"John"=>67,"Hellen"=>56);

$marks["Peter"] = 45;
$marks["John"] = 67;
$marks["Hellen"] = 56;


//sort this arrays
print_r($marks);

echo "<br>";
#acending order by value
asort($marks);
print_r($marks);
echo "<br>";


#decending order by value
arsort($marks);
print_r($marks);
echo "<br>";

#acending order by key
ksort($marks);
print_r($marks);
echo "<br>";


#decending order by value
krsort($marks);
print_r($marks);

echo "<hr>";
echo "<h3>Multidimensional arrays </h3>";

$contacts = array(

    array(
        "name"=> "John Doe",
        "email"=>"johndoe@mail.com",
        "pnumber"=> "0765252523"
    ),
    array(
        "name"=> "Mary Jane",
        "email"=>"maryjane@mail.com",
        "pnumber"=> "07655353777"

    ),
    array(
        "name"=> "Lucas Kingsley",
        "email"=>"lucas@mail.com",
        "pnumber"=> "07237477172"
    )

);


echo "Contact for Lucas is".$contacts[2]['pnumber'];
echo "<hr>";


#indexed array
foreach ($languages as $value){
    echo $value."<br>";
}

foreach ($marks as$key =>$value){

    echo $key. " marks is :" .$value. "<br>";

}