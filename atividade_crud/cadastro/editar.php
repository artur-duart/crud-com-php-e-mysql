<?php
session_start();


if (!isset($_SESSION['idUsuario'])) {

    header('location: ../index.php');
}

include('../componentes/header.php');

require('../database/conexao.php');

include('acoes.php');


$cod_pessoa = $_GET["cod_pessoa"];

$sql = "SELECT * FROM tbl_pessoa WHERE cod_pessoa = $cod_pessoa";
$result = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_array($result);


?>


<div class="container">
    <hr>
    <div class="card">
        <div class="card-header">
            <h2>Edição</h2>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <input class="form-control" type="text" placeholder="Digite o nome" name="nome" id="nome" value="<?php echo $usuario["nome"] ?>" require>
                <br />
                <input class="form-control" type="text" placeholder="Digite o sobrenome" name="sobrenome" id="sobrenome" value="<?php echo $usuario["sobrenome"] ?>" require>
                <br />
                <input class="form-control" type="text" placeholder="Digite o email" name="email" id="email" value="<?php echo $usuario["email"] ?>" require>
                <br />
                <input class="form-control" type="text" placeholder="Digite celular" name="celular" id="celular" value="<?php echo $usuario["celular"] ?>" require>
                <br />
                <button class="btn btn-success" name="editar">EDITAR</button>
            </form>
        </div>
    </div>
</div>


<?php
include('../componentes/footer.php');
?>