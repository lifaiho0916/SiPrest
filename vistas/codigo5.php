<html>
<head>
	<title>Input en PHP con preview y galería</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		#preview-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		.preview-image {
			width: 150px;
			height: 150px;
			margin: 10px;
			object-fit: cover;
			cursor: pointer;
		}

		.preview-image:hover {
			transform: scale(1.1);
		}

		.modal {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.8);
			display: flex;
			justify-content: center;
			align-items: center;
			overflow: hidden;
			z-index: 999;
			opacity: 0;
			visibility: hidden;
			transition: opacity 0.2s ease-in-out;
		}

		.modal-content {
			max-width: 90%;
			max-height: 90%;
			object-fit: contain;
			cursor: pointer;
		}

		.modal-content:hover {
			transform: scale(1.2);
		}

		.modal.show {
			opacity: 1;
			visibility: visible;
		}
	</style>
</head>
<body>

	<h1>Input en PHP con preview y galería</h1>
	<form action="codigo.php" method="POST" enctype="multipart/form-data">
		<div>
			<label for="archivo">Selecciona uno o varios archivos:</label>
			<input type="file" name="archivo" id="archivo" multiple onchange="previewImages(event)">
			<input type="submit" name="submit" value="Guardar archivo" multiple>
		</div>
			<div id="preview-container"></div>
	</form>

	<div id="modal-container" class="modal">
		<img id="modal-image" class="modal-content">
	</div>

	

	<script>
		function previewImages(event) {
			const previewContainer = document.getElementById('preview-container');
			previewContainer.innerHTML = '';
			if (event.target.files) {
				Array.from(event.target.files).forEach((file) => {
					const reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onloadend = () => {
						const image = new Image();
						image.src = reader.result;
						image.classList.add('preview-image');
						image.onclick = () => {
							showModal(reader.result);
						};
						previewContainer.appendChild(image);
					};
				});
			}
		}

		function showModal(imageSource) {
			const modalContainer = document.getElementById('modal-container');
			const modalImage = document.getElementById('modal-image');
			modalImage.src = imageSource;
			modalContainer.classList.add('show');
			modalContainer.onclick = () => {
				modalContainer.classList.remove('show');
			};
		}
	</script>

	<?php
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
  // El archivo se cargó correctamente, continúa con el proceso
  $ruta_destino = '../vistas/assets/img/garantias/' . $_FILES['archivo']['name'];
  if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_destino)) {
    // El archivo se movió correctamente a la carpeta de destino
    echo 'Archivo guardado correctamente.';
  } else {
    // Hubo un error al mover el archivo a la carpeta de destino
    echo 'Error al guardar el archivo.';
  }
} else {
  // Hubo un error al cargar el archivo
  die('Error al cargar el archivo.');
}
?>


</body>
</html>

