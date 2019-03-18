<?php

namespace effsoft\eff\theme\sbadmin2;

use effsoft\eff\EffAssetBundle;

class BootstrapSBAdmin2AssetBundle extends EffAssetBundle{
    public $sourcePath = '@bower/startbootstrap-sb-admin-2';

    public function init(){
        parent::init();
    }

    public $css = [
        YII_ENV_DEV ? 'css/sb-admin-2.css':'css/sb-admin-2.min.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'js/sb-admin-2.js':'js/sb-admin-2.min.js',
    ];
    public $depends = [
        'effsoft\eff\asset\jquery\JqueryAssetBundle',
        'effsoft\eff\asset\bootstrap\bundle\BootstrapBundleAssetBundle',
        'effsoft\eff\asset\jquery\easing\JqueryEasingAssetBundle',
        'effsoft\eff\asset\magnific\popup\MagnificPopupAssetBundle',
        'effsoft\eff\asset\chart\js\ChartJsAssetBundle'
    ];
    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
            'img/*',
        ],
    ];
}