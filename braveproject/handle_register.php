<?php

include "config.php";

if (isset($_POST["register"])) {

    //pick values
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];


    // validation

    //password length

    if (strlen($password) < 6) {
        $passwordError = "Password must have 6 characters";
        echo "$passwordError";
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }

    // Matching passwords
    if ($confirmPassword != $password) {
        $conPassError = "Passwords do not match";
        echo $confirmPassword;
    }


    if (empty($passwordError) and empty($conPassError)) {


        $sql = "INSERT INTO `users`( `firstName`, `secondName`, `emailAddress`, `password`)
              VALUES ('$firstName','$secondName','$emailAddress','$storePass')";


        $result = mysqli_query($link,$sql);

        if ($result){
            echo "You have been Registered";
            header("location:login.php");
        }else{
            echo "error executing this query $sql".mysqli_error($link);
        }




    }

     // close my connection
    mysqli_close($link);
}