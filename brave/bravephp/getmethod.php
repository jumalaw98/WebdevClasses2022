<?php

if (isset($_GET["submit"])){

    $firstName = $_GET["firstName"];
    $secondName =$_GET["secondName"];

    echo "The first name picked is $firstName <br>";
    echo "The second name picked is $secondName <br>";


}else{
    echo "<h3>Kindly fill this form</h3>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET METHOD</title>
</head>
<body>

<form action="getmethod.php" method="get">
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
