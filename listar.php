<?php

include 'variables.php';

while ($elemento = readdir($directorio)) {
    if ($elemento != '.' && $elemento != '..') {
        if (is_dir("archivos/" . $elemento)) {
            //si directorio
            } else {
            //si archivo
            $fArchivo = date ("F d Y H:i:s.", filemtime("archivos/" . $elemento));
            $listar .=
            "<tr>
                <td>
                    <input type='hidden' name='nArchm' value='$elemento' />
                    <a href='pagImagen.php?url=$elemento'>$elemento
                </td>
                <td>
                    $fArchivo
                </td>
                <td>
                    <input type='hidden' name='nArchm' value='$elemento' />
                    <a href='pag4.php?url=$elemento' class='btn btn-info' role='button'>Modificar</a>
                    <a href='borrarArchivo.php?url=$elemento' class='btn btn-danger' role='button'>borrar</a>
                </td>
	           </tr>";
            }
    }
}
echo $listar;
?>
