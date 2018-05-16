<?php require('includes/dp.php'); 
require('includes/header.php');
?>
<form method="POST" action="register_user.php">
<label for="Name">Username</label>
<input type="text" name="Namn" id="Name"> <br/>
<label for="Pw">Password</label>
<input type="password" name="Password" id="Pw"> <br/>
<label for="confirm_Pw">Confirm Password</label>
<input type="password" name="confirm_Pw" id="confirm_Pw"> <br/>
<input type="submit" value="Register">



</form>
<?php
if(!empty($_POST))
{
    $error = false;
    if (isset($_POST["Namn"]) && !empty($_POST["Namn"])) {
        echo "Username is set";
         
        
    }else{  
        echo "Username is not set";
        $error = true;  

    } ?><br/><?php
    if (isset($_POST["Password"]) && !empty($_POST["Password"])) {
        echo "Password is set";    
           
    }else{  
        echo "Password is not set";
        $error = true; 
    } ?><br/><?php
    if (isset($_POST["confirm_Pw"]) && !empty($_POST["confirm_Pw"])) {
        echo "Confirm PW is set"; 
        
    }else{  
        echo "Confirm PW is not set";
        $error = true;      

    }

    if(!$error)
    {
        $sql = "INSERT INTO users (username, password) VALUES ('$_POST[Namn]', '$_POST[Password]')";
        $mysqli->query($sql);
        print_r($mysqli->error);
    }
}

?>
