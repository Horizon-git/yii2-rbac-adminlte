<?php

namespace bahirul\yii2rbac\adminlte\controllers;

use yii\rbac\Item;
use bahirul\yii2rbac\adminlte\base\ItemController;

/**
 * Class PermissionController
 *
 * @package bahirul\yii2rbac\adminlte\controllers
 */
class PermissionController extends ItemController
{
    /**
     * @var int
     */
    protected $type = Item::TYPE_PERMISSION;

    /**
     * @var array
     */
    protected $labels = [
        'Item' => 'Permission',
        'Items' => 'Permissions',
    ];
}
