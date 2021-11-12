<?php
session_start();

include('../database/conexao.php');
require('../database/conexao.php');

if (empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])) {
    header('location: index.php');
    exit();
}

#### FUNÇÕES DE LOGIN/LOGOUT #####
function realizarLogin($usuario, $senha, $conn)
{

    $sql = "SELECT * FROM tbl_admin
                WHERE usuario = '$usuario'";

    $resultado = mysqli_query($conn, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    if (isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"]) &&  password_verify($senha, $dadosUsuario["senha"])) {

        $_SESSION["usuarioId"] = $dadosUsuario["id"];
        $_SESSION["nome"] = $dadosUsuario["nome"];

        header("location: ../listagem/index.php");
    } else {

        header("location: ../index.php");
    }
}

if (isset($_POST['logar'])) {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    realizarLogin($usuario, $senha, $conn);

}
