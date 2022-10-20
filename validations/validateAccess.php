<?php
    session_start();

    if(!isset($_SESSION['authenticated']) && $_SESSION['authenticated']!= "authenticated"){
        header('Location: index.php?login=error');
    }

?>