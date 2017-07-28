<?php

namespace bahirul\yii2rbac\adminlte\tests\models;

use Yii;
use yii\rbac\Rule;
use bahirul\yii2rbac\adminlte\models\BizRuleModel;
use bahirul\yii2rbac\adminlte\rules\GuestRule;
use bahirul\yii2rbac\adminlte\tests\TestCase;

/**
 * Class BizRuleTest
 *
 * @package bahirul\yii2rbac\adminlte\tests\models
 */
class BizRuleTest extends TestCase
{
    public function testCreateRule()
    {
        $model = new BizRuleModel();
        $model->name = 'guest';
        $model->className = GuestRule::class;

        $this->assertTrue($model->save());

        $rule = Yii::$app->authManager->getRule($model->name);
        $this->assertInstanceOf(Rule::class, $rule);

        return $rule;
    }

    /**
     * @depends testCreateRule
     *
     * @param $rule
     */
    public function testRemoveRule($rule)
    {
        $this->assertTrue(Yii::$app->authManager->remove($rule));
    }

    public function testTryToCreateRuleWithInvalidClassName()
    {
        $model = new BizRuleModel();
        $model->name = 'guest';
        $model->className = 'invalid className';

        $this->assertFalse($model->save());
        $this->assertArrayHasKey('className', $model->getErrors());
    }
}
