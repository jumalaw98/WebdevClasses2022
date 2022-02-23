<?php

session_start();

// check if user has looged in?

if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true ){

    header("location:index.php");
    exit();
}


include "header.php";
include "config.php";

if (isset($_GET["id"]) and !empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM `students` WHERE id=$id";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {

            $row = mysqli_fetch_array($result);

            $fullName = $row['fullName'];
            $emailAddress= $row['emailAddress'];
            $dob= $row['dob'];
            $gender = $row['gender'];
            $photo = $row['photo'];
            $cv = $row['cv'];

            $filepath = "uploads/$photo";

            ?>
            <div class="row m-2">
                <div class="card col-md-3 m-2">
                    <div class="card-body">
                        <div class="m-3 p-3">
                        <img src="<?php echo $filepath?>" alt="Loading" height="150" width="150" class="rounded-circle">
                        </div>
                        <div class="m-2 p-3">
                        <a href="participants.php" class="btn btn-danger col-md-12"> BACK</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-6 m-2 bg-primary text-white">
                    <div class="card-body">
                        <div>
                            <label class="form-label h6">FULL NAME</label>
                             <p><?php echo $fullName; ?></p>
                        </div>
                        <hr>
                        <div>
                            <label  class="form-label h6"  >GENDER</label>
                            <p><?php echo $gender; ?></p>
                        </div>
                        <hr>
                        <div>
                            <label  class="form-label h6" >EMAIL ADDRESS</label>
                             <p><?php echo  $emailAddress; ?></p>
                        </div>
                        <div>
                            <label  class="form-label h6" >DATE OF BIRTH</label>
                             <p><?php echo $dob;  ?></p>
                        </div>
                        <hr>




                    </div>
                </div>
            </div>
            <?php

        } else {
            echo "No record was found";
        }


    } else {
        echo "error executing query $sql" . mysqli_error($link);
    }


} else {
    echo "id value not picked";
}





?>
