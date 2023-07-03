<?php

$serverAddress = "localhost";
$userName = "root";
$password = "";
$dataBaseName= "corvit";


$con = new mysqli($serverAddress, $userName, $password , $dataBaseName);



$sql = "UPDATE students SET password='1234' WHERE id=1";



if( $con->query($sql) ==TRUE ){
	echo 'Data updated Successfully';
}else{
	echo 'Something wrong with the query';
}

?>