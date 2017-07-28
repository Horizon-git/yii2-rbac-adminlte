<?php

use yii\helpers\Html;
use yii\helpers\Json;
use bahirul\yii2rbac\adminlte\RbacAsset;

RbacAsset::register($this);

/* @var $this yii\web\View */
/* @var $model \bahirul\yii2rbac\adminlte\models\AssignmentModel */
/* @var $usernameField string */

$userName = $model->user->{$usernameField};
$this->title = Yii::t('yii2mod.rbac', 'Assignment : {0}', $userName);
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = ['label' => Yii::t('yii2mod.rbac', 'Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $userName;
$this->render('/layouts/_sidebar');
?>
<div class="assignment-index">

	<div class="box box-primary">
	    <div class="box-header with-border">
	        <h4><?php echo Html::encode($this->title); ?></h4>
	    </div>
		<div class="box-body">
	    <?php echo $this->render('../_dualListBox', [
	        'opts' => Json::htmlEncode([
	            'items' => $model->getItems(),
	        ]),
	        'assignUrl' => ['assign', 'id' => $model->userId],
	        'removeUrl' => ['remove', 'id' => $model->userId],
	    ]); ?>
		</div>
	</div>
</div>
