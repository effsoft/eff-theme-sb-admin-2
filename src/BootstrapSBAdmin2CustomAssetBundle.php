<?php

namespace effsoft\eff\theme\sbadmin2;

use effsoft\eff\EffAssetBundle;

class BootstrapSBAdmin2CustomAssetBundle extends EffAssetBundle{

    public $sourcePath = '';

    public function init(){
        parent::init();
        $this->sourcePath = __DIR__.'/dist/custom';
    }

    public $css = [
        YII_ENV_DEV ? 'css/custom.css':'css/custom.min.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'js/custom.js':'js/custom.min.js',
    ];

    public $depends = [
        'effsoft\eff\theme\sbadmin2\BootstrapSBAdmin2AssetBundle',
    ];

    public $publishOptions = [
        'forceCopy' => YII_ENV_DEV ? true: false,
    ];

}