<?php
session_start();
require_once("conexao.php");

//Cadastro Controller
if(isset($_POST))
{
	if(isset($_POST['acao']))
		switch ($_POST['acao']) {
			case 'entrar':
				entrar();
				break;

			default:
				# code...
				break;
		}
}

if(isset($_GET))
{
	if(isset($_GET['acao']))
		switch ($_GET['acao']) {
		case 'sair':
			sair();
			break;

		default:
			# code...
			break;
	}
}

function sair()
{
	unset($_SESSION['usuario_logado']);
	unset($_SESSION['usuario_id']);
	echo "<script>alert('Usuário deslogado!');window.location.href='../login.php';</script>";
	exit;
}

function entrar()
{
	$sql = mysql_query("SELECT IDUSUARIO,SENHA FROM USUARIOS WHERE EMAIL = '".anti_sql_injection($_POST['EMAIL'])."'");
	if(mysql_num_rows($sql) == 0)
	{
		echo "<script>alert('Login/Senha inválido(s)');window.location.href='../login.php';</script>";
		exit;
	}
	else
	{
		while($row = mysql_fetch_assoc($sql))
			if(md5($_POST['SENHA']) == $row['SENHA'])
			{
				$_SESSION['usuario_logado'] = true;
				$_SESSION['usuario_id'] = $row['IDUSUARIO'];
				echo "<script>window.location.href='../index.php';</script>";
				exit;
			}
			else
			{
				echo "<script>alert('Login/Senha inválido(s)');window.location.href='../login.php';</script>";
				exit;
			}
		echo "<script>alert('Login/Senha inválido(s)');window.location.href='../login.php';</script>";
		exit;
	}

}


?>