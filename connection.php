<?php
$environment = "PRODUCTION";

if($environment == "PRODUCTION"){
	$servername = "localhost";
	$username = "mmhttc";
	$password = "mmhttc@mmhttc";
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