<?php
include("../config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM video WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: dashboard.php");   

?>