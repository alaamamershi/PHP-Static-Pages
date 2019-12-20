<?php

$filepath = "." . $_SERVER["PHP_SELF"];
// echo "File Path: $filepath";
// echo "<br />";

$noext = str_replace("./", "", $filepath);
$noext = str_replace(".php", "", $noext);
// echo "No Ext: $noext";
// echo "<br />";

$cssPath = "./css/$noext.css";
$jsPath = "./js/$noext.js";
// echo "CSS Path: $cssPath";
// echo "<br />";
// echo "JS Path: $jsPath";

// echo "<hr />";

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>

    <!-- jQuery -->
    <script type="text/javascript" src="./libraries/jquery/jquery.js"></script>
    <script type="text/javascript" src="./libraries/jquery/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="./libraries/bootstrap-4.3.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="./libraries/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="./libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./StyleSheet.css" />
    <?php
        if (file_exists($cssPath)) {
            echo "<link rel='stylesheet' type='text/css' href='$cssPath' />";
        }
    ?>

    <!-- Custom JS -->
    <script type="text/javascript" src="./JavaScript.js"></script>
    <?php
        if (file_exists($jsPath)) {
            echo "<script type='text/javascript' src='$jsPath'></script>";
        }
    ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light navbar-expand-sm">
        <!-- Navbar Label -->
        <a class="navbar-brand" href="./">Site</a>
        
        <!-- Navbar Button for Smaller Screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact Webmaster</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main>
        <div class="container">
            <br />
