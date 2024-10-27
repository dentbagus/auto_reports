<?php

date_default_timezone_set("Asia/Jakarta");

echo 'hello world!';

return false;

if ( $_POST["image"] != "" ) {
 
    $image = $_POST["image"];
     
    $image = explode(";", $image)[1];

    define('UPLOAD_DIR', 'images/');

    $mypop = $_GET['rpt'] . '_' . substr(date("Y"), -2) . date("m") . ".jpg";
    // $mypop = "hampers_" . substr(date("Y"), -2) . date("md") . ".jpg";

    $file = UPLOAD_DIR . $mypop;
     
    $image = explode(",", $image)[1];
     
    $image = str_replace(" ", "+", $image);
     
    $image = base64_decode($image);
     
    file_put_contents($file, $image);

    echo json_encode("success");
 
}
