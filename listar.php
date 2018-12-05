<?php

include 'variables.php';

while ($elemento = readdir($directorio)) {
    if ($elemento != '.' && $elemento != '..') {
        if (is_dir("archivos/" . $elemento)) {            
            //si directorio
            } else {
            //si archivo
            $listar .= 
            "<tr>
                <td>
                    <a href='archivos/$elemento'>$elemento
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