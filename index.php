<?php

Kirby::plugin('wearecandyblue/gdpr-kit', [
	'translations' => [
		/*
		We use cookies to personalize and optimize user experience. For more information, visit our Privacy Policy.
		*/
		'de' => [
			'wearecandyblue.gdpr-kit.cookie-consent-text' => 'Wir verwenden Cookies. Weitere Informationen finden Sie in unseren {data-privacy-statement}.',
			'wearecandyblue.gdpr-kit.cookie-consent-btn-approve' => 'Zustimmen',
			'wearecandyblue.gdpr-kit.cookie-consent-btn-reject' => 'Ablehnen',
			'wearecandyblue.gdpr-kit.data-privacy-statement-target' => 'de/datenschutz',
			'wearecandyblue.gdpr-kit.data-privacy-statement-link' => 'Datenschutzbestimmungen',
		]
	],

	'blueprints' => [
  	'pages/data-privacy-statement' => __DIR__ . '/blueprints/pages/data-privacy-statement.yml',
		'fields/gdpr-kit' => __DIR__ . '/blueprints/fields/gdpr-kit__cookie-soncent.yml'
  ],

	'snippets'     => [
		'cookie-consent-banner' => __DIR__ . '/snippets/cookie-consent-banner.php'
	]
]);
