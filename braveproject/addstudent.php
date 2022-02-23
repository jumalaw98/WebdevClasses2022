<?php
//check if user is logged in.
session_start();

if (!isset($_SESSION["loggedin"]) or  $_SESSION["loggedin"]!==true){
    header("location:login.php");
    exit();
}



include "header.php"


?>

            <div class="row m-2">

                <div class="col-6">
                    <h4 class="grey">Add Participant</h4>
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
                 <div class="card">
                     <div class="card-body">
                         <form action="handle_addstudent.php" method="post" enctype="multipart/form-data">
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

                                 <div class="row p-2">
                                     <div class="col-md-12">
                                         <label class="form-label grey">Your Photo</label>
                                         <input class="form-control" type="file" name="photo">

                                     </div>
                                 </div>
                                 <div class="row p-2">
                                     <div class="col-md-12">
                                         <label class="form-label grey">Your CV</label>
                                         <input class="form-control" type="file" name="cv">

                                     </div>

                                 </div>


                                 <div class="row m-2 p-2">
                                     <div class="text-center">
                                         <input type="submit" name="submit" class="col-6 btn btn-danger" value="SUBMIT">
                                     </div>

                                 </div>


                             </div>





                         </form>
                     </div>
                 </div>







             </div>










        </div>


    </div>

</div>

</body>
</html>