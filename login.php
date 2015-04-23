<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>



	<?php require_once("menu.php");?>

    <!-- Begin page content -->
    <div class="container">
		<div class="col-md-12" align="center">
			<form method="POST" action="./controller/login_controller.php">
				<input type="hidden" name="acao" id="entrar" value="entrar" />
				<fieldset class="boxSize"><br/><br/><br/><br/>

					<div>
						<div>
							<label for="email">E-Mail</label>
							<input type="text" class="form-control" id="email" name="EMAIL" placeholder="exemplo@exemplo.com" required>
						</div>
					</div>

					<div>
						<div>
							<label for="cpf">SENHA</label>
							<input type="password" class="form-control" name="SENHA" id="senha" required>
						</div>
					</div>					

					<div class="submit">
						<button class="btn btn-success" type="submit">Entrar</button>
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