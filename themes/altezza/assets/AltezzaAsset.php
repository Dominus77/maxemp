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
            'css/jquery.bxslider' . $min . '.css',
            'css/style.css',
            'css/site.css',
        ];

        $this->js = [
            'js/jquery.bxslider' . $min . '.js',
            'js/script.js',
        ];

        // Подключаем свои файлы Bootstrap
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'css' => ['//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap' . $min . '.css'],
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'js' => ['//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap' . $min . '.js'],
        ];

        // Подключаем свои файлы jQuery
        Yii::$app->assetManager->bundles['yii\web\JqueryAsset'] = [
            'js' => ['//code.jquery.com/jquery-3.2.1.slim' . $min . '.js'],
        ];
    }

    public $depends = [
        'yii\web\JqueryAsset',
        'app\themes\altezza\assets\PopperAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}