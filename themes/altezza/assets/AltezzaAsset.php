<?php

namespace app\themes\altezza\assets;

use Yii;
use yii\web\AssetBundle;

class AltezzaAsset extends AssetBundle{

	public $sourcePath = '@app/themes/altezza/assets/src';

	public $css;
	public $js;

	public function init()
	{
		parent::init();
		$min = YII_ENV_DEV ? '' : '.min';
		$this->css = [
			'css/jquery.bxslider.css',
			'css/style.css',
		];

		$this->js = [
			'js/jquery.bxslider'.$min.'.js',			
			[
				'https://code.jquery.com/jquery-3.2.1.slim.min.js',
				'integrity' => 'sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN',
				'crossorigin' => 'anonymous',
			],
			[
				'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js',
				'integrity' => 'sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh',
				'crossorigin' => 'anonymous',
			],
			'js/script.js',
		];

		// Подключаем свои файлы Bootstrap
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
                'sourcePath' => $this->sourcePath,
                'css' => ['https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'],
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => $this->sourcePath,
            'js' => [
            	[
            		'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js',
            		'integrity' => 'sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ',
            		'crossorigin' => 'anonymous',
            	],
            ],
        ];
	}	

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}