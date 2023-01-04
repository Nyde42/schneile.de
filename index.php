<?php
	ini_set('display_errors', '1');
	error_reporting(E_ALL);

	const DEFPAGE = 'index';

	function exists_in(string $dir, string $name): bool {
		return in_array($name, array_filter(scandir($dir), function($file) use ($dir) {
			return !is_dir("$dir/$file");
		}));
	}

	$page = array_key_exists('p', $_GET) ? $_GET['p'] : DEFPAGE;
	if (!exists_in('pages', "$page.php")) $page = DEFPAGE;

?><!DOCTYPE html>
<html lang="de">
<head>

    <title>Schneile</title>
    <meta charset="utf-8">
    <link rel="icon" href="files/schneile.jpg" type="image/jpeg"/>

    <link href="css/_.css" rel="stylesheet">
    <?php if (exists_in('css', "$page.css")) echo "<link href=\"css/$page.css\" rel=\"stylesheet\">\n"; ?>
    <?php if (exists_in('js',  "$page.js"))  echo "\n<script src=\"js/$page.js\"></script>\n"; ?>

</head>
<body>

<!-- Idea: Put an iframe here that acts as a sandbox for subpages. Not sure if this is a good idea though. -->
<?php include "pages/$page.php"; ?>

</body>
</html>
