<?php
$msg = false;
include_once("../sys/validation.php");
if(isset($_FILES['admFoto'])){

    $id = $_SESSION['usuarioId'];

    $extensao = substr($_FILES['admFoto']['name'], -4);
    $foto = md5(time()) . $extensao;
    $diretorio = "../uploads/";

    move_uploaded_file($_FILES['admFoto']['tmp_name'], $diretorio.$foto);

    $sql = "UPDATE USUARIOS SET foto='$foto' WHERE id='$id'";
    $res = mysqli_query($conexao,$sql);

    if(!mysqli_query($conexao,$sql))
        echo"<meta http-equiv='refresh' content='0;url=../perfil?msg=error'>";
    else
        echo"<meta http-equiv='refresh' content='0;url=../perfil?msg=success'>";

}
?>