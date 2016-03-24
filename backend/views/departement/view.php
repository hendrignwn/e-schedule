<?php

use yii\widgets\DetailView;

$this->params['headerTitle'] = 'View Departement #'.$model->id;
/* @var $this yii\web\View */
/* @var $model common\models\Departement */
?>
<div class="departement-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
				'attribute'=>'faculty_id',
				'value'=>$model->faculty->name,
				'format'=>'raw'
			],
            'name',
            'initial',
            'description',
            [
				'attribute'=>'color',
				'value'=>$model->getColorWithStyle(),
				'format'=>'raw'
			],
            [
				'attribute'=>'status',
				'value'=>$model->getStatusWithStyle(),
				'format'=>'raw'
			],
            'created_at:datetime',
            [
				'attribute'=>'created_by',
				'value'=>$model->createdBy->username,
			],
            'updated_at:datetime',
            [
				'attribute'=>'updated_by',
				'value'=>$model->updatedBy->username,
			],
        ],
    ]) ?>

</div>
