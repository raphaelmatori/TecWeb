<?php
session_start();
require_once("conexao.php");

//Cadastro Controller
if(isset($_POST))
{
	switch ($_POST['acao']) {
		case 'upload':
			upload();
			break;

		default:
			# code...
			break;
	}
}



function upload()
{

	$arquivo=fopen($_FILES['FOTO']['tmp_name'],'r');
	$contents = fread($arquivo, filesize($_FILES['FOTO']['tmp_name']));
	$encoded_attach = chunk_split(base64_encode($contents));
	//fclose($arquivo);

	@mysql_query("INSERT INTO USUARIO_FOTO(IDFOTO,FOTO,IDUSUARIO) VALUES ('','".$encoded_attach."','".$_SESSION['usuario_id']."')");	
	echo "<script>alert('Foto enviada com sucesso!');window.location.href='../upload.php';</script>";
	exit;
}




?>