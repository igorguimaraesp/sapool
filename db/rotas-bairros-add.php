<?php
include_once("../sys/validation.php");
if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $id_rotas = $_POST['id_rotas'];
    $id_bairros = $_POST['id_bairros'];

    $sql_code = "INSERT INTO BAIRROS (id, nome, id_rotas, id_bairros) VALUES(null, '$nome', '$id_rotas', '$id_bairros')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>