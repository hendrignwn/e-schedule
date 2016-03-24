<?php
return [
	'name' => 'E-Schedule',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'modules' => [
		'gridview' =>  [
			'class' => '\kartik\grid\Module'
			// enter optional module parameters below - only if you need to  
			// use your own export download action or custom translation 
			// message source
			// 'downloadAction' => 'gridview/export/download',
			// 'i18n' => []
		]
	],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
