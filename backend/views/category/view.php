<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
?>
<div class="category-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
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
