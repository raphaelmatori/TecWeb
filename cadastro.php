<!DOCTYPE html>
<html>
	<head>
		<title>Formulário de Cadastro</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>



	<?php require_once("menu.php");?>

    <!-- Begin page content -->
    <div class="container">
		<div class="col-md-12" align="center">
			<form method="POST" action="./controller/cadastro_controller.php" onSubmit="return validar();">
				<input type="hidden" name="acao" id="cadastar" value="cadastrar" />
				<fieldset class="boxSize"><br/><br/><br/><br/>
					
					<div>	
						<div>
							<label for="nome">Nome</label>
							<input type="text" class="form-control" id="nome" name="NOME" placeholder="Digite seu nome" required>
						</div>
					</div>

					<div>
						<div>
							<label for="email">E-Mail</label>
							<input type="text" class="form-control" id="email" name="EMAIL" placeholder="exemplo@exemplo.com" required>
						</div>
					</div>

					<div>
						<div>
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" id="endereco" name="ENDERECO" placeholder="Digite seu endereço" required>
						</div>
					</div>

					<div>
						<div>
							<label for="nome">Data de Nascimento</label>
							<input type="date" class="form-control" name="DATANASCIMENTO" id="data" required>
						</div>
					</div>

					<div>
						<div>
							<label for="sexo">Sexo</label>
							<select name="SEXO" class="form-control" id="sexo" required>
								<option value="M">Masculino</option>
								<option value="F">Feminino</option>
							</select>
						</div>
					</div>


					<div>
						<div>
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" pattern="\d{3}\.\d{3}\.\d{3}\-\d{2}" name="CPF" id="cpf" placeholder="000.000.000-00" required>
						</div>
					</div>

					<div>
						<div>
							<label for="cpf">SENHA</label>
							<input type="password" class="form-control" name="SENHA" id="senha" required>
						</div>
					</div>					

					<div class="submit">
						<button class="btn btn-success" type="submit">Cadastrar</button>
					</div>
				</fieldset>
			</form>
		</div>
    </div>


		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/validacoes.js"></script>	
	</body>
</html>	