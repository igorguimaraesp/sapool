<?php
include_once("../sys/validation.php");
if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $municipio = $_POST['municipio'];
    $bairro = $_POST['bairro'];
    $id_rotas = $_POST['id_rotas'];

    $sql_code = "INSERT INTO MOTORISTAS (id, name, tipo, cpf, endereco, municipio, bairro, id_rotas) VALUES(null, '$nome', '$tipo', '$cpf', '$endereco', '$municipio', '$bairro', '$id_rotas')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>