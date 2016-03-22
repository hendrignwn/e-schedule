<?php
namespace backend\components;

use yii\web\Controller;
use yii\widgets\Menu;

class MyController extends Controller {
	
	public function behaviors() {
		
		parent::behaviors();
	}
	
	public function mainMenu(){
		$mainMenu = Menu::widget([
			'options' => ['class' => 'main-nav'],
			'items' => [
				['label' => 'Dashboard', 'url' => ['/dashboard/index']],
				['label' => 'Menu 2', 'url' => ['/link2/index']],
				['label' => 'Submenu',  
					'url' => ['#'],
					'template' => '<a href="{url}" data-toggle="dropdown">{label}&nbsp;&nbsp;<span class="caret"></></a>',
					'options' => ['class' => 'dropdown'],
					'items' => [
						['label' => 'Action', 'url' => '#'],
						['label' => 'Another action', 'url' => '#'],
						['label' => 'Something else here', 'url' => '#'],
					],
				],
			],
			'submenuTemplate' => "\n<ul class='dropdown-menu'>\n{items}\n</ul>\n",
			'encodeLabels' => false, //allows you to use html in labels
			'activateParents' => true]
		);
		return $mainMenu;
	}
}