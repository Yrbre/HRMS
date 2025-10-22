<?php
define('db_host', '172.31.197.2');
define('db_user', 'sbr'); //user database
define('db_pass', 'Tifico@12345'); //passwd database
define('db_name', 'hrms360');

$mysqli = mysqli_connect(db_host, db_user, db_pass, db_name);
