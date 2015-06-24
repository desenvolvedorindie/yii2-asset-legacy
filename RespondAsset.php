<?php

namespace wfcreations\legacy;

use yii\web\AssetBundle;

class RespondAsset extends AssetBundle {

    public $sourcePath = '@bower/respond';
    public $js = [
        'dest/respond.min.js'
    ];
    public $jsOptions = ['condition' => 'lte IE 9'];

}
