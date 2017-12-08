<?php

namespace app\themes\altezza\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Class AltezzaAsset
 * @package app\themes\altezza\assets
 */
class AltezzaAsset extends AssetBundle
{

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
            'js/jquery.bxslider' . $min . '.js',
            'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper' . $min . '.js',
            'js/script.js',
        ];

        // Подключаем свои файлы Bootstrap
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => $this->sourcePath,
            'css' => ['https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap' . $min . '.css'],
        ];
    }

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}