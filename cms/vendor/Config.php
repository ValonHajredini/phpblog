<?php
// Deklarimii i konstantave per konektimin me databas
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASSWORD','password');
define ('DB_NAME','phpblog');
// Thirrja e Clases Database
include 'Database.php';
// Instacncimi ( Krijimi ) i objekteve
$db = new Database();