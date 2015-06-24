<?php

namespace wfcreations\legacy;

use yii\web\AssetBundle;

class HTML5ShivAsset extends AssetBundle {

    public $sourcePath = '@bower/html5shiv';
    public $js = [
        'dist/html5shiv.min.js'
    ];
    public $jsOptions = ['condition' => 'lte IE 9'];

}
