<?php

require_once("includes/dp.php");
$postid = $_POST['post_id'];
$comment = $_POST['comment'];

session_start();    
$userID = $_SESSION['userID'];
$sql="INSERT INTO comments (post_id, comment, author_id) VALUES ('$postid','$comment', '$userID')";
$mysqli->query($sql);
header("location:readmore.php?id=" . $postid);
?>
