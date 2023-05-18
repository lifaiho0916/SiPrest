<!DOCTYPE html>
<html>
<head>
    <title>Guardar archivos en servidor local</title>
    <style>
        input[type="file"] {
            margin-bottom: 10px;
        }

        input[type="text"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 300px;
        }

        .btn {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn:hover {
            background-color: #0069d9;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <form action="codigo3.php" method="post" enctype="multipart/form-data">
            <label>Selecciona los archivos:</label>
            <br>
            <input type="file" name="archivos[]" multiple>
            <br>
            <label>Ingresa el nombre de la carpeta destino:</label>
            <br>
            <input type="text" name="nombre_carpeta">
            <br>
            <input type="submit" value="Guardar" class="btn">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </form>
    </div>

    <?php
    // Verificar que se hayan seleccionado archivos
    if(isset($_FILES['archivos']) && $_FILES['archivos']['error'][0] == 0){

        // Crear la carpeta de destino
        $nombre_carpeta = $_POST['nombre_carpeta'];
        if(!is_dir($nombre_carpeta)){
            mkdir($nombre_carpeta);
        }

        // Guardar los archivos en la carpeta de destino
        foreach($_FILES['archivos']['tmp_name'] as $key => $tmp_name ){
            $nombre_archivo = $_FILES['archivos']['name'][$key];
            $ruta_archivo = $nombre_carpeta.'/'.$nombre_archivo;
            move_uploaded_file($tmp_name, $ruta_archivo);
        }

        // Mensaje de éxito
        echo "Los archivos han sido guardados correctamente.";
    } else {
        // Mensaje de error
        echo "No se han seleccionado archivos o ha ocurrido un error en el proceso de guardado.";
    }
    ?>

</body>
</html>
