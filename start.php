<?php

/*
    INTRANET ZENTER: START
*/

define('path',dirname(__FILE__));
if ( isset($USER_KEY) ) {
    include(path.'/core/core.php');
    initZenter();
}
else {
    echo 'Bad request!';
}
?>
