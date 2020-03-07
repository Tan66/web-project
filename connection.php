<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'webproject'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 
// $db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to database: " . mysqli_error());
//echo "successfull"
?>