<?php

use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\bootstrap\Html;
use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Faculty */
$this->params['headerTitle'] = 'View Faculty #'.$model->id;
?>
<div class="faculty-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'initial',
            'description',
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
	
	<table class="table table-condensed">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Initial</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php 
			$no=1;
			foreach($model->departements as $departement): ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$departement->name?></td>
				<td><?=$departement->initial?></td>
				<td><?=$departement->getStatusWithStyle()?></td>
				<td><?=Html::a('<i class="fa fa-eye"></i>', Url::toRoute('departement/view/'.$departement->id))?></td>
			</tr>
		<?php endforeach; ?>
</div>
