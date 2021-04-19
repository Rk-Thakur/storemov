<?php
include("../config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM login_user WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: dashboard.php");   

?>