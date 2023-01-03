<!DOCTYPE html>
<html lang="de">
<head>

<title>Schneile</title>
<meta charset="utf-8">
<link rel="icon" href="files/schneile.jpg" type="image/ico">
<style type="text/css">
	html {
		margin-left: 32px;
		padding-bottom: 64px;
		background-color: #181818;
		color: #FFFFFF;
		font: 1em/1.5em Arial, Helvetica, sans-serif;
	}

	html, table, tr, td {
		text-size-adjust: none;
		-webkit-text-size-adjust: none;
	}

	u, s {
		font-variant: small-caps;
		text-decoration: none;
	}
	u {
		color: #FFFFFF;
		text-shadow:
			0 0 .1em #FFFFFF,
			0 0 .2em #FFFFFF,
			0 0 .3em #FFFFFF;
	}
	s {
		color: #FF0000;
		text-shadow:
			0 0 .1em #FF0000,
			0 0 .2em #FF0000,
			0 0 .3em #FF0000;
	}
<?php
	foreach ([3.5, 2.5, 2, 1.6, 1.3, 1.1] as $i => $em) {
		$n = $i + 1;
		$factor = 5 - $i;
		$offset1 = str_pad(.010 * $factor, 5, '0') . 'em';
		$offset2 = str_pad(.007 * $factor, 5, '0') . 'em';
		$blur    = str_pad(.008 * $factor, 5, '0') . 'em';
		$offset1p = "+$offset1";
		$offset2p = "+$offset2";
		$offset1n = "-$offset1";
		$offset2n = "-$offset2";
		$zero = str_pad(0, 4);
		echo
			"\n\th$n, h$n u {" .
			"\n\t\ttext-shadow:" .
			"\n\t\t\t$zero     $offset1n $blur #FFFF00," .
			"\n\t\t\t$zero     $offset1p $blur #FF0000," .
			"\n\t\t\t$offset1n $zero     $blur #00FF00," .
			"\n\t\t\t$offset1p $zero     $blur #0000FF," .
			"\n\t\t\t$offset2n $offset2n $blur #7FFF00," .
			"\n\t\t\t$offset2n $offset2p $blur #FFFF00," .
			"\n\t\t\t$offset2p $offset2n $blur #7F7F7F," .
			"\n\t\t\t$offset2p $offset2p $blur #FF00FF;" .
			"\n\t}" .
			"\n\th$n {" .
			"\n\t\tfont-size: {$em}em;" .
			"\n\t}";
	}
?>
	h1, h2, h3, h4, h5, h6 {
		margin-top: 1em;
		margin-bottom: .5em;
		line-height: 1.25em;
	}
</style>
<?php
	ini_set('display_errors', '1');
	error_reporting(E_ALL & ~E_NOTICE);

	function exists_in($name, $dir) {
		return in_array($name, array_filter(scandir($dir), function($file) {
			return !is_dir("$dir/$file");
		}));
	}

	$page = $_GET['p'];
	if (!exists_in("$page.php", 'pages')) $page = 'index';

	if (exists_in("$page.css", 'css')) echo "\n<link href=\"css/$page.css\" rel=\"stylesheet\">\n"
?>
</head>
<body>

<?php
	include "pages/$page.php";
?>

</body>
</html>
