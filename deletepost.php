<?php require('header.php'); ?>

<?php
    if (isset($_POST['delete_id'])) {
        
        $post_id = htmlspecialchars($_POST['delete_id']);
        // var_dump($post_id);

        $query = "DELETE FROM posts WHERE id = $post_id";

        if (mysqli_query($connection, $query)) { // do query and if is done go to specific file
            header('Location: ' . ROOT_URL);
        } else {
            echo 'ERROR: ' . mysqli_error($connection);
        }
    } else {
        echo "Nothing to delete here...";
    }

?>