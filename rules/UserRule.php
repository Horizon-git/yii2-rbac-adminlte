<?php

namespace bahirul\yii2rbac\adminlte\rules;

use Yii;
use yii\rbac\Rule;

/**
 * Class UserRule
 *
 * @package bahirul\yii2rbac\adminlte\rules
 */
class UserRule extends Rule
{
    /**
     * @inheritdoc
     */
    public $name = 'userRule';

    /**
     * @param int|string $user
     * @param \yii\rbac\Item $item
     * @param array $params
     *
     * @return mixed
     */
    public function execute($user, $item, $params)
    {
        return !Yii::$app->user->isGuest;
    }
}
