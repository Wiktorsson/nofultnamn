<?php require_once("includes/header.php");
require_once("includes/dp.php");
$id = $_GET['id'];
$sql = "SELECT * FROM blogposts WHERE id = '$id'";
$mysqli->query($sql);
?>
<?php
$posts = $mysqli->query($sql);
while($post= mysqli_fetch_array($posts)){
?>
  <h1><?php echo $post['title'] ?></h1>
  <p><?php echo $post['post']?></p>
  <form method="post" action="create_comment.php">
<input type="hidden" name="post_id" value="<?php echo $post['id']?>"</input> 
<input type="textarea" name="comment"></input>
<input type="submit" value="comment">
</form>
  <?php
$sql = "SELECT * FROM comments WHERE post_id = '$id'";
$comments = $mysqli->query($sql);



while($comment = mysqli_fetch_array($comments)){
  ?><p> <?php $sql = "SELECT username FROM users WHERE id = " .  $comment['author_id'];
  $sqlvariabel = $mysqli->query($sql);
  $sqlvariabel = mysqli_fetch_assoc($sqlvariabel);
  echo "Posted by " .$sqlvariabel['username']; ?> <br/> <?php
  echo $comment['comment'];
  

  ?> </p><?php
}

}
?>