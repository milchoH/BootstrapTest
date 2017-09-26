<?php
//Enter your database connection details here.
$host = 'localhost'; //HOST NAME.
$db_name = 'XXXXdb_name'; //Database Name
$db_username = 'XXXXuser'; //Database Username
$db_password = 'XXXXpass'; //Database Password

try {
$conn = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>