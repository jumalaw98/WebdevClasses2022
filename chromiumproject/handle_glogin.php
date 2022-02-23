<?php

include "google-api/vendor/autoload.php";


$gClient = new Google_Client();


$gClient->setClientId("913884675007-eibhucichskt8t9fiuflftsn944erj15.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Chromium Login");
$gClient->setRedirectUri("http://localhost/WebdevClasses2022/chromiumproject/dashboard.php");
$gClient ->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");


$login_url=$gClient->createAuthUrl();
