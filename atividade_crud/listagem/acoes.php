<?php

include('../database/conexao.php');

$acao = "";

if (isset($_GET["acao"])) {
    $acao = $_GET["acao"];
} else {
    $acao = $_POST["acao"];
}

switch ($_GET["acao"]) {

    case 'deletar':

        $usuarioId = $_GET['cod_pessoa'];

        $sql = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $usuarioId";

        $result = mysqli_query($conn, $sql);

        header('location: index.php');

        break;

    default:
        # code...
        break;
}
