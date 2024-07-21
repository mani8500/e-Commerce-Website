
<?php
define('DB_NAME','sravipati1');
define('DB_USER','sravipati1');
define('DB_PASSWORD','sravipati1');
define('DB_HOST','localhost');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
