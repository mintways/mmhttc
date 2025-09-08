<?php
$environment = "PRODUCTION";


if ($environment === "PRODUCTION") {
    $serverName = "103.73.188.70";
    $database   = "mmhttc_website";
    $username   = "mmhttc_website_user";
    $password   = "RedCross@123#"; 
} else {
    $serverName = "localhost"; 
    $database   = "database_mmhttc";
    $username   = "root"; 
    $password   = ""; 
}


$connectionOptions = [
    "Database" => $database,
    "UID"      => $username,
    "PWD"      => $password,
    "CharacterSet" => "UTF-8"
];


$conn = sqlsrv_connect($serverName, $connectionOptions);


if ($conn === false) {
    echo "Connection Failed:<br>";
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Connection OK";
}
?>
