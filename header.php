<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
    <style>
        body { background-color: silver; font-family: serif;}
        p { font-size: 1.1em; line-height: 1.4;}
        article { max-width: 500px; margin: 0 auto;}
        textarea, input { margin: 10px 0; padding: 7px; width: 100%; font-family: serif; font-size: 1.2em; }
        textarea { min-height: 200px;}
        .btn { padding: 5px; margin: 5px; display: inline-block; font-size: 12px; font-family: sans-serif;}
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
    