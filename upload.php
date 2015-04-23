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
			<form method="POST" action="./controller/upload_controller.php" enctype="multipart/form-data">
				<input type="hidden" name="acao" id="upload" value="upload" />
				<fieldset class="boxSize"><br/><br/><br/><br/>
					
					<div>	
						<div>
							<label for="nome">Foto</label>
							<input type="file" class="form-control" id="FOTO" name="FOTO" required>
						</div>
					</div>

								
					<div class="submit">
						<button class="btn btn-success" type="submit">Enviar</button>
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