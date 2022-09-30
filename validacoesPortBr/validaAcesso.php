<?php

    if(isset($_SESSION['autenticado']) || $_SESSION['autenticado']){
        header('Location: index.php?login=erro');
    }

?>