<?
    session_start();
    $_SESSION['autenticado']= 'semAutenticacao';
    header('Location: inicio.php');
?>