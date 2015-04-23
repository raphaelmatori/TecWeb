function validarCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    strCPF = strCPF.replace(/[^0-9]/g,'');

	if (strCPF == "00000000000") return false;
    
	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
	
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
	
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}


function validarEMAIL(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

function validar()
{
    if(validarEMAIL(document.forms[0].email.value) && validarCPF(document.forms[0].cpf.value))
    {
        document.forms[0].submit();
        return true;
    }
    alert("Preencha os campos corretamente!");
    return false;
}