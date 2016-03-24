<div id="left">
	<form action="search-results.html" method="GET" class='search-form'>
		<div class="search-pane">
			<input type="text" name="search" placeholder="Search here...">
			<button type="submit">
				<i class="fa fa-search"></i>
			</button>
		</div>
	</form>
	<div class="subnav">
		<div class="subnav-title">
			<a href="#" class='toggle-subnav'>
				<i class="fa fa-angle-down"></i>
				<span>Content</span>
			</a>
		</div>
		<?php	
			use yii\widgets\Menu;
			echo Menu::widget([
				'options' => ['class' => 'subnav-menu'],
				'items' => isset($this->params['menu']) ? $this->params['menu'] : [],
			]);  ?>
	</div>
</div>