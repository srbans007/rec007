<?php

include 'variables.php';

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- include libraries(jQuery, bootstrap, summernote) -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
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
        <!-- include datatable -->
        <script>
            $(document).ready(function() {
            $('#tabledt').DataTable();
          } );
        </script>

    </head>
    <body>
    <div class="container-fluid">
        <h4>Bienvenido a REC007.</h4>
        <!-- Editor de texto enriquecido -->
        <form action="crearArchivo.php" method="post">
            <textarea class="summernote" id="summernote" name="editordata"></textarea>
            <input class="form-control" type="text" name="nArch" placeholder="Nombre de archivo: (nombre.txt nombre.html, nombre.htm etc...)"><br>
            <input type="submit" class='btn btn-success' value="Crear Archivo">
        </form><br>

        <!-- Listado de busqueda -->
        <form action="pag4.php" method="post">
        <table id="tabledt" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'listar.php'; ?>
            </tbody>
            <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </tfoot>
        </table>
        </form>
    </div>
  </body>
</html>
