<?php
session_start();

require "conexao.php";
require 'usuario.php';
require 'validaConexao.php';

$usuario = new Usuario();

$usuario->__set('user', $_POST['user']);
$usuario->__set('pass', $_POST['pass']);

$conexao = new Conexao();

$validaConexao = new validaConexao($conexao, $usuario);

if ($acao == 'cadastrar') {

    $validaConexao->novo();

} else if ($acao == 'validarLogin') {

    $existeUsuario = $validaConexao->validar();
    if (sizeof($existeUsuario) > 0) {
        $_SESSION['autenticado']= 'autenticado';
        header('Location: inicio.php');
    } else {
        header('Location: index.php?login=erro');
    }

} else if ($acao == 'atualizar') {
    $validaConexao->atualizar();
}