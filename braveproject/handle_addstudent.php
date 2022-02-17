<?php
include "config.php";
if(isset($_POST["submit"])){

    //pick values
    $fullName = $_POST["fullName"];
    $emailAddress = $_POST["emailAddress"];
    $phoneNumber = $_POST["phoneNumber"];
    $location = $_POST["location"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];

    // files
    $photoname =$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="uploads/".$photoname;

    //cv
    $cvname =$_FILES["cv"]["name"];
    $cvtemp = $_FILES["cv"]["tmp_name"];
    $cvfolder = "uploads/.".$cvname;


    $sql = "INSERT INTO `students`(`fullName`,`emailAddress`, `phoneNumber`, `location`, `dob`, `gender`, `photo`,`cv`)
         VALUES ('$fullName','$emailAddress','$phoneNumber','$location','$dob','$gender','$photoname','$cvname')";


    $result = mysqli_query($link,$sql);

    if (move_uploaded_file($tempname,$folder)){
        echo "Image has been uploaded";
    }else{
        echo "Error uploading image";
    }


    if (move_uploaded_file($cvtemp,$cvfolder)){
        echo "CV uploaded successfully";
    }else{
        echo "Error uploading your cv";
    }


    if ($result){
        echo "Record added successfully";

       // header("location:addstudent.php");
    }else{
        echo "error executing this query $sql".mysqli_error($link);
    }



}