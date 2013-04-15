<?php
interface IPlugin {
	public static function getName();
}

function findPlugins() {
	$plugins = array();
	foreach( get_declared_classes() as $class ) {
		$reflectionClass = new ReflectionClass($class);
		if($reflectionClass->implementsInterface('IPlugin')) {
			$plugins[] = $reflectionClass;
		}
	}
	return  $plugins;
}

function computeMenu() {
	$menu = array();
	foreach (findPlugins() as $plugin) {
		if($plugin->hasMethod('getMenuItems')) {
			$reflectionMethod = $plugin->getMethod('getMenuItems');
			if($reflectionMethod->isStatic()){
				$items = $reflectionMethod->invoke(null);				
			} else {
				$pluginInstance = $plugin->newInstance();
				$items = $reflectionMethod->invoke($pluginInstance);
			}
			$menu = array_merge($menu, $items);
		}
	}
	return $menu;
}

function computeArticles() {
	$articles = array();
	foreach (findPlugins() as $plugin) {
		if($plugin->hasMethod('getArticles')) {
			$reflectionMethod = $plugin->getMethod('getArticles');
			if($reflectionMethod->isStatic()){
				$items = $reflectionMethod->invoke(null);
			} else {
				$pluginInstance = $plugin->newInstance();
				$items = $reflectionMethod->invoke($pluginInstance);
			}
			$articles = array_merge($articles, $items);
		}
	}
	return $articles;
}

function computeSidebars() {
	$sidebars = array();
	foreach (findPlugins() as $plugin) {
		if($plugin->hasMethod('getSidebars')) {
			$reflectionMethod = $plugin->getMethod('getSidebars');
			if($reflectionMethod->isStatic()){
				$items = $reflectionMethod->invoke(null);
			} else {
				$pluginInstance = $plugin->newInstance();
				$items = $reflectionMethod->invoke($pluginInstance);
			}
			$sidebars = array_merge($sidebars, $items);
		}
	}
	return $sidebars;
}

require_once('/path/to/plugin.php');
$menu = computeMenu();
$sidebars = computeSidebars();
$articles = computeArticles();

/*
 * 用任意方法输出结果.
 * 可能是对echo的调用,也可能是一个完整的模板引擎.
 * 
 * SPL使用类自动加载特性,不用手工包含插件.
 * 会是一个非常容易管,即插即用的插件系统.
 */

print_r($menu);
print_r($sidebars);
print_r($articles);
?>