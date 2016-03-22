<?php
	use common\widgets\Alert;
	use yii\widgets\Breadcrumbs;
?>
<div id="main">
	<div class="container-fluid">
		<div class="page-header">
			<div class="pull-left">
				<h1><?=isset($this->params['headerTitle']) ? $this->params['headerTitle'] : 'No Header Title';?></h1>
			</div>
		</div>
		<div class="breadcrumbs">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<div class="close-bread">
				<a href="#">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<?= Alert::widget() ?>
		<?= $content ?>
	</div>
</div>