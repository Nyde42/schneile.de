<h1>Gut Ding Will Schneile Haben</h1>

<p>
	Der Podcast, den mein früheres Ich gebraucht hätte.
</p><p>
	Ich rede über Themen, die mich beschäftigen.
	Mal mit Gästen, mal alleine.
	Für alle, die mich auch mal ungefiltert kennenlernen wollen.
</p>

<table border=0 id="linktree">
<?php
	foreach ([
		['amazon',  'Amazon Music',    'https://music.amazon.de/podcasts/fdb2f624-2072-4aa6-8bef-bbf9345904a0/gut-ding-will-schneile-haben'],
		['anchor',  'Anchor',          'https://anchor.fm/schneile'],
		['apple',   'Apple Podcasts',  'https://podcasts.apple.com/us/podcast/gut-ding-will-schneile-haben/id1628501842'],
		['google',  'Google Podcasts', 'https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy85YWE1MDNlNC9wb2RjYXN0L3Jzcw'],
		['spotify', 'Spotify',         'https://open.spotify.com/show/62uV2bgZawEKScQTSp9jvW'],
		['youtube', 'YouTube',         'https://www.youtube.com/@gdwsh']
	] as $data) {
		$id   = $data[0];
		$name = $data[1];
		$url  = $data[2];
		echo "\t<tr><td><a href=\"$url\"><img src=\"files/icon_$id.png\"></a></td><td>$name</td></tr>\n";
	}
?></table>
