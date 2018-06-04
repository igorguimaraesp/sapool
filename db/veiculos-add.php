<?php
include_once("../sys/validation.php");
if(isset($_POST['modelo'])){

    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $fabricante = $_POST['fabricante'];

    $sql_code = "INSERT INTO VEICULOS (id, tipo, modelo, fabricante) VALUES(null, '$tipo', '$modelo', '$fabricante')";

    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url."?msg=success'>";
}
?>