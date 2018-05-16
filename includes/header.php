<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Projekt</title>
  <meta name="description" content="Projekt">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="style.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
<div class="meny">
<ul>

<?php
session_start();
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{?>
  <li><a href="index.php">Blog </a></li>
  <li><a href="create_blogpost.php">Create Post</a></li>
  <li><a href="admin_dashboard.php">Admin Dashboard</a></li>
  <li><a href="logout.php">logout</a></li>

<?php
}
else if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
{?>
  <li><a href="index.php">Blog </a></li>
  <li><a href="register_user.php">Register</a></li>
  <li><a href="login.php">Login</a></li><?php
}?>
</ul>
</div>