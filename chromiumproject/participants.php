<?php
include "header.php";
?>

<div class="row m-2 p-2 ">

    <div class="col-4 ">
        <p class="h3 grey"> Participants</p>
    </div>

    <div class="col-8">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Student
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center modal-title" id="exampleModalLabel">ADD  STUDENT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="" method="post">
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Full Name</label>
                                    <input class="form-control" type="text" name="fullName" placeholder="">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Email Address</label>
                                    <input class="form-control" type="text" name="emailAddress">
                                </div>

                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <label class="form-label grey">Date of Birth</label>
                                    <input class="form-control" type="date" name="dob" >
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-md-12">
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



                            </div>





                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>


