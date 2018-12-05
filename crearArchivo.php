<?php
include 'variables.php';
    fwrite($archivo, $contArch);
    fclose($archivo);
    fclose($contArch);
    header('Location: index.php');
?>