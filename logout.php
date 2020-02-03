<?php

session_start();
$_SESSION['user'] = '';
session_unset();
session_destroy();
header("Location: login.php");

?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?= style_script() ?>
	<title>Input New Record</title>
</head>
</html>