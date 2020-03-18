<?php 

//constants
define('HASH_GENERAL_KEY', 'MixitUp200');

define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

//database
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc3');
define('DB_USER', 'root');
define('DB_PASS', '');

//paths
define('URL', 'http://localhost/jreammvc/');

define('LIBS', 'libs/');

$permissions = array(
    'admin'=> array(
        'list' => array('index'),
        'add'  =>  array('add'),
        'change'=> array('edit'),
        'delete'=> array('delete')
    ),
    'admin_group'=> array(
        'list' => array('index'),
        'add'  =>  array('add'),
        'change'=> array('edit'),
        'delete'=> array('delete')
    ),
    'customers'=> array(
        'list' => array('index'),
        'add'  =>  array('add'),
        'change'=> array('edit'),
        'delete'=> array('delete')
    ),
);