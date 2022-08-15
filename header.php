<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
    <style>
        body { background-color: silver;}
        article { max-width: 500px; margin: 0 auto;}
        textarea, input { margin: 10px 0; padding: 7px; width: 100%; }
    </style>
</head>

<body>

<?php
    require('configuration.php');
    require('db.php');
?>

<nav>
    <a href="<?php echo ROOT_URL?>">Posts list</a><br>
    <a href="<?php echo ROOT_URL?>newpost.php">Add post</a>
</nav>
    