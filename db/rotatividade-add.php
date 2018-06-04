<?php
include_once("../sys/validation.php");
if(isset($_POST['tipo'])){

    $id_veiculos = $_POST['id_veiculos'];
    $id_motoristas = $_POST['id_motoristas'];
    $id_clientes_rotas = $_POST['id_clientes_rotas'];
    $tipo = $_POST['tipo'];

    $sql_code = "INSERT INTO ROTATIVIDADE (id, tipo, id_veiculos, id_motoristas, id_clientes_rotas) VALUES(null, '$tipo', '$id_veiculos', '$id_motoristas', '$id_clientes_rotas')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}

if(isset($_GET['reserva'])){
    $reserva = $_GET['reserva'];
    $id = $_GET['id'];
    $sql_code = "UPDATE ROTATIVIDADE SET reserva=1 WHERE id='$id'";
    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../rotatividade?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../rotatividade?msg=success'>";
}
?>