<?php


$conn = mysqli_connect('localhost','root','','movie');

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>