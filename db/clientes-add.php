<?php
include_once("../sys/validation.php");
if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $razao = $_POST['razao'];

    $sql_code = "INSERT INTO CLIENTES (id, razao, tipo, nome) VALUES(null, '$razao', '$tipo', '$nome')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>