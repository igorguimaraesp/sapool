<?php
include_once("../sys/validation.php");

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "DELETE FROM BAIRROS WHERE id='$id'";
    $res = mysqli_query($conexao,$sql);

    echo"<meta http-equiv='refresh' content='0;url=../".$url2."?msg=success'>";
}
?>