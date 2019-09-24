
<?php
// DB connection parameters
$servername = "173.212.235.205";
$username = "darkocod_darko";
$password = "_L@]tX_QU2?g";
$dbname = "darkocod_testing";

// Create the DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the DB connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>