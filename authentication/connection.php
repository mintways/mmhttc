<?php
$environment = "PRODUCTION";

if($environment == "PRODUCTION"){
	$servername = "localhost:3306";
	$username = "mmhttc";
	$password = "G86sr3a_9";
	$dbname = "mmhttc_";

}else{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database_mmhttc";

}

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "Connection OK";
}
else
{
	echo "Connection Failed".mysqli_connect_error();
}

?>