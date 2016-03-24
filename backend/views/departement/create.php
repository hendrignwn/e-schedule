<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Departement */

?>
<div class="departement-create">
    <?= $this->render('_form', [
        'model' => $model,
		'faculties' => $faculties,
    ]) ?>
</div>
