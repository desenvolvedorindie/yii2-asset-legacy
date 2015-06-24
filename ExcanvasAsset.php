<?php

namespace wfcreations\legacy;

use yii\web\AssetBundle;

class ExcanvasAsset extends AssetBundle {

    public $sourcePath = '@bower/respond';
    public $js = [
        'excanvas.js'
    ];
    public $jsOptions = ['condition' => 'lte IE 8'];

}
