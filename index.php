<!DOCTYPE html>
<html>
<head lang="pt_BR">
	<meta charset="UTF-8">
	<title>Empatec</title>
	<meta http-equiv="Content-Language" content="pt-br">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/empatec.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta property="og:type" content="website">
	<meta name="description" content="A proposta da tecnologia assistiva em unidades de informação é proporcionar técnicas
	adaptativas que irão beneficiar as pessoas com deficiência (PcD) na realização de atividades
	básicas e complexas nos mais diversos âmbitos da sociedade.  ">
	<meta name="keywords" content="Empatec, empatec, urcamp, sistemas de informação, bagé, rs, tecnologia assistiva">
	<meta property="og:title" content="Empatec">
	<meta property="og:description" content="A proposta da tecnologia assistiva em unidades de informação é proporcionar técnicas
	adaptativas que irão beneficiar as pessoas com deficiência (PcD) na realização de atividades
	básicas e complexas nos mais diversos âmbitos da sociedade.">
	<meta property="og:url" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; ?>/img/icone.png">
	<meta property="og:image" content="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; ?>/empatec/img/icone.png">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<link rel="shortcut icon" href="img/icone.png">
	<link rel="manifest" href="manifest.json">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

</head>
<body class="text-center">
	<div class="aviso">
		<img src="img/logo.png" alt="Empatec logo" class="img-fluid my-5"><br><br>
		<h1>
			<i class="material-icons" style="font-size: 68px">
				screen_rotation
			</i>
			<br>
			Por favor, ative a rotação e deixe seu smartphone na horizontal.
		</h1>
	</div>
	<div id="corpo">
		<div class="container">
			<div class="col-8 mx-auto text-center">
				<img src="img/logo.png" alt="Empatec logo" class="img-fluid mt-3 mx-auto d-block" id="logo" ondragstart="return false">
			</div>
			<div class="col-8 mx-auto corpoPecas">
				<div class="row text-center">
					<div class="zoom">
						<img src="img/2.png" alt="bulimia" class="bulimia " data-id="bulimia" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="Bulimia">
					</div>
					<div class="zoom">
						<img src="img/4.png" alt="panico" data-id="panico" class="panico" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="Pânico">
					</div>
					<div class="zoom">
						<img src="img/6.png" alt="bipolaridade" data-id="bipolaridade" class="bipolaridade" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="Bipolaridade">
					</div>
				</div>
				<div class="row text-center">
					<div class="zoom">
						<img src="img/1.png" alt="toc" data-id="toc" class="toc" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="TOC">
					</div>
					<div class="zoom">
						<img src="img/3.png" alt="autismo" data-id="autismo" class="autismo" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="Autismo">
					</div>
					<div class="zoom">
						<img src="img/5.png" alt="esquizofrenia" data-id="esquizofrenia" class="esquizofrenia" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="Esquizofrênia">
					</div>
				</div>
			</div>

			<div class="modal fade" id="modalDescricao" tabindex="-1" role="dialog" aria-labelledby="modalDescricaoLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<i class="material-icons" style="color: red">
								warning
							</i>
							<p class="lead" style="text-align: justify;">
								A simulação que você está prestes a experimentar é um breve episódio psicótico de um paciente com <span class="id"></span>.<br>
								Uma crise assim pode causar irritabilidade, desconforto, sensação de mal estar. Os sintomas que você experimentará representam uma compilação de uma série de ocorrências sensoriais.<br>
								Essas ocorrências incluem imagens, sons e sensações. <br>
								Se você tiver algum desconforto durante a experiência, por favor, sinalize ao seu médico psiquiatra ou psicólogo.
							</p>
							<button type="button" class="btn btn-danger" data-dismiss="modal" >Sair</button>
							<button type="button" class="btn btn-primary btnId">Ver</button>
						</div>
					</div>
				</div>
			</div>
			<div>


			</div>
		</div>
		<div class="footer-copyright text-center py-3">
			<a href="sobre.php">Sobre</a> © 
			<a href="https://www.urcamp.tche.br/cursos/graduacao/sistemas-de-informacao" target="_blank">Sistemas de Informação</a>
		</div>
	</div>

	

	<div class="video" style="display: none; margin: 0" id="video-container" >
		<video id="video" style="width: 100%; height: 100vh;" controls="false"></video>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/empatec.js"></script>
</body>
</html>
