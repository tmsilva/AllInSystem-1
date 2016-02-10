<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','asd.123');
define('DBNAME','allinsystem');

$host = "localhost";
$user = "root";
$pass = "asd.123";
$banco = "allinsystem";

//application address
define('DIR','http://allinsystem.com/');
define('SITEEMAIL','thiagomelosg@gmail.com');

try {

    //create PDO connection 
    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('usuario.php');
include('phpmailer/mail.php');

$user = new Usuario($db);