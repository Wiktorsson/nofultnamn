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
  <?php
  $sql = "SELECT * FROM uploads WHERE blogpost_id = '$post[id]'";
  $uploads = $mysqli->query($sql);
  while($upload = mysqli_fetch_array($uploads))
  {
    ?> <img src="<?php echo $upload['path'];?>">
    <?php
  }
?>
  <p><?php echo $post['post']?></p>
  <a href="readmore.php?id=<?php echo $post['id']?>" class="readmore"> Read more... </a>
  <?php

}


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  ?> <p> Du är inloggad </p> <?php 
}
else
{
  ?> <p> Du är utloggad </p> <?php 
}
?>

  
</body>
<?php 
include("includes/footer.php");
?>