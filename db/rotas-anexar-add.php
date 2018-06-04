<?php
include_once("../sys/validation.php");
if(isset($_POST['id_clientes'])){

    $id_clientes = $_POST['id_clientes'];
    $id_rotas = $_POST['id_rotas'];

    $sql_code = "INSERT INTO CLIENTES_ROTAS (id, id_clientes, id_rotas) VALUES(null, '$id_clientes', '$id_rotas')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>