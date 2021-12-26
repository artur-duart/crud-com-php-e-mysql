<?php

$conexao = new mysqli('localhost', 'root', 'Ce425adm42689712890', 'cadastroCrud');

if (!$conexao) {
    die(mysqli_error($conexao));
}
