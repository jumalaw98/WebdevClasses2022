<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD STUDENT</title>
    <link rel="stylesheet" href="css/dashstyles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/js/bootstrap.min.js"> </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 bg-primary ">
            <ul class="nav flex-column">
                <li class="nav-item navstyles">
                    <i class="fa fa-ravelry fa-3x text-white"></i>
                    <span class="h4 text-white"> BRAVE ADMIN </span>

                </li>

                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-dashboard text-white "> </i>
                        <span class="text-white">  Dashboard </span>
                    </a>
                </li>

                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="addstudent.php">
                        <i class="fa fa-users text-white"> </i>
                        <span class="text-white"> Participants </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-cogs text-white "> </i>
                        <span class="text-white">  Components </span>
                    </a>
                </li>
                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-file text-white"> </i>
                        <span class="text-white"> Documents </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-line-chart text-white"> </i>
                        <span class="text-white">  Charts </span>
                    </a>
                </li>
                <hr>

                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-wrench text-white"> </i>
                        <span class="text-white"> Settings </span>
                    </a>
                </li>



            </ul>



        </div>
        <div class="col-9 bg-light">

            <div class="row bg-white">

                <div class="col-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-6 form-control me-2" type="search" placeholder="Search here ..." aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-bell fa-lg "></i>
                                            <span class="badge rounded-pill bg-danger">5+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-envelope fa-lg"></i>
                                            <span class="badge rounded-pill bg-danger">35+</span>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Jane Kamau |
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <img src="images/female.svg" alt="" class="rounded-circle float-end" width="50" height="50">
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>


            </div>

            <div class="row m-2">
                <div class="col-6">
                    <h3 class="grey">Dashboard</h3>
                </div>

                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        View Report
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">BRAVE ADMIN REPORT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-hover table-bordered m-3" >
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Grade</th>
                                        </tr>
                                        <tr>
                                            <td>Judy Kamau</td>
                                            <td>Female</td>
                                            <td>A</td>

                                        </tr>

                                        <tr>
                                            <td>Matthew Juma</td>
                                            <td>Female</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Lucy Heels</td>
                                            <td>Female</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <td>Mark Zulu</td>
                                            <td>Male</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <td>Hellena Kui</td>
                                            <td>Female</td>
                                            <td>B</td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

             <div class="row m-2">
                 <form action="handle_addstudent.php" method="post">
                     <div class="row m-2 p-2">
                         <div class="col-md-6">
                             <label class="form-label grey">Full Name</label>
                             <input class="form-control" type="text" name="fullName" placeholder="">
                         </div>
                         <div class="col-md-6">
                             <label class="form-label grey">Email Adress</label>
                             <input class="form-control" type="text" name="emailAddress">
                         </div>

                     </div>
                     <div class="row m-2 p-2">
                         <div class="col-md-6">
                             <label class="form-label grey">Phone Number</label>
                             <input class="form-control" type="text" name="phoneNumber">
                         </div>
                         <div class="col-md-6">
                             <label class="form-label grey">Address Location</label>
                             <input class="form-control" type="text" name="location" >
                         </div>

                     </div>
                     <div class="row m-2 p-2">
                         <div class="col-md-6">
                             <label class="form-label grey">Date of Birth</label>
                             <input class="form-control" type="date" name="dob" >
                         </div>
                         <div class="col-md-6">
                             <label class="form-label grey">Gender</label>
                             <select class="form-control" name="gender">
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                                 <option value="other">Other</option>
                             </select>
                         </div>

                         <div class="row m-2 p-2">
                             <div class="col-md-6">
                                 <label class="form-label grey">Your Photo</label>
                                 <input class="form-control" type="file" name="photo">

                             </div>
                             <div class="col-md-6">
                                 <label class="form-label grey">Your CV</label>
                                 <input class="form-control" type="file" name="cv">

                             </div>

                         </div>


                         <div class="row m-2 p-2">
                             <div class="text-center">
                                 <input type="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
                             </div>

                         </div>


                     </div>





                 </form>






             </div>










        </div>


    </div>

</div>

</body>
</html>