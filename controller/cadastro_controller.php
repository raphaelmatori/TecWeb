<?php

require_once("conexao.php");

//Cadastro Controller
if(isset($_POST))
{
	switch ($_POST['acao']) {
		case 'cadastrar':
			cadastrar();
			break;

		default:
			# code...
			break;
	}
}



function cadastrar()
{

	$NOME = validarNOME($_POST['NOME']);
	$EMAIL = validarEMAIL($_POST['EMAIL']);
	$ENDERECO = validarENDERECO($_POST['ENDERECO']);
	$DATANASCIMENTO = validarDATANASCIMENTO($_POST['DATANASCIMENTO']);
	$SEXO = validarSEXO($_POST['SEXO']);
	$CPF = validarCPF($_POST['CPF']);
	$SENHA = md5($_POST['SENHA']);

	@mysql_query("INSERT INTO USUARIOS(IDUSUARIO,NOME,EMAIL,ENDERECO,DATANASCIMENTO,SEXO,CPF,SENHA) VALUES ('','".$NOME."','".$EMAIL."','".$ENDERECO."','".$DATANASCIMENTO."','".$SEXO."','".$CPF."','".$SENHA."')");	
	echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='../login.php';</script>";
	exit;
}



function validarNOME($str)
{
	$aux = anti_sql_injection($str);
	if(strlen($aux) > 0)
		return $aux;
	else
		erro();
}

function validarEMAIL($str)
{
	return anti_sql_injection($str);
}

function validarENDERECO($str)
{
	$aux = anti_sql_injection($str);
	if(strlen($aux) > 0)
		return $aux;
	else
		erro();
}	

function validarDATANASCIMENTO($str)
{
	return $str;
}

function validarSEXO($str)
{
	if(strlen($str) == 1)
		if($str == 'M' || $str == 'F')
			return $str;
		else
			erro();
	erro();
}

function validarCPF($str)
{
	if(verificaCPF($str))
		return preg_replace("/[^0-9]/", "", $str);
	else
		erro();
}

function erro()
{
	header("Location: erro.php");
	exit;
}

function verificaCPF($cpf = null) {
 
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
 
    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
}
?>