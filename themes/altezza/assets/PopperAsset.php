<?php

namespace app\themes\altezza\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Class PopperAsset
 * @package app\themes\altezza\assets
 */
class PopperAsset extends AssetBundle
{
    public $js;

    public function init()
    {
        parent::init();

        $min = YII_ENV_DEV ? '' : '.min';

        $this->js = [
            '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper' . $min . '.js',
        ];
    }
}