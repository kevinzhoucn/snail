<?php
class MenuItem {
	private $_name = '';
	private $_description = '';
	private $_vegetarian = FALSE;
	private $_price = 0.0;
	
	public function __construct(
			$name, $description, 
			$vegetarian, $price){
		$this->_name = $name;
		$this->_description = $description;
		$this->_vegetarian = $vegetarian;
		$this->_price = $price;
	}
	
	public function getName(){
		return $this->_name;
	}
	
	public function getDescription() {
		return $this->_description;
	}
	
	public function getPrice(){
		return $this->_price;
	}
	
	public function isVegetarian() {
		return $this->_vegetarian;
	}
}

class PancakeHouseMenu {
	private $_menuItem;
	public function __construct() {
		$this->_menuItem = array();
		$this->addItem("01.K&B's Pancake Breakfast", 
				"Pancakes with scrambled eggs, and toast", 
				TRUE, 2.99);
		$this->addItem("02.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				FALSE, 3.99);
		$this->addItem("03.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				TRUE, 4.99);
	}
	
	public function addItem(
			$name, $description, 
			$vegetarian, $price){
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->_menuItem[] = $menuItem;
	}
	
	public function getMenuItem() {
		return $this->_menuItem;
	}
}

class DinerMenu {
	private $_menuItem;
	public function __construct() {
		$this->_menuItem = array();
		$this->addItem("01.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				TRUE, 2.99);
		$this->addItem("02.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				FALSE, 3.99);
		$this->addItem("03.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				TRUE, 4.99);
	}

	public function addItem(
			$name, $description,
			$vegetarian, $price){
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->_menuItem[] = $menuItem;
	}

	public function getMenuItem() {
		return $this->_menuItem;
	}
}

class CafeMenu {
	private $_menuItem;
	public function __construct() {
		$this->_menuItem = array();
		$this->addItem("01.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				TRUE, 2.99);
		$this->addItem("02.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				FALSE, 3.99);
		$this->addItem("03.K&B's Pancake Breakfast",
				"Pancakes with scrambled eggs, and toast",
				TRUE, 4.99);
	}

	public function addItem(
			$name, $description,
			$vegetarian, $price){
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->_menuItem[] = $menuItem;
	}

	public function getMenuItem() {
		return $this->_menuItem;
	}
}

$menu = array(PancakeHouseMenu(), new DinerMenu(), new CafeMenu()); 
//$waitress = new PancakeHouseMenu();
//$menu = $waitress->getMenuItem();
//var_dump($waitress);
//var_dump($menu);

foreach ($menu as $key => $item){
	//echo $key. '=> ' . $item;
	// echo $key;
	//var_dump($item);
	
	foreach ($item as $child){
		//echo $child->getMenuItem();
		//echo "<br />";
	}	
}
?>