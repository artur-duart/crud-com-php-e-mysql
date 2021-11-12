<?php

if (!isset($_SESSION['idUsuario'])) {

    header('location: ../index.php');
}

include('../componentes/header.php');
include('../database/conexao.php');

$sql = "SELECT * FROM tbl_pessoa";

$result = mysqli_query($conn, $sql);
?>

<div class="container">

    <br />

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php
            while ($usuario = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <th><?php echo $usuario["cod_pessoa"];  ?></th>
                    <th><?php echo $usuario["nome"];  ?></th>
                    <th><?php echo $usuario["sobrenome"];  ?></th>
                    <th><?php echo $usuario["email"];  ?></th>
                    <th><?php echo $usuario["celular"];  ?></th>

                    <th>
                        <form action="../cadastro/editar.php" method="get" style="display: inline;">
                            <input type="hidden" name="cod_pessoa" value="<?php echo $usuario["cod_pessoa"] ?>">
                            <button class="btn btn-warning">Editar</button>
                        </form>
                        <form action="" method="get" style="display: inline;">
                            <input type="hidden" name="cod_pessoa" value="<?php echo $usuario["cod_pessoa"] ?>">
                            <button class="btn btn-danger"><a href="acoes.php?cod_pessoa=<?php echo $usuario['cod_pessoa'] . '&acao=deletar'?>">Excluir</a></button>
                        </form>
                    </th>
                </tr>

            <?php
            }
            ?>

        </tbody>

    </table>

</div>

<?php
include('../componentes/footer.php');
?>