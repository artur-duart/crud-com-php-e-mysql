<?php

/*
Parâmetros de conexão mysqli (o I vem de "interface")

1 - host -> onde o banco de dados está rodando
2 - user -> usuário do bano de dados
3 - password -> senha do usuário do banco de dados
4 - database -> nome do banco de dados
*/

const HOST = "localhost";
const USER = "root";
const PASSWORD = "bcd127";
const DATABASE = "cadastroCrud";

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if ($conexao === false) {
    die(mysqli_connect_error());
}
