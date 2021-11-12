<?php
include('../database/conexao.php');

if(empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])) {
    header('location: index.php');
    exit();
}