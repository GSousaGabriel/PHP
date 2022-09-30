<?php
    session_start();

    if(!isset($_SESSION['autenticado']) && $_SESSION['autenticado']!= "autenticado"){
        header('Location: index.php?login=erro');
    }

?>