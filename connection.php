<?php

$environment = "DEVELOPMENT"; // "PRODUCTION"

if ($environment === "PRODUCTION") {
    $serverName = "103.73.188.70";
    $database   = "mmhttc_website";
    $username   = "mmhttc_website_user";
    $password   = "RedCross@123#";
} else {
    $serverName = "MDAZAM\\SQLEXPRESS";  
    $database   = "database_mmhttc";
    $username   = "";
    $password   = "";
}

$connectionOptions = [
    "Database" => "database_mmhttc",
    "CharacterSet" => "UTF-8"
];


if (!empty($username)) {
    $connectionOptions["Uid"] = $username;
    $connectionOptions["PWD"] = $password;
}


$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo " Connected to SQL Server (" . $environment . ")";
?>
