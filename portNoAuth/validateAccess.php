<?
    session_start();
    if(isset($_SESSION['authenticated']) && $_SESSION['authenticated']== 'noAuth'){
        return;
    }
?>