<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => '127.0.0.1',
		'DATABASE' => 'c6339sr_2021',
		'USER'     => 'c6339sr_2021',
		'PASSWORD' => 'SF9gaJ3Pj#Kht'
	],
	'BASE_URL' => '/bewijzenmap-2e/Periode-1/f2m5-team/',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'PUBLIC'     => dirname( __DIR__, 2 ),  // Vanaf dit bestand 2 mappen omhoog
	'PRIVATE'  => dirname( __DIR__ )
];
// 'DB'       => [
// 	'HOSTNAME' => '127.0.0.1',
// 	'DATABASE' => 'c6339sr_2021',
// 	'USER'     => 'c6339sr_2021',
// 	'PASSWORD' => 'SF9gaJ3Pj#Kht'
// ]
return $config;
