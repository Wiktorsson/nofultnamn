<?php require_once("includes/header.php");
require_once("includes/dp.php");
?>
<link rel="stylesheet" href="style.css">

<script src="js/scripts.js"></script>
<div class="Rubrik">
<h2> Blog </h2>
</div>
<?php
$sql = "SELECT * FROM blogposts";
$posts = $mysqli->query($sql);

while($post= mysqli_fetch_array($posts)){
  ?>
  <h1><?php echo $post['title'] ?></h1>
  <p><?php echo $post['post']?></p>
  <a href="deleteblogpost.php?id=<?php echo $post['id']?>" class="delete"> Delete </a>
  <?php

}
?>
  
</body>
<?php 
include("includes/footer.php");
?>