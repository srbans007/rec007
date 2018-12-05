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
        <script type="text/javascript" src="dist/lang/summernote-es-ES.js"></script>
        <link rel="stylesheet" href="css/example.css">
        <script type="text/javascript">
            $(document).ready(function () {
                $('.summernote').summernote({
                    height: 200,
                    tabsize: 2,
                    lang: 'es-ES'
                });
            });
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