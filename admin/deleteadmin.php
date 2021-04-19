<?php
include("../config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM login_admin WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: dashboard.php");   

?>