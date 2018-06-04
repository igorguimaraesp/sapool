<?php
include_once("../sys/validation.php");

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql_code = "UPDATE MOTORISTAS SET status=0 WHERE id='$id'";
    if(!mysqli_query($conexao,$sql_code))
        echo"<meta http-equiv='refresh' content='0;url=../".$url2."?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../".$url2."?msg=success'>";
}
?>