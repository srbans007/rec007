<?php
$listar = null;
$directorio = opendir('archivos/');
$nArchivo = $_GET['url'];
$nFichero = 'archivos/'.$nArchivo;
$oFichero = fopen($nFichero, 'r');
$contenido = fread($oFichero, filesize($nFichero));
$nombreArch =$_POST['nArch'];
$contArch =$_POST['editordata'];
$archivo = fopen('archivos/'.$nombreArch, 'w+');
?>