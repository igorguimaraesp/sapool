<?php
$msg = false;
include_once("../sys/validation.php");
if(isset($_POST['admNome'])){

    $nome = $_POST['admNome'];
    $usuario = $_POST['admUsuario'];
    $senha = md5($_POST['admSenha']);

    $sql_code = "INSERT INTO USUARIOS (id, name, username, password) VALUES(null, '$nome', '$usuario', '$senha')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>