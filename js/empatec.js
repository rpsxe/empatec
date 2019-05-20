	$('#modalDescricao').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var titulo = button.data('nome') 
		var id = button.data('id') 

		var modal = $(this)
		modal.find('.tituloModal').text(titulo)
		modal.find('.id').text(id)
		modal.find('.btnId').attr('id', id)	
	})

	$(".btnId").on('click', function(){
		var videoElement = document.getElementById("video");
		var id = $(this).attr('id')
		$("#video").attr('autoplay', '').attr('src', id + '.mp4')

		$("body").css('background-image', 'none').css('background-color', 'black')
		$("#video").css('display', 'block')
		$("#video-container").css('display', 'block')
		$("#corpo").css('display', 'none')

		$('#video').on('play', function (e) {
			videoElement.requestFullscreen();	
		});

		$('#video').on('ended', function (e) {
			$('#video').css('display', 'none');
			$('#video-container').css('display', 'none');
			$('#corpo').css('display', 'block')
			$("body").css('background-color', 'white')
			$('#modalDescricao').modal('hide')
			var doc = window.document;
			var docEl = doc.documentElement;

			var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl.webkitRequestFullScreen || docEl.msRequestFullscreen;
			var cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen || doc.msExitFullscreen;

			if(!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement) {
				requestFullScreen.call(docEl);
			}
			else {
				cancelFullScreen.call(doc);
			}
		});

	})


