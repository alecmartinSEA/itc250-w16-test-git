<?php
//Item.php
class Item {
	public $name = '';
	public $description = '';
	public $price = '';


	public function __construct($name, $description, $price )
	{
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
	
	}



}