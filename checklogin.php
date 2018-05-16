<?php
require("includes/dp.php");
$sql = "SELECT * FROM users WHERE password = '$_POST[password]' AND username = '$_POST[username]'";
$sqlsak = $mysqli->query($sql);
if($sqlsak->num_rows == 1)
{
    $sqlsak = mysqli_fetch_assoc($sqlsak);
    echo("grattis du lyckades logga in ");
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['userID'] =  $sqlsak['id'];
    header("location:index.php");

}
else 
{
    echo("fel inlogg noobie");
    $_SESSION['loggedin'] = false;
    header("location:index.php");
}

?>
