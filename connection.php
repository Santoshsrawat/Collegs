<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dataBaseName = 'student';



// here data base connectivity start....
$conn = mysqli_connect($server, $username, $password, $dataBaseName);
if(!$conn){
    die("connection not establish....");
}
?>