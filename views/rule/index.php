<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ArrayDataProvider */
/* @var $searchModel bahirul\yii2rbac\adminlte\models\search\BizRuleSearch */

$this->title = Yii::t('yii2mod.rbac', 'Rules');
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="role-index">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h4><?php echo Html::encode($this->title); ?></h4>
        </div>
        <div class="box-body">
            <p>
                <?php echo Html::a(Yii::t('yii2mod.rbac', 'Create Rule'), ['create'], ['class' => 'btn btn-success']); ?>
            </p>

            <?php Pjax::begin(['timeout' => 5000]); ?>

            <?php echo GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'name',
                        'label' => Yii::t('yii2mod.rbac', 'Name'),
                    ],
                    [
                        'header' => Yii::t('yii2mod.rbac', 'Action'),
                        'class' => 'bahirul\yii2rbac\adminlte\grid\ActionColumn',
                    ],
                ],
            ]);
            ?>

            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
