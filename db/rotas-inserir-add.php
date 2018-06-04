<?php
include_once("../sys/validation.php");
if(isset($_POST['descricao'])){

    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $valor_ida = $_POST['valor_ida'];
    $valor_volta = $_POST['valor_volta'];

    $sql_code = "INSERT INTO ROTAS (id, descricao, valor_ida, valor_volta, tipo) VALUES(null, '$descricao', '$valor_ida', '$valor_volta', '$tipo')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>