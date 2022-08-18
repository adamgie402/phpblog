
<?php
    require('header.php');
    
    $post_id = htmlspecialchars($_GET['id']);
    $query = 'SELECT * FROM posts WHERE id = ' . $post_id; // treść zapytania sql
    $qresult = mysqli_query($connection, $query); // zapytanie do DB
    $post = mysqli_fetch_assoc($qresult); // konwersja pojedyńczej odpowiedzi do tablicy asocjacyjnej
    
    mysqli_free_result($qresult); // zwalnianie pamięci zajętej przez odpowiedź z DB
    mysqli_close($connection); // zamykanie połączenia z DB
?>

<article>
    <h1>Title: <?php echo $post['title']; ?></h1>
    <h5>Date: <?php echo $post['created_at'] . ", Author: " . $post['author']; ?></h5>
    <p><?php echo $post['body'] ; ?></p>
    <hr>
    <a href="<?php echo ROOT_URL;?>">back to posts</a>
    <a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $post_id ?>">edit post</a>
</article>

<?php include('footer.php'); ?>