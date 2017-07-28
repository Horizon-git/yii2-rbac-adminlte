<?php

namespace bahirul\yii2rbac\adminlte\controllers;

use yii\rbac\Item;
use bahirul\yii2rbac\adminlte\base\ItemController;

/**
 * Class RoleController
 *
 * @package bahirul\yii2rbac\adminlte\controllers
 */
class RoleController extends ItemController
{
    /**
     * @var int
     */
    protected $type = Item::TYPE_ROLE;

    /**
     * @var array
     */
    protected $labels = [
        'Item' => 'Role',
        'Items' => 'Roles',
    ];
}
