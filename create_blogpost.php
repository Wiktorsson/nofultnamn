<?php require_once("includes/header.php");
require_once("includes/dp.php");
?>

<script src="js/scripts.js"></script>
<div class="Rubrik">
<h2> Create Blog Post </h2>
</div>
<form method="post" action=""  enctype="multipart/form-data">

  <p>Title:</p>
    <input class="title" type="text" placeholder="Title" name="title"></input>
<div class="txtarea">
  <textarea type="text" class="txtarea" placeholder="This is the text area" name="content"></textarea>
  <input type="file" name="filer"> </input>
  <input type="submit" value="Create" name="knappfan"></input>  <br/>
  <?php 
      if (isset($_POST["title"]) && !empty($_POST["title"])) {
       
        $content = $_POST['content'];
        
        $title = $_POST['title'];
        $sql="INSERT INTO blogposts (post, author_id, title) VALUES ('$content', 1, '$title')";
        $filbajs = basename($_FILES["filer"]["name"]);
        print_r($filbajs);
        $newfilename = time(). $filbajs;
        $mysqli->query($sql);
        $last_id = $mysqli->insert_id;
        
        print_r($mysqli->error);
        if(getimagesize($_FILES["filer"]["tmp_name"]))
        {
            if($_FILES["filer"]["size"] < 2000000)
            {
                $path = "./Uploads/". $newfilename;
                move_uploaded_file($_FILES["filer"]["tmp_name"], $path);
                $sql = "INSERT INTO uploads (blogpost_id, path) VALUES ('$last_id', '$path')";
                $mysqli->query($sql);
            }
        }
        header("location: index.php");  
  }
    else{  
        echo "Title is missing";
        $error = true;  

  }
    ?> <br/> <?php
    if (isset($_POST["content"]) && !empty($_POST["content"])) {
        ;
         
        
    }else{  
        echo "Content is empty";
        $error = true;  

    }
?>
</div>
</form>
  
</body>
<?php 
include("includes/footer.php");
?>  