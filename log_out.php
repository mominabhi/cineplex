<?php
    session_start();
    if(session_unset() OR session_destroy())
    {
        header('Location:index.php');
    }
?>