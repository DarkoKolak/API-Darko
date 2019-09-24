<?php 
require_once 'restfull.php';
$url = 'http://darko.codefactory.live/webservice.php';
$json = file_get_contents($url);
$obj = json_decode($json);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Chellenge</title>
</head>
<body>
	<?php echo $obj->name; echo $obj->username; echo $obj->lastname; ?>

</body>
</html>