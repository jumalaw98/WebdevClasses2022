<?php

if (isset($_POST['submits'])){

    $firstName = $_POST["firstName"];
    $secondName =$_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $phoneNumber = $_POST["phoneNumber"];

    echo "Second Name indicated is $secondName <br> ";
    echo "First Name indicated is $firstName <br>";
    echo "Email Address indicated is $emailAddress <br> ";
    echo "Phone Number indicated is $phoneNumber <br> ";


} else{
    echo "<h3>Fill in this form </h3>";
}



?>