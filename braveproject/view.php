<?php
include "header.php";
include  "config.php";


if (isset($_GET["id"]) and !empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM `students` WHERE id=$id";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {

            $row = mysqli_fetch_array($result);

            $fullName = $row['fullName'];
            $emailAddress = $row['emailAddress'];
            $phoneNumber = $row['phoneNumber'];
            $location = $row['location'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $photo = $row['photo'];
            $cv = $row['cv'];

            $filepath="uploads/$photo";

            ?>
            <div class="row m-2">
            <div class="text-center">
                <p><?php echo "<img class='rounded-circle' src='$filepath' width='100' height='100'>";?> </p>
            </div>
            </div>
            <div class="row m-2">
              <div class="card col-md-5 m-2 p-2">
                  <div class="card-body">

                      <div class="text-center">
                          <div>
                              <label class="form-label h5">FULL NAME</label>
                              <p><?php echo $fullName; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">EMAIL </label>
                              <p><?php echo $emailAddress ; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">PHONE NUMBER </label>
                              <p><?php echo $phoneNumber ; ?></p>
                          </div>
                          <hr>
                      </div>

                  </div>
              </div>
              <div class="card col-md-5 m-2 p-2">
                  <div class="card-body">
                      <div class="text-center">
                          <div>
                              <label class="form-label h5">LOCATION </label>
                              <p><?php echo $location ; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">DATE OF BIRTH </label>
                              <p><?php echo $dob ; ?></p>
                          </div>
                          <hr>
                          <div>
                              <label class="form-label h5">GENDER </label>
                              <p><?php echo $gender ; ?></p>
                          </div>
                          <hr>

                      </div>

                  </div>
              </div>


          </div>




            <?php
        }
    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }
}
?>


