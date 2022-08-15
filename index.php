
<?php
    require('header.php');

    $query = 'SELECT * FROM posts'; // treść zapytania sql
    $qresult = mysqli_query($connection, $query); // zapytanie do DB
    $posts = mysqli_fetch_all($qresult, MYSQLI_ASSOC); // konwersja odpowiedzi do tablicy asocjacyjnej
    mysqli_free_result($qresult); // zwalnianie pamięci zajętej przez odpowiedź z DB
    mysqli_close($connection); // zamykanie połączenia z DB
?>

<article>
    <h1>Posty</h1>
    <hr>

    <?php foreach ($posts as $post): ?>
        <h3>Title: <?php echo $post['title']; ?></h3>
        <h5>Date: <?php echo $post['created_at'] . ", Author: " . $post['author']; ?></h5>
        <a href="post.php?id=<?php echo $post['id'];?>">read post</a>
        <hr>
    <?php endforeach; ?> 
</article>

<?php include('footer.php'); ?>