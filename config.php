<?php
// DB credentials.
define('DB_HOST','localhost');//database host name
define('DB_USER','root');//database user name
define('DB_PASS','');//database password
define('DB_NAME','pdo_study');//database name
define('DB_CHARSET','utf8mb4');
// Establish database connection.

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
try {
  $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
  $dbh = $pdo;
} catch (PDOException $e) {
  error_log($e->getMessage());
  exit("Error: " . $e->getMessage());
  //exit('Something weird happened'); //something a user can understand
}
?>