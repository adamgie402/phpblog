
<?php
    require('header.php');

    $query = 'SELECT * FROM posts ORDER BY created_at DESC'; 
    
    $qresult = mysqli_query($connection, $query); // DB query
    $posts = mysqli_fetch_all($qresult, MYSQLI_ASSOC); // conversing to assoc. array
    mysqli_free_result($qresult); // release memory occupied by response from DB
    mysqli_close($connection); // DB connection closing
?>

<article>
    <h1>Posty</h1>
    <hr>
    <?php foreach ($posts as $post): ?>
        <h3>Title: <?php echo $post['title']; ?></h3>
        <h5>Date: <?php echo $post['created_at'] . ", Author: " . $post['author']; ?></h5>
        <a href="showpost.php?id=<?php echo $post['id'];?>">read post</a>
        <hr>
    <?php endforeach; ?> 
</article>

<?php include('footer.php'); ?>