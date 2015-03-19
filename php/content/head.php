<?php
	require_once(__DIR__ . '/../config.php');
	
	if (!defined('ROOT_PATH') || !defined('PAGE_NAME'))
		exit();
	
	if (defined('PAGE_TITLE'))
		$title = PAGE_TITLE . ' &bull; ' . PAGE_NAME;
	else
		$title = PAGE_NAME;
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH ?>/css/lantern.css">
</head>
