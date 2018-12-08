<?php

include 'variables.php';

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- include libraries(jQuery, bootstrap, summernote) -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="dist/summernote.css" rel="stylesheet">
        <script src="dist/summernote.js"></script>
        <script>$(document).ready(function() {
        $("#summernote").summernote({
          placeholder: '...',
                height: 300,
                 callbacks: {
                onImageUpload : function(files, editor, welEditable) {

                     for(var i = files.length - 1; i >= 0; i--) {
                             sendFile(files[i], this);
                    }
                }
            }
            });
        });
        function sendFile(file, el) {
        var form_data = new FormData();
        form_data.append('file', file);
        $.ajax({
            data: form_data,
            type: "POST",
            url: 'editor-upload.php',
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                $(el).summernote('editor.insertImage', url);
            }
        });
        }
        </script>
    </head>
    <div class="container-fluid">
        <h4>Bienvenido a REC007</h4>
        <!-- Editor de texto enriquecido -->

        <form action='modificarArchivo.php' method='post'>
        <?php
        echo "<textarea class='summernote' id='summernote' name='editordata'>$contenido</textarea>";
        echo "<input class='form-control' type='text' name='nArch' value='$nArchivo'><br>";
        ?>
        <input type="submit" class='btn btn-success' value="Guardar Cambios">
        </form>
    </div>
</html>
