<?php 
session_start();

define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DB_NAME', 'miryenda_management_system');
define('SITEURL','http://localhost/FirstProjectOrdering/');

$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

// if(mysqli_connect_error()){
//     echo ("Sayang Boss, bawal eh");
// }else{
//     echo("Nuxx Wan brad! Pasok");
// }

?>