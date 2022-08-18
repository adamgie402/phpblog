<?php require('header.php'); ?>

<?php
    if (isset($_POST['submit'])) {
        $author = mysqli_real_escape_string($connection, $_POST['author']);
        $title = mysqli_real_escape_string($connection, $_POST['title']);
        $body = mysqli_real_escape_string($connection, $_POST['body']);

        $query = "INSERT INTO posts(author,title,body) VALUES ('$author','$title','$body')";

        if ($author && $title && $body) {
            if (mysqli_query($connection, $query)) { // do query and if is done go to specific file
                header('Location: ' . ROOT_URL . '');
            } else {
                echo 'ERROR: ' . mysqli_error($connection);
            }
        } else {
            echo 'Please complete a form...';
        }
    }

?>

<article>
    <h1>Add new post</h1>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Title</label><br>
        <input type="text" name="title"><br>
        <label>Author</label><br>
        <input type="text" name="author"><br>
        <label>Post content</label><br>
        <textarea name="body"></textarea><br>
        <input type="submit" name="submit">        
    </form>
</article>

<?php include('footer.php'); ?>