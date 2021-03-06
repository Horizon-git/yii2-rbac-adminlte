<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model \bahirul\yii2rbac\adminlte\models\BizRuleModel */

$this->title = Yii::t('yii2mod.rbac', 'Rule : {0}', $model->name);
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii2mod.rbac', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
$this->render('/layouts/_sidebar');
?>
<div class="rule-item-view">
    
    <div class="box box-primary">
        <div class="box-header with-border">
            <h4><?php echo Html::encode($this->title); ?></h4>
        </div>
        <div class="box-body">
            <p>
                <?php echo Html::a(Yii::t('yii2mod.rbac', 'Update'), ['update', 'id' => $model->name], ['class' => 'btn btn-primary']); ?>
                <?php echo Html::a(Yii::t('yii2mod.rbac', 'Delete'), ['delete', 'id' => $model->name], [
                    'class' => 'btn btn-danger',
                    'data-confirm' => Yii::t('yii2mod.rbac', 'Are you sure to delete this item?'),
                    'data-method' => 'post',
                ]); ?>
            </p>

            <?php echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name',
                    'className',
                ],
            ]); ?>
        </div>
    </div>
</div>
