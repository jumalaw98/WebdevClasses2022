<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/dashstyle.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body class="bg-primary">
      <div class="container p-4">
          <div class="card">
              <div class="card-body">
                 <div class="row">
                     <div class="col-lg-5">
                         image here
                     </div>
                     <div class="col-lg-7">
                         <div class="text-center">
                             <h4 class="grey">Create an Account</h4>
                         </div>
                         <form action="handle_registration.php" method="post">
                             <div class="row mb-3">
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="text" name="firstName" placeholder="First Name" required>
                                 </div>
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="text" name="secondName" placeholder="Second Name" required>
                                 </div>

                             </div>
                             <div class="row mb-3">
                                 <div>
                                 <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address" required>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="password" name="password" placeholder="Password" required>
                                 </div>
                                 <div class="col-sm-6">
                                     <input class="form-control rounded-pill" type="password" name="confirmPass" placeholder="Confirm Password" required>
                                 </div>
                             </div>

                             <div class="row mb-3">
                                 <input type="submit" name="register" class= "rounded-pill btn btn-primary" value="Register">
                             </div>
                             <hr>
                             <div class="row mb-3">
                                 <a href="" class="rounded-pill btn btn-danger"> <i class="fa fa-google"></i>  Register with Google </a>
                             </div>

                         </form>
                         <hr>
                         <div class="text-center">
                             <a class="small" href="">Forgot password?</a>
                         </div>
                         <div class="text-center">
                             <a class="small" href="login.php">Already have an account? Login</a>
                         </div>




                     </div>

                 </div>
              </div>
          </div>


      </div>


</body>
</html>