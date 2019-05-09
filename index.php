<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Empatec</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  maximum-scale=1, user-scalable=0"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
	body{
		background-image: linear-gradient(-90deg, yellow, purple);
		overflow: hidden;
		font-family: 'Roboto', sans-serif;
	}
	#corpo img:hover{
		cursor: pointer;
	}

	#toc{
		padding: 10px; margin-left: 10px;
	}

	#bulimia{
		padding: 10px; margin-left: 20px;
	}
	#autismo{
		margin-top: -150px; margin-left: 20px;
	}
	#panico{
		margin-top: -90px; margin-left: -30px;
	}
	#esquizofrenia{
		margin-top: -145px; margin-left: 15px;
	}
	#bipolaridade{
		margin-top: -80px; margin-left: 30px;
	}
	@media only screen and (max-width: 761px){
		#toc{
			width: 220px;
		}
		#bulimia{
			width: 160px;
			margin-left: -5px;
		}
		#autismo{
			width: 150px;
			margin-top: -120px;
		}
		#panico{
			width: 200px;
			margin-top: -75px;
			margin-left: -50px;
		}		
		#esquizofrenia{
			width: 205px;
			margin-top: -125px;
		}
		#bipolaridade{
			width: 150px;
			margin-left: 0px;
			margin-top: -75px;
		}
	}
</style>
</head>
<body >
	<?php 
	$toc = 'TOC é um transtorno psiquiátrico de ansiedade que tem como principal <br> característica a presença de crises recorrentes de obsessões e compulsões. ';
	$bulimia = 'Bulimia é um distúrbio que se caracteriza por episódios recorrentes <br> e incontroláveis de consumo de grandes quantidades de alimentos.';
	$autismo = 'O autismo é um transtorno de desenvolvimento que compromete as habilidades de comunicação <br> e interação social e geralmente aparece até os 3 anos de vida. ';
	$panico = 'A síndrome do pânico é um tipo de transtorno de ansiedade no qual ocorrem crises inesperadas <br> de desespero e medo intenso de que algo ruim aconteça, mesmo que não haja motivo algum para isso ou sinais de perigo iminente.';
	$esquizofrenia = 'A esquizofrenia é um transtorno psiquiátrico em que uma alteração cerebral dificulta o correto julgamento sobre a realidade,<br> a produção de pensamentos simbólicos e abstratos e a elaboração de respostas emocionais complexas.';
	$bipolaridade = 'O Transtorno Bipolar, também chamado de Transtorno Maníaco-Depressivo ou Bipolaridade,<br> é um transtorno mental caracterizado principalmente pela brusca mudança de humor.';

	?>
	<div class="container center-align" id="corpo"><br>
		<h3>
			<span style="background-color: red; padding: 5px; color: white">E</span>
			<span style="background-color: blue; padding: 5px; margin-left: -10px; color: white">M</span>
			<span style="background-color: purple; padding: 5px; margin-left: -10px; color: white">P</span>
			<span style="background-color: green; padding: 5px; margin-left: -10px; color: white">A</span>
			<span style="background-color: orange; padding: 5px; margin-left: -10px; color: white">T</span>
			<span style="background-color: grey; padding: 5px; margin-left: -10px; color: white">E</span>
			<span style="background-color: silver; padding: 5px; margin-left: -10px; color: white">C</span>
		</h3>
		<div class="row">
			<div class="col s6 l2 offset-l4 tooltipped" data-position="bottom" data-tooltip="<?php echo $toc; ?>"><img src="img/1.png" alt="toc" id="toc"></div>
			<div class="col s6 l2 tooltipped" data-position="bottom" data-tooltip="<?php echo $bulimia; ?>"><img src="img/2.png" alt="bulimia" id="bulimia"></div>
		</div>
		<div class="row">
			<div class="col s6 l2 offset-l4 tooltipped" data-position="bottom" data-tooltip="<?php echo $autismo; ?>"><img src="img/3.png" alt="autismo" id="autismo"></div>
			<div class="col s6 l2 tooltipped" data-position="bottom" data-tooltip="<?php echo $panico; ?>"><img src="img/4.png" alt="pânico" id="panico"></div>
		</div>
		<div class="row">
			<div class="col s6 l2 offset-l4 tooltipped" data-position="top" data-tooltip="<?php echo $esquizofrenia; ?>"><img src="img/5.png" alt="esquizofrenia" id="esquizofrenia"  ></div>
			<div class="col s6 l2 tooltipped" data-position="top" data-tooltip="<?php echo $bipolaridade; ?>"><img src="img/6.png" alt="bipolaridade" id="bipolaridade" ></div>
		</div>
	</div>

	<div class="video" style="display: none; margin: 0" id="video-container">
		<video id="video" style="width: 100%; height: 100vh;">
			Seu navegador não suporta o elemento <code>video</code>.
		</video>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$("document").ready(function(){
			$('.tooltipped').tooltip();
			$('#video').on('ended', function (e) {
				$('#video').css('display', 'none');
				$('#video-container').css('display', 'none');
				$('#corpo').css('display', 'block')
				$("body").css('background-image', 'linear-gradient(-90deg, yellow, purple)')
			});

			$("#toc").click(function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'toc.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#bulimia").click(function(){
				alert("bulimia")
			})
			$("#autismo").click(function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'autismo.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#panico").click(function(){
				alert("panico")
			})
			$("#esquizofrenia").click(function(){
				alert("esquizofrenia")
			})
			$("#bipolaridade").click(function(){
				alert("bipolaridade")
			})


		})
	</script>
</body>
</html>