<?php
include "connect.php";

if (isset($_POST["submit"])){

    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];

    $sql = " INSERT INTO `detail`( `firstName`, `secondName`) VALUES ('$firstName', '$secondName')";

    $result = mysqli_query($link,$sql);

    if ($result){
        echo "YOUR RECORD HAS BEEN SUCCESSFULLY ADDED";
        header("location:select.php");
    }else{
        echo "ERROR ADDING A RECORD $sql".mysqli_error($link);
    }




} else{

    echo "<h3>Please fill this form </h3>";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST METHOD</title>
</head>
<body>

<form action="postmethod.php" method="post">
    <div>
        <label> First Name</label>
        <input type="text" name="firstName">

    </div>
    <div>
        <label> Second Name</label>
        <input type="text" name="secondName">

    </div>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

