<?php

if (!isset($_SESSION['idUsuario'])) {

    header('location: ../index.php');
}

include('../componentes/header.php');
include('../database/conexao.php');
include('acoes.php');
?>


<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            <h2>Cadastro</h2>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <input class="form-control" type="text" placeholder="Digite o nome" name="nome" id="nome" required>
                <br />
                <input class="form-control" type="text" placeholder="Digite o sobrenome" name="sobrenome" id="sobrenome" required>
                <br />
                <input class="form-control" type="text" placeholder="Digite o email" name="email" id="email" required>
                <br />
                <input class="form-control" type="text" placeholder="Digite celular" name="celular" id="celular" required>
                <br />
                <button class="btn btn-success" type="submit" name="cadastrar">CADASTRAR</button>
            </form>
        </div>
    </div>
</div>


<?php
include('../componentes/footer.php');
?>