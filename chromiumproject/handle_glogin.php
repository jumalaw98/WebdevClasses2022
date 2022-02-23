<?php

include "google-api/vendor/autoload.php";


$gClient = new Google_Client();


$gClient->setClientId("your id");
$gClient->setClientSecret("your secret");
$gClient->setApplicationName("Chromium Login");
$gClient->setRedirectUri("your redirect");
$gClient ->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");


$login_url=$gClient->createAuthUrl();
