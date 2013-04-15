<?php
class MyCoolPlugin implements IPlugin {
	public static function getName() { return 'MyCoolPlugin'; }
	
	public static function getMenuItems() {
		return array(array(
				'description' => 'MyCoolPlugin', 
				'link' => '/MyCoolPlugin'
		));
	}
	
	public static function getArticles() {
		return array(array(
				'path' => '/MyCoolPlugin', 
				'title' => 'This is a really cool article',
				'text' => 'This article is cool because...'
		));
	}
}
?>