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
    <title><?= Html::encode($this->title) ?></title>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=$baseUrl?>/css/bootstrap.min.css">
	<!-- icheck -->
	<link rel="stylesheet" href="<?=$baseUrl?>/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?=$baseUrl?>/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?=$baseUrl?>/css/themes.css">


	<!-- jQuery -->
	<script src="<?=$baseUrl?>/js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="<?=$baseUrl?>/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Validation -->
	<script src="<?=$baseUrl?>/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="<?=$baseUrl?>/js/plugins/validation/additional-methods.min.js"></script>
	<!-- icheck -->
	<script src="<?=$baseUrl?>/js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?=$baseUrl?>/js/bootstrap.min.js"></script>
	<script src="<?=$baseUrl?>/js/eakroko.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->


	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
</head>
<body class='login'>
<div class="wrapper">
		<h1>
			<a href="#">
				<img src="<?=$baseUrl?>/img/logo-big.png" alt="" class='retina-ready' width="59" height="49"><?=Yii::$app->name?></a>
		</h1>
		<div class="login-body">
			<h2>SIGN <span class="color-green-qq">IN</span></h2>
			<?=$content?>
		</div>
	
</div>

</body>
</html>
