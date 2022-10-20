<?
    session_start();
    $_SESSION['authenticated']= 'noAuth';
    header('Location: home.php');
?>