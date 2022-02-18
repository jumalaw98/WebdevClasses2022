<?php include "header.php"?>

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

                    <div class="col">
                        <div class="card">
                            <div class="card-body border-left-primary">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="text-primary">EARNINGS</span>
                                         <div class=" h5 grey">KSH. 600,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-dollar fa-2x grey"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body border-left-success">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="text-success mb-2">TASKS</span>
                                    <div class=" h5 grey">54</div>
                                </div>
                                <div class="col">
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-bars fa-2x grey"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card ">
                            <div class="card-body border-left-warning">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="text-warning">REQUESTS</span>
                                        <div class=" h5 grey">30</div>
                                    </div>
                                    <div class="col">
                                        <div class="spinner-border text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-comments fa-2x grey"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>

            <div class="row m-2">

                <div class="col-7">
                    <div class="card">
                        <div class="card-header text-primary">Earnings Plot</div>
                        <div class="card-body">
                            <img src="images/charts.png" alt="Loading" height="380" width="500">
                        </div>
                    </div>
                </div>

                <div class="col-5">
                    <div class="card">
                        <div class="card-header text-primary">Details </div>
                        <div class="card-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            The First Quarter #1
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong>
                                            It is shown by default, until the collapse plugin adds the
                                            appropriate classes that we use to style each element.
                                            These classes control the overall appearance, as well as the
                                            showing and hiding via CSS transitions
                                             <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            The Second Quarter #2
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            The Third Quarter #3
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


            </div>

            <div class="row m-2">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header text-primary bg-white">Projects</div>
                        <div class="card-body">

                            <div class="m-2 p-2">
                                <span class="grey">Server Integration</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                            </div>
                            <div class="m-2 p-2">
                                <span class="grey">Marketing Software</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                            </div>

                            <div class="m-2 p-2">
                                <span class="grey">Database Migration</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                            </div>

                            <div class="m-2 p-2">
                                <span class="grey">Dashboard Design</span>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header text-primary bg-white">Illustrations </div>
                        <div class="card-body">
                            <a href="">
                            <img src="images/details.svg" alt="Loading" width="400" height="280">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="row bg-white p-2">

                <div class="text-center grey">
                    <small>&copy; eMobilis Brave 2022 </small>
                </div>


            </footer>




        </div>



    </div>






</div>




</body>
</html>