<?php

$serverAddress = 'localhost';
$username = 'root';
$password = '';
$dbName = 'corvit';


$con = new mysqli($serverAddress,$username,$password,$dbName);

$usersData = array();

$sql = "SELECT * FROM students";

$result = $con->query($sql);

if( $result->num_rows > 0){

	while($row =$result->fetch_assoc()){

		array_push($usersData,$row);
	}

	echo json_encode($usersData);

}else{
	echo 'No Data available!';
}

?>