<?php
$connection = mysqli_connect('localhost','root','','a_phpblog');

if(mysqli_connect_errno()) {
    // if is true - connection is failed
    echo 'Connection with DB failed' . mysqli_connect_errno();
} else {
    echo 'Conected to DB! <br>';
}
?>