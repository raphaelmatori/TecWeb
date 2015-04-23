<!DOCTYPE html>
<html>
	<head>
		<title>Tirar Foto</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>



	<?php require_once("menu.php");?>

    <!-- Begin page content -->
    <div class="container">
		<div class="col-md-12" align="center">
			
			<script type="text/javascript" src="js/webcam.js"></script>
			<script language="JavaScript">
					document.write( webcam.get_html(320, 240) );
			</script>
			<form>
					<input type="hidden" name="acao" value="upload" />
					<input type="button" class="btn btn-success" style="height:50px;margin-top:10px" value="Let's take a selfie!" onClick="take_snapshot()" />
				</form>

			 <script type="text/javascript"><!--

			  webcam.set_api_url( './controller/uploadWebcam_controller.php' );
			  webcam.set_quality( 90 ); // JPEG quality (1 - 100)
			  webcam.set_shutter_sound( true ); // play shutter click sound
			  webcam.set_hook( 'onComplete', 'my_completion_handler' );

			  function take_snapshot()
			  {
			   // take snapshot and upload to server
			   document.getElementById( 'upload_results' ).innerHTML =
			    '<h1>Enviando...</h1>';
			   webcam.snap();
			  }

			  function my_completion_handler(msg)
			  {
			   // extract URL out of PHP output
			   if (msg.match(/(http\:\/\/\S+)/))
			   {
			    // show JPEG image in page
			    document.getElementById( 'upload_results' ).innerHTML =
			     '<h1>Foto enviada com sucesso!</h1>';
			    // reset camera for another shot
			    webcam.reset();
			   }
			   else
			   	{
			     webcam.reset();
			     document.getElementById( 'upload_results' ).innerHTML = '';
			 	}
			  }

			 // --></script>

			<div id="upload_results" style="background-color:#eee;"></div>

		</div>
    </div>


		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/validacoes.js"></script>	
	</body>
</html>	