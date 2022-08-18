
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
    <a href="<?php echo ROOT_URL;?>"><button class="btn">back to posts</button></a>
    <a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $post_id ?>"><button class="btn">edit post</button></a>
    
    <!-- delete !!! for security reason post_id to delete is sent by form and input hidden -->
    <form class="btn" method="POST" action="<?php echo ROOT_URL ?>deletepost.php">
        <input type="hidden" name="delete_id" value="<?php echo $post_id ?>">
        <input type="submit" name="submit" value="delete post" class="btn">
    </form>    
</article>

<?php include('footer.php'); ?>