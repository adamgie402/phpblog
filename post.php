<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
require('db.php');
$post_id = htmlspecialchars($_GET['id']);
$query = 'SELECT * FROM posts WHERE id = ' . $post_id; // treść zapytania sql
$qresult = mysqli_query($connection, $query); // zapytanie do DB
$post = mysqli_fetch_assoc($qresult); // konwersja pojedyńczej odpowiedzi do tablicy asocjacyjnej
mysqli_free_result($qresult); // zwalnianie pamięci zajętej przez odpowiedź z DB
mysqli_close($connection); // zamykanie połączenia z DB
?>



    <h1>Title: <?php echo $post['title']; ?></h1>
    <h5>Date: <?php echo $post['created_at'] . ", Author: " . $post['author']; ?></h5>
    <p><?php echo $post['body'] ; ?></p>

    <a href="index.php">back to posts</a>


