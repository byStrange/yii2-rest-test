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
    'i18n' => [
      'translations' => [
        'backend*' => [
          'class' => 'yii\i18n\PhpMessageSource',
          'basePath' => '@common/messages/',
          'sourceLanguage' => 'en-US'
        ],
        'frontend*' => [
          'class' => 'yii\i18n\PhpMessageSource',
          'basePath' => '@common/messages/',
          'sourceLanguage' => 'en-US'
        ]
      ]
    ]
  ],
];
