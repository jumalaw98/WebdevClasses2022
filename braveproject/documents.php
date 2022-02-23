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
        <h4 class="grey">View Participant</h4>
    </div>

    <div class="col-6">
        <a href="generatepdf.php"  class="btn btn-primary float-end">
            Download Report
        </a>
    </div>

</div>

<?php

include "config.php";

// select query

$sql = "SELECT `id`, `fullName`, `phoneNumber`, `location`, `gender`, `photo`  FROM `students`";

$result = mysqli_query($link,$sql);

if ($result){
    $data = mysqli_num_rows($result);

    if ($data>0){
       echo "<table class='table table-bordered table-striped bg-white'>";
       echo "<tr>";
       echo "<th># </th>";
       echo "<th>Full Name </th>";
       echo "<th>Phone Number </th>";
       echo "<th>Location </th>";
       echo "<th>Gender </th>";
       echo "<th>Actions</th>";
       echo "</tr>";

       while ($row = mysqli_fetch_array($result)){
           echo "<tr>";
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['fullName']."</td>";
           echo "<td>".$row['phoneNumber']."</td>";
           echo "<td>".$row['location']."</td>";
           echo "<td>".$row['gender']."</td>";
           echo "<td>
              <a href='delete.php?id=".$row['id']." ' class='m-2' ><i class='fa fa-trash'></i></a> 
              <a href='update.php?id=".$row['id']."' class='m-2' ><i class='fa fa-pencil'></i></a>  
              <a href='view.php?id=".$row['id']." ' class='m-2' ><i class='fa fa-eye'></i></a>  
                 </td>";
           echo "<tr>";
       }

       echo "</table>";





    }else{
        echo "<em class='alert alert-info'>No data found</em>";
    }






}else{
    echo "<p class='alert alert-warning'>error executing your query $sql</p>".mysqli_error($link);
}






// THE PDF DOWNLOAD















?>


