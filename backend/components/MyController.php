<?php
namespace backend\components;

use yii\web\Controller;
use yii\widgets\Menu;
use yii\helpers\Url;

class MyController extends Controller {
	
	public function behaviors() {
		
		parent::behaviors();
	}
	
	public function mainMenu(){
		$mainMenu = Menu::widget([
			'options' => ['class' => 'main-nav'],
			'items' => [
				['label' => 'Dashboard', 'url' => ['/site/index']],
				['label' => 'Courses', 'url' => ['/course/index']],
				['label' => 'Schedule', 'url' => ['/schedule/index']],
				['label' => 'Tasks', 'url' => ['/task/index']],
				['label' => 'Master',  
					'url' => ['#'],
					'template' => '<a href="{url}" data-toggle="dropdown" class="dropdown-toggle">{label}&nbsp;&nbsp;<span class="caret"></></a>',
					'options' => ['class' => 'dropdown'],
					'items' => [
						['label' => 'Category', 'url' => Url::toRoute('category/index')],
						['label' => 'Faculty', 'url' => Url::toRoute('faculty/index')],
						['label' => 'Departement', 'url' => Url::toRoute('departement/index')],
						['label' => 'Semester', 'url' => '#'],
					],
				],
			],
			'submenuTemplate' => "\n<ul class='dropdown-menu'>\n{items}\n</ul>\n",
			'encodeLabels' => false, //allows you to use html in labels
			'activateParents' => true]
		);
		return $mainMenu;
	}
	
	public function leftMenu() {
		
	}
}