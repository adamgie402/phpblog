<?php require('header.php'); ?>





<?php
    $post_id = htmlspecialchars($_GET['id']);

    if (isset($_POST['submit'])) {
        $author = mysqli_real_escape_string($connection, $_POST['author']);
        $title = mysqli_real_escape_string($connection, $_POST['title']);
        $body = mysqli_real_escape_string($connection, $_POST['body']);
        
        $query = "UPDATE posts SET title = '$title', author = '$author', body = '$body' WHERE id = $post_id";

        if (mysqli_query($connection, $query)) { // if query is done go to specific file
            header('Location: ' . ROOT_URL . 'post.php?id=' . $post_id);
        } else {
            echo 'ERROR: ' . mysqli_error($connection);
        }
    }
?>

<?php    
    
    $query = 'SELECT * FROM posts WHERE id = ' . $post_id; // treść zapytania sql
    $qresult = mysqli_query($connection, $query); // zapytanie do DB
    $post = mysqli_fetch_assoc($qresult); // konwersja pojedyńczej odpowiedzi do tablicy asocjacyjnej
    
    mysqli_free_result($qresult); // zwalnianie pamięci zajętej przez odpowiedź z DB
    mysqli_close($connection); // zamykanie połączenia z DB
?>

<article>
    <h1>Edit post</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Title</label><br>
        <input type="text" name="title" value="<?php echo $post['title']; ?>"><br>
        <label>Author</label><br>
        <input type="text" name="author" value="<?php echo $post['author']; ?>"><br>
        <label>Post content</label><br>
        <textarea name="body"><?php echo $post['body']; ?></textarea><br>
        <input type="submit" name="submit">        
    </form>
    <a href="<?php echo ROOT_URL;?>showpost.php?id=<?php echo $post_id ?>">Cancel</a>
</article>

<?php include('footer.php'); ?>