<?php
session_start();

require "connection.php";
require 'user.php';
require 'validateConnection.php';

$user = new User();

$user->__set('user', $_POST['user']);
$user->__set('pass', $_POST['pass']);

$connection = new Connection();

$validateConnection = new validateConnection($connection, $user);

if ($action == 'register') {

    $validateConnection->new();

} else if ($action == 'validateLogin') {

    $userExists = $validateConnection->validate();
    if (sizeof($userExists) > 0) {
        $_SESSION['authenticated']= 'authenticated';
        header('Location: home.php');
    } else {
        header('Location: index.php?login=error');
    }

} else if ($action == 'update') {
    $validateconnection->update();
}