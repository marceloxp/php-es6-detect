<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';
	require_once dirname(dirname(__FILE__)) . '/src/PhpEs6Detect.php';
	use \marceloxp\PhpEs6Detect;
	PhpEs6Detect::setScriptFolder('js');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP ES6 Detect</title>
</head>
<body>
	<h1>PHP ES6 Detect</h1>
	<hr/>
	<div id="jsengine">Could not detect Script version.</div>
	<script type="text/javascript" src="<?php echo JSFOLDER; ?>/main.js"></script>
</body>
</html>