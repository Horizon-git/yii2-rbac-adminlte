<?php

use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this \yii\web\View */
/* @var $gridViewColumns array */
/* @var $dataProvider \yii\data\ArrayDataProvider */
/* @var $searchModel \bahirul\yii2rbac\adminlte\models\search\AssignmentSearch */

$this->title = Yii::t('yii2mod.rbac', 'Assignments');
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="assignment-index">

    <div class="box box-primary">

        <div class="box-header with-border">
            <h4><?php echo Html::encode($this->title); ?></h4>
        </div>

        <div class="box-body">
            <?php Pjax::begin(['timeout' => 5000]); ?>

            <?php echo GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'layout' => "{items}\n{summary}\n{pager}",
                'columns' => ArrayHelper::merge($gridViewColumns, [
                    [
                        'class' => 'bahirul\yii2rbac\adminlte\grid\ActionColumn',
                        'template' => '{view}',
                    ],
                ]),
            ]); ?>

        <?php Pjax::end(); ?>
        </div>

    </div>
</div>
