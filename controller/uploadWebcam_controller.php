<?php
session_start();
require_once("conexao.php");

  $image = file_get_contents('php://input');
  upload($image);


function upload($img)
{
  $encoded_attach = chunk_split(base64_encode($img));
  //fclose($arquivo);

  @mysql_query("INSERT INTO USUARIO_FOTO(IDFOTO,FOTO,IDUSUARIO) VALUES ('','".$encoded_attach."','".$_SESSION['usuario_id']."')");  
  echo "Foto enviada com sucesso!";
  exit;
}


 ?>
