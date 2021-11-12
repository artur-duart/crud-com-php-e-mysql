<?php
include('../database/conexao.php');

if (isset($_GET['cod_pessoa'])) {

    $cod_pessoa = $_GET['cod_pessoa'];

    $sql = "DELETE FROM `cadastroCrud` WHERE cod_pessoa = $cod_pessoa";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Deletado com Sucesso";
    } else {
        mysqli_error($conn);
    }

}