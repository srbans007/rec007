<?php
include 'variables.php';
fwrite($archivo, $contArch);
unlink($nFichero);
    fclose($archivo);
    fclose($contArch);
    header('Location: index.php');
?>