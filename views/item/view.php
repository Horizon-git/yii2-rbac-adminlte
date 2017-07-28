<?php

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\DetailView;
use bahirul\yii2rbac\adminlte\RbacAsset;

RbacAsset::register($this);

/* @var $this yii\web\View */
/* @var $model \bahirul\yii2rbac\adminlte\models\AuthItemModel */

$labels = $this->context->getLabels();
$this->title = Yii::t('yii2mod.rbac', $labels['Item'] . ' : {0}', $model->name);
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii2mod.rbac', $labels['Items']), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
$this->render('/layouts/_sidebar');
?>
<div class="auth-item-view">
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
                <?php echo Html::a(Yii::t('yii2mod.rbac', 'Create'), ['create'], ['class' => 'btn btn-success']); ?>
            </p>
            <div class="row">
                <div class="col-sm-12">
                    <?php echo DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'name',
                            'description:ntext',
                            'ruleName',
                            'data:ntext',
                        ],
                    ]); ?>
                </div>
            </div>
            <?php echo $this->render('../_dualListBox', [
                'opts' => Json::htmlEncode([
                    'items' => $model->getItems(),
                ]),
                'assignUrl' => ['assign', 'id' => $model->name],
                'removeUrl' => ['remove', 'id' => $model->name],
            ]); ?>
        </div>
    </div>
</div>
