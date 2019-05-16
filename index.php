<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>Empatec</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<style>
	.aviso{
		display: none;
	}
	.bulimia{
		width: 220px;
		height: 210px;
		padding: 10px;
		margin-top: 20px;
		margin-left: 30px;
	}
	.panico{
		width: 220px;
		height: 250px;
		padding: 10px;
		margin-left: -45px;
	}
	.bipolaridade{
		width: 220px;
		height: 240px;
		padding: 10px;
		margin-top: 5px;
		margin-left: -45px;
	}
	.toc{
		width: 260px;
		height: 250px;
		padding: 10px;
		margin-top: -60px;
		margin-left: 10px;
	}
	.autismo{
		width: 220px;
		height: 250px;
		padding: 10px;
		margin-top: -60px;
		margin-left: -65px;
	}
	.esquizofrenia{
		width: 220px;
		height: 250px;
		padding: 10px;
		margin-top: -60px;
		margin-left: -45px;
	}
	.zoom{
		cursor: pointer;
	}
	.zoom img{
		-moz-transition: all 0.3s;
		-webkit-transition: all 0.3s;
		transition: all 0.3s;
	}
	.zoom:hover img{
		-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
	}
	#logo{
		margin-left: -80px;
	}
	@media only screen and (max-width: 500px) {
		.aviso{
			display: block;
		}
		#corpo{
			display: none;
		}

	}
	@media only screen and (max-width: 700px) {
		body {
			overflow-x: hidden;
			width: 100%;
		}
		.modal p{
			font-size: 12px;
		}
		#corpo{
			margin-left: 25px;
		}
		.pecas{
			margin-left: 60px;
		}
		.bulimia{
			width: 120px;
			height: 110px;
			padding: 10px;
			margin-top: 20px;
			margin-left: 30px;
		}
		.panico{
			width: 120px;
			height: 130px;
			padding: 10px;
			margin-left: -33px;
			margin-top: 10px;
		}
		.bipolaridade{
			width: 120px;
			height: 125px;
			padding: 10px;
			margin-top: 13px;
			margin-left: -33px;
		}
		.toc{
			width: 140px;
			height: 130px;
			padding: 10px;
			margin-top: -40px;
			margin-left: 20px;
		}
		.autismo{
			width: 120px;
			height: 131px;
			padding: 10px;
			margin-top: -40px;
			margin-left: -43px;
		}
		.esquizofrenia{
			width: 120px;
			height: 130px;
			padding: 10px;
			margin-top: -40px;
			margin-left: -33px;
		}
		#logo{
			margin-left: -20px;
		}
	}
</style>

</head>
<body class="text-center" >

	<div class="aviso">
		<img src="img/logo.png" alt="Empatec logo" class="img-fluid my-5" id="logo"><br><br>
		<h1>
			<i class="material-icons" style="font-size: 68px">
				screen_rotation
			</i>
			<br>
			Por favor, deixe seu smartphone na horizontal.
		</h1>
	</div>
	<div id="corpo">
		<div class="container">
			<div class="col-8 mx-auto">
				<img src="img/logo.png" alt="Empatec logo" class="img-fluid my-3" id="logo" ondragstart="return false">
			</div>
			<div class="col-8 mx-auto">
				<div class="row text-center">
					<div class="zoom">
						<img src="img/2.png" alt="bulimia" class="img-fluid bulimia " data-id="bulimia" ondragstart="return false" data-toggle="modal" data-target="#modalDescricao" data-nome="Bulimia">
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
								Se você tiver algum desconforto durante a experiência, por favor, sinalize ao seu médico psiquiatra ou psicologo.
							</p>
							<button type="button" class="btn btn-danger" data-dismiss="modal" >Sair</button>
							<button type="button" class="btn btn-primary btnId">Ver</button>
						</div>
					</div>
				</div>
			</div>
			<div class="div">

				<div class="footer-copyright text-center py-3">© 2019 Copyright:
					<a href="https://www.urcamp.tche.br/cursos/graduacao/sistemas-de-informacao" target="_blank">Sistemas de Informação</a>
				</div>

			</div>
		</div>
	</div>


	<div class="video" style="display: none; margin: 0" id="video-container" >
		<video id="video" style="width: 100%; height: 100vh;">
			Seu navegador não suporta o elemento <code>video</code>.
		</video>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		$('#modalDescricao').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget)
			var titulo = button.data('nome') 
			var id = button.data('id') 

			var modal = $(this)
			modal.find('.tituloModal').text(titulo)
			modal.find('.id').text(id)
			modal.find('.btnId').attr('id', id)
			carregaVideo()			
		})


		function carregaVideo(e){
			$('#video').on('ended', function (e) {
				$('#video').css('display', 'none');
				$('#video-container').css('display', 'none');
				$('#corpo').css('display', 'block')
				$("body").css('background-color', 'white')
				$('#modalDescricao').modal('hide')
			});

			$("#toc").on('click', function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'toc.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#bulimia").on('click', function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'bulimia.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#autismo").on('click', function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'autismo.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#panico").on('click', function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'panico.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#esquizofrenia").on('click', function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'esquizofrenia.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
			$("#bipolaridade").on('click', function(){
				$("body").css('background-image', 'none').css('background-color', 'black')
				$("#video").css('display', 'block')
				$("#video").attr('autoplay', '').attr('src', 'bipolaridade.mp4')
				$("#video-container").css('display', 'block')
				$("#corpo").css('display', 'none')
			})
		}

	</script>
</body>

</html>
