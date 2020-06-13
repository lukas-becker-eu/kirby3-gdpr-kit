<?php

Kirby::plugin('wearecandyblue/gdpr-kit', [
	'translations' => [
		'de' => [
			'wearecandyblue.gdpr-kit.text'       => 'Diese Website benutzt Cookies, um seinen Lesern das beste Webseiten-Erlebnis zu ermöglichen.',
			'wearecandyblue.gdpr-kit.linkText'   => 'Mehr Infos',
			'wearecandyblue.gdpr-kit.buttonText' => 'Ich habe verstanden',
		]
	],
	'snippets'     => [
		'cookie' => __DIR__ . '/snippets/cookie.php'
	]
]);
