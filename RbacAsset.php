<?php

namespace bahirul\yii2rbac\adminlte;

use yii\web\AssetBundle;

/**
 * Class RbacAsset
 *
 * @package bahirul\yii2rbac\adminlte
 */
class RbacAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/bahirul/yii2-rbac-adminlte/assets';

    /**
     * @var array
     */
    public $js = [
        'js/rbac.js',
    ];

    public $css = [
        'css/rbac.css',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
