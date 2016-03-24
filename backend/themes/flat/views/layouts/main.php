<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;

$asset = backend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - <?=Yii::$app->name?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?=$this->render('header.php', ['baseUrl'=>$baseUrl])?>
<div class="container-fluid" id="content">
	<?=$this->render('left-menu.php', ['baseUrl'=>$baseUrl])?>
	<?=$this->render('content.php', ['content'=>$content])?>
</div>

<?php $this->endBody() ?>
	<script>
		$(document).ready( function() {
			$('.dropdown-toggle').dropdown();
		});
	</script>
</body>
</html>
<?php $this->endPage() ?>
