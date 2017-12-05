<?php

namespace app\themes\altezza\assets;

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
			'css/site.css',
		];

		$this->js = [
			'js/jquery.bxslider'.$min.'.js',
			'js/script.js',
		];
	}	

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}