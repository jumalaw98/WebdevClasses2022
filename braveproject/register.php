<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/dashstyles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/js/bootstrap.min.js"> </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>


</head>
<body class="bg-primary">
<div class="container ">
    <div class="card m-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 bg-register-image">
                    image here
                </div>

                 <div class="col-lg-7">
                     <div class="text-center">
                         <h1 class="h4 grey mb-4">Create an Account</h1>
                     </div>
                     <form action="handle_register.php" method="post">
                         <div class="row m-3">
                             <div class="col-sm-6">
                                 <input class="form-control rounded-pill" type="text" name="firstName" placeholder="First Name" required>
                             </div>
                             <div class="col-sm-6">
                                 <div class="col-sm-12">
                                 <input  class="form-control rounded-pill" type="text" name="secondName" placeholder="Second Name" required>
                                 </div>
                             </div>
                         </div>

                         <div class="row m-3">
                             <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address" required>
                         </div>

                         <div class="row m-3">
                             <div class="col-sm-6">
                                 <input class="form-control rounded-pill" type="password" name="password" placeholder="Password" required>
                             </div>
                             <div class="col-sm-6">
                                 <input class="form-control rounded-pill" type="password" name="confirmPassword" placeholder="Confirm Password" required>
                             </div>
                         </div>

                         <div class="row m-3">
                             <input type="submit" class="rounded-pill btn btn-primary" name="register" value="Register">
                         </div>
                         <hr>
                         <div class="row m-3">
                             <a href="" class="rounded-pill  btn btn-danger">Register with Google? </a>
                         </div>
                         <div class="row m-3">
                             <a href="" class="small text-center" >Forgot Password? </a>
                         </div>
                         <div class="row m-3">
                             <a href="login.php" class="text-primary small text-center">Already Have an account? Login</a>
                         </div>


                     </form>



                 </div>

            </div>

        </div>
    </div>



</div>

</body>
</html>