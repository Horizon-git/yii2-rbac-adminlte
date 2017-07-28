<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \bahirul\yii2rbac\adminlte\models\BizRuleModel */

$this->title = Yii::t('yii2mod.rbac', 'Update Rule : {0}', $model->name);
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii2mod.rbac', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = Yii::t('yii2mod.rbac', 'Update');
$this->render('/layouts/_sidebar');
?>
<div class="rule-item-update">

    <div class="box box-primary">
		<div class="box-header with-border">
    		<h4><?php echo Html::encode($this->title); ?></h4>
    	</div>
	    <div class="box-body">
		    <?php echo $this->render('_form', [
		        'model' => $model,
		    ]); ?>
		</div>
	</div>
	
</div>