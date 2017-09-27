<?php

namespace App;

include_once "ShapeInterface.php";

class Circle implements ShapeInterface
{
	private $diameter;

	public function __construct($diameter){
		$this->diameter = $diameter;
	}

	/**
	 * Calculate area of the shape
	 * @return float
	 */
	public function area(){
		return round(pi() * $this->diameter/2 * $this->diameter/2, 2);
	}
}