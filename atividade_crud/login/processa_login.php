<?php
session_start();

require('../database/conexao.php');

if (empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])) {
    header('location: index.php');
    exit();
}

#### FUNÇÕES DE LOGIN/LOGOUT #####
function realizarLogin($usuario, $senha, $conn)
{


    // var_dump($_POST);exit;

    $sql = "SELECT * FROM tbl_admin
                WHERE usuario = '$usuario'";

    $resultado = mysqli_query($conn, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    if (isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"]) &&  password_verify($senha, $dadosUsuario["senha"])) {


        $_SESSION["usuarioId"] = $dadosUsuario["idAdmin"];
        $_SESSION["nome"] = $dadosUsuario["usuario"];

        header("location: ../listagem/index.php");

    } else {

        header("location: ../index.php");
    }
}

if (isset($_POST['logar'])) {

    $usuario = $_POST["txt_usuario"];
    $senha = $_POST["txt_senha"];

    realizarLogin($usuario, $senha, $conn);

}
