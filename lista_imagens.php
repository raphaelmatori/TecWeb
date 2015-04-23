<!DOCTYPE html>
<html>
	<head>
		<title>Minhas Fotos</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>


	<?php require_once("menu.php");?>

    <!-- Begin page content -->
    <div class="container">
		<div class="col-md-12" align="center">	<br />	<br />	<br />	
			<?php
				$sql = mysql_query("SELECT * FROM USUARIO_FOTO WHERE IDUSUARIO = '".$_SESSION['usuario_id']."'");
				while($row = mysql_fetch_assoc($sql))
				{
					echo '<img src="data:image/jpeg;base64,'.$row["FOTO"].'" class="img-thumbnail" width="150" height="150" hspace="10" vspace="10" />';		
				}
			?>	
			
		</div>
    </div>


		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/validacoes.js"></script>	
	</body>
</html>	