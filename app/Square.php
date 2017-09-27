<?php

namespace App;

include_once "ShapeInterface.php";

class Square implements ShapeInterface
{
	private $width;

	public function __construct($width){
		$this->width = $width;
	}

	/**
	 * Calculate area of the shape
	 * @return float
	 */	
	public function area(){
		return round($this->width * $this->width, 2);
	}
}