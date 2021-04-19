<?php

include("config.php");
// sql to create table
//login_admin
// $sql = "CREATE TABLE login_admin(
//     id INT(6) AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     password VARCHAR(30) NOT NULL
    
//     )";
$sql = "CREATE table video(
    id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    file varchar(1000) NOT NULL,
    name varchar(30) NOT NULL,
    description varchar(100) NOT NULL,
    bywhom varchar(100) NOT NULL

)";
    $result= mysqli_query($conn,$sql);
    if($result){
        echo "Table login created Sucessfully";
    }else{
        echo "Error creating table:". mysqli_error($conn);
    }
mysqli_close($conn);
?>