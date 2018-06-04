<?php
session_start();
session_destroy();

unset(
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioSenha'],
    $_SESSION['usuarioUsuario'],
    $_SESSION['usuarioLevel'],
    $_SESSION['usuarioFuncao'],
    $_SESSION['usuarioId'],
    $_SESSION['usuarioFoto']
);

header("Location: ../index.php");
?>