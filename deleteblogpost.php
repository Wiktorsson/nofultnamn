<?php
require_once("includes/dp.php");
$getid = $_GET['id'];
$sql="DELETE FROM blogposts WHERE ID = $getid";
$mysqli->query($sql);
header("location: admin_dashboard.php");
?>