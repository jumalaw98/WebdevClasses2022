<?php

require "google-api/vendor/autoload.php";


$gClient = new Google_Client();


$gClient -> setClientId("890462044666-s8nket30h2iblgmvfeun5mdim84kjfuv.apps.googleusercontent.com");
$gClient ->setClientSecret("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");
$gClient ->setApplicationName("Brave Login");
$gClient ->setRedirectUri("http://localhost/WebdevClasses2022/braveproject/dashboard.php");
$gClient ->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient ->createAuthUrl();

session_start();
if (isset($_GET["code"])){


    $token = $gClient->fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token["error"])){

        //set access token
        $gClient->setAccessToken($token['access_token']);

        // store in a session

        $_SESSION['access_token'] = $token['access_token'];

        // create ab object
        $gService= new Google_Service_Oauth2($gClient);

        //get user data
        $data=$gService->userinfo->get();

        // store user data

        if (!empty($data['given_name'])){
            $firstname = $data['given_name'];
            $_SESSION['firstname']=$firstname;
        }

        if (!empty($data['family_name'])){
            $lastname=$data['family_name'];
            $_SESSION['lastname']=$lastname;

        }

        if (!empty($data['email'])){
            $email=$data['email'];
            $_SESSION['email']=$email;
        }

        if (!empty($data['gender'])){
            $gender = $data['gender'];
            $_SESSION['gender']=$gender;
        }

        if (!empty($data['picture'])){
            $user_image=$data['picture'];
            $_SESSION['user_image']=$user_image;

        }



    }




}




