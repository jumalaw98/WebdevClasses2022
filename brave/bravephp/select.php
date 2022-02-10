<?php

include "connect.php";

#query
$sql = " SELECT * FROM `detail` ";
#execution of query
$result = mysqli_query($link,$sql);

#check execution
if ($result){
    #data in the database
    $data = mysqli_num_rows($result);

     if ($data>0){
         echo "<h3>Table Details</h3>";

            while ($row = mysqli_fetch_array($result)){

                echo   " " . $id = $row['id'];
                echo  " ".  $firstName = $row['firstName'];
                echo  " ". $secondName = $row['secondName'];
                echo    " <a href='delete.php?id=".$row['id']."'><button> Delete</button> </a>";
                echo    " <a href='update.php?id=".$row['id']."'><button> Update</button> </a>";


                echo "<hr>";

            }


     }else{
         echo "No data found on the database";
     }





}else{
    echo "Error executing query $sql".mysqli_error($link);
}
