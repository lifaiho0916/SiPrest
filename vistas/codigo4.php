<!DOCTYPE html>
<html>
  <head>
    <title>Guardar múltiples archivos en carpeta local</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

     <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
        padding: 20px;
      }

      form {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
      }

      h1 {
        font-size: 2rem;
        margin-bottom: 20px;
      }

      label {
        font-size: 1.2rem;
        display: block;
        margin-bottom: 10px;
      }

      input[type="file"] {
        display: block;
        margin-bottom: 20px;
      }

      .btn {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1.2rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .btn:hover {
        background-color: #3e8e41;
      }

      #preview-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 40px;
      }

      .preview-image {
        width: 150px;
        height: 150px;
        margin: 10px;
        object-fit: cover;
        cursor: pointer;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
      }

      .preview-image:hover {
        transform: scale(1.05);
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
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
      }

      .modal-content:hover {
        transform: scale(1.05);
      }

      .modal.show {
        opacity: 1;
        visibility: visible;
      }
    </style>
  </head>
  <body>
    <form action="codigo4.php" method="POST" enctype="multipart/form-data">
    <div></div>
      <label for="archivos">Selecciona uno o varios archivos:</label>
      <input type="file" name="archivos[]" id="archivos" multiple onchange="previewImages(event)"><br>
      <input type="submit" name="submit" value="Guardar archivos">
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
		if (isset($_FILES['archivos'])) {
  			$total_archivos = count($_FILES['archivos']['name']);

 		for ($i = 0; $i < $total_archivos; $i++) {
    		if ($_FILES['archivos']['error'][$i] === UPLOAD_ERR_OK) {

      	// El archivo se cargó correctamente, continúa con el proceso
      	$ruta_destino = '../vistas/assets/img/garantias/' . $_FILES['archivos']['name'][$i];
      		if (move_uploaded_file($_FILES['archivos']['tmp_name'][$i], $ruta_destino)) {

        // El archivo se movió correctamente a la carpeta de destino
        echo 'Archivo ' . $i . ' guardado correctamente.<br>';
      		} else {

        // Hubo un error al mover el archivo a la carpeta de destino
        echo 'Error al guardar el archivo ' . $i . '.<br>';
      		}
    		} else {

      // Hubo un error al cargar el archivo
      echo 'Error al cargar el archivo ' . $i . '.<br>';
    }
  }
}
?>

  </body>
</html>
