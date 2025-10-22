<?php
define('db_host', 'localhost');
define('db_user', 'root'); //user database
define('db_pass', ''); //passwd database
define('db_name', 'hrms360');

$mysqli = mysqli_connect(db_host, db_user, db_pass, db_name);
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
