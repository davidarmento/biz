<?php

//domain
define('domain','http://localhost/Proyectos%20Personales/zenter');

//Clientes
$clientes = array(

    //Anelis
    'an5685' => array(
        'db_table' => 'anelis',
        'modules' => array(
            'facture' => true,
            'planing' => true,
            'hosting' => true,
            'domains' => true
        )
    )

    //Otros clientes

);

//db connect
define('db_server','localhost');
define('db_user','root');
define('db_pass','');
define('db_table',$clientes[$USER_KEY]['db_table']); //Heredado del cliente actual
?>
