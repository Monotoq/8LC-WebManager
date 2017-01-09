<?php
    session_start();
    if(isset($_SESSION["id"])){
        header("location: mods/main.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>8LC Login</title>
        <meta name="author" content="Ignacio Serrano">
        
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <style>html,body{background-color: #fff; height: 0;}</style>
    </head>
    <body>
        <?php include "inc/dgs/login.php"; ?>
    </body>
</html>

