<?php

namespace bahirul\yii2rbac\adminlte;

/**
 * GUI manager for RBAC.
 *
 * Use [[\yii\base\Module::$controllerMap]] to change property of controller.
 *
 * ```php
 * 'controllerMap' => [
 *     'assignment' => [
 *         'class' => 'bahirul\yii2rbac\adminlte\controllers\AssignmentController',
 *         'userIdentityClass' => 'app\models\User',
 *         'searchClass' => [
 *              'class' => 'bahirul\yii2rbac\adminlte\models\search\AssignmentSearch',
 *              'pageSize' => 10,
 *         ],
 *         'idField' => 'id',
 *         'usernameField' => 'username'
 *         'gridViewColumns' => [
 *              'id',
 *              'username',
 *              'email'
 *         ],
 *     ],
 * ],
 * ```php
 */
class Module extends \yii\base\Module
{
    /**
     * @var string the default route of this module. Defaults to 'default'
     */
    public $defaultRoute = 'assignment';

    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'bahirul\yii2rbac\adminlte\controllers';
}
