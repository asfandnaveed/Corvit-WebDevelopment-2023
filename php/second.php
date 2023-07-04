<?php
$serverName="localhost";
$userName="root";
$password="";
$dataBaseName="corvit";


$con= new mysqli($serverName,$userName,$password,$dataBaseName);
$sql= "INSERT INTO students(`father`,`roll_num`) VALUES('ali','3425')";

if($sql->query==TRUE){
   echo 'DATA ADDED SUCCESFULY'
} 
else($sql)








?>

