<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST METHOD</title>
</head>
<body>
<form action="handleform.php" method="post">
    <div>
        <label>First Name </label>
        <input type="text" name="firstName" required>
    </div>
    <div>
        <label>Second Name </label>
        <input type="text" name="secondName" required>
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="emailAddress" required>
    </div>
    <div>
        <label>Phone Number </label>
        <input type="text" name="phoneNumber" required>
    </div>

    <input type="submit" name="submits" value="SUBMIT">


</form>

</body>
</html>
