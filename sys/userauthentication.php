<?php
	session_start();
	include_once("connection.php");

	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
		$senha = md5($senha);

		$sql = "SELECT * FROM USUARIOS WHERE username = '$usuario' && password = '$senha' LIMIT 1";
		$result = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($result);

		if(empty($resultado)){
			$_SESSION['loginErro'] = "Usuário ou senha Inválidos";
			header("Location: ../login");
		}elseif(isset($resultado)){
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			$_SESSION['usuarioUsuario'] = $resultado['usuario'];
			$_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioLevel'] = $resultado['nivel'];
            $_SESSION['usuarioFoto'] = $resultado['foto'];
            $_SESSION['usuarioFuncao'] = $resultado['funcao'];
			header("Location: ../index");
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha Inválidos";
			header("Location: ../login");
		}
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha Inválidos";
		header("Location: ../login");
	}
?>