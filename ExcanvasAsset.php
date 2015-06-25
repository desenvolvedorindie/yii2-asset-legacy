<?php

namespace wfcreations\legacy;

use yii\web\AssetBundle;

class ExcanvasAsset extends AssetBundle {

    public $sourcePath = '@bower/excanvas';
    public $js = [
        'excanvas.js'
    ];
    public $jsOptions = ['condition' => 'lte IE 8'];

}
