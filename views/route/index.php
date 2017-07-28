<?php

use bahirul\yii2rbac\adminlte\RbacRouteAsset;
use yii\helpers\Html;
use yii\helpers\Json;

RbacRouteAsset::register($this);

/* @var $this yii\web\View */
/* @var $routes array */

$this->title = Yii::t('yii2mod.rbac', 'Routes');
$this->params['breadcrumbs'][] = 'RBAC';
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="rbac-route">
    <div class="box box-primary">
		<div class="box-header with-border">
    		<h4><?php echo Html::encode($this->title); ?></h4>
    	</div>
	    <div class="box-body">
	    
			<?php echo Html::a(Yii::t('yii2mod.rbac', 'Refresh'), ['refresh'], [
                'class' => 'btn btn-primary',
                'id' => 'btn-refresh',
            ]); ?>
			<?php echo $this->render('../_dualListBox', [
                'opts' => Json::htmlEncode([
                    'items' => $routes,
                ]),
                'assignUrl' => ['assign'],
                'removeUrl' => ['remove'],
            ]); ?>

		</div>
	</div>
</div>