<?php
$msg = false;
include_once("../sys/validation.php");
if(isset($_POST['admNome'])){

    $id = $_SESSION['usuarioId'];
    $nome = $_POST['admNome'];
    $senha = md5($_POST['admSenha']);

    $sql = "UPDATE USUARIOS SET nome='$nome', senha='$senha' WHERE id='$id'";
    $res = mysqli_query($conexao,$sql);

    if(!mysqli_query($conexao,$sql))
        echo"<meta http-equiv='refresh' content='0;url=../perfil?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../perfil?msg=success'>";
}
?>