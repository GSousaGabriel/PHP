<?
    session_start();
    if(isset($_SESSION['autenticado']) && $_SESSION['autenticado']== 'semAutenticacao'){
        return;
    }
    require '../../validacoesPortBr/validaAcesso.php';
?>