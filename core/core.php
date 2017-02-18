<?php
//Incluimos configuracion
include(path.'/config.php');

//Iniciamos Intranet Zenter
function initZenter() {
    //Draw App Shell
    $appShell = file_get_contents(path.'/appshell.html');
    $appShell = str_replace('{domain}',domain,$appShell);
    echo $appShell;
}
?>
