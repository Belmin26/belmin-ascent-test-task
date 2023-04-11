<?php

$hostname='localhost';
$username='root';
$password='';
$database='database';

$con = mysqli_connect($hostname,$username,$password,$database);

if($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));
}

?>