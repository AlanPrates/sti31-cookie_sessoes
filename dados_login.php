<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    $_SESSION = array();
    session_destroy();
    header('Location: /');
}
$_SESSION['logged'] = $_SESSION['logged'] ?? false;


//Dados da base de dados
$usuario_db = 'Alan';
$senha_db = '123';


$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_usuario == $usuario_db && $p_senha == $senha_db) {
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = True;
}
$usuario_db = 'Maria';
$senha_db = '123';


$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_usuario == $usuario_db && $p_senha == $senha_db) {
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = True;
}
$usuario_db = 'Pedro';
$senha_db = '123';


$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if ($p_usuario == $usuario_db && $p_senha == $senha_db) {
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $senha_db;
    $_SESSION['logged'] = True;
}
