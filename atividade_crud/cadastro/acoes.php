<?php

/*FUNÇÃO DE VALIDAÇÃO*/
function validaCampos()
{
    $erros = [];

    if (!isset($_POST['nome']) || $_POST['nome'] == "") {
        $erros[] = "O campo nome é de preenchimento obrigatório";
    }
    if (!isset($_POST['sobrenome']) || $_POST['sobrenome'] == "") {
        $erros[] = "O campo sobrenome é de preenchimento obrigatório";
    }
    if (!isset($_POST['email']) || $_POST['email'] == "") {
        $erros[] = "O campo email é de preenchimento obrigatório";
    }
    if (!isset($_POST['celular']) || $_POST['celular'] == "") {
        $erros[] = "O campo celular é de preenchimento obrigatório";
    }
    return $erros;
}

/*AÇÃO DE CADASTRO*/
if (isset($_POST['cadastrar'])) {

    //CHAMADA DA FUNÇÃO DE VALIDAÇÃO DE ERROS:
    $erros = validaCampos();

    if (count($erros) > 0) {
        $_SESSION["erros"] = $erros;
        header('location: index.php');
        exit();
    }

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $sql = "INSERT INTO `tbl_pessoa` (nome, sobrenome, email, celular) 
    VALUES('$nome', '$sobrenome', '$email', '$celular')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    } 
}

/*AÇÃO DE EDITAR*/
if (isset($_POST['editar'])) {

    //CHAMADA DA FUNÇÃO DE VALIDAÇÃO DE ERROS:
    $erros = validaCampos();

    if (count($erros) > 0) {
        $_SESSION["erros"] = $erros;
        header('location: index.php');
        exit();
    }

    $cod_pessoa = $_GET["cod_pessoa"];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $sql = "UPDATE `tbl_pessoa` SET cod_pessoa = '$cod_pessoa' ,nome = '$nome', sobrenome = '$sobrenome', email = '$email', celular = '$celular' WHERE cod_pessoa = $cod_pessoa";

    $result = mysqli_query($conn, $sql);

    if (!$result){
        die(mysqli_error($conn));
    }
}