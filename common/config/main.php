<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],

        'formatter' => [
            'class' => \yii\i18n\Formatter::class,
            'dateFormat' => 'php:d-M-Y h-m',
            'datetimeFormat' => 'php:d-M h-m',
    
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => '$',
        ],
    ],
];
