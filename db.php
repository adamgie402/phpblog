<?php

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if(mysqli_connect_errno()) {
        // if is true - connection is failed
        echo 'Connection with DB failed' . mysqli_connect_errno();
    } else {
        // echo 'Conected to DB! <br>';
    }

?>